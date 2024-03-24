<?php

namespace App\Http\Controllers;

use App\Models\PpvSetting;
use Illuminate\Http\Request;
use App\Models\PpvSettingItem;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\NotificationController;


class SettingController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware(function ($request, $next)
        {
            $this->user = Auth::user();
            return $next($request);
        });

    }

    public function list()
    {
        $settings = PpvSetting::with('setting_item')
        ->whereNull(['ppv_deletedon','ppv_deletedby'])
        ->orderBy('PPV_ADDEDON', 'DESC')
        ->get();

        return view('setting.list', compact('settings'));
    }

    public function create()
    {
        return view('setting.create');
    }

    public function store(Request $request)
    {
        // $user = Auth::user();

        $request->validate([
                // 'ppv_settingname' => 'required|'.Rule::unique(PpvSetting::class),
                'ppv_settingname' => 'required|unique:'.PpvSetting::class,
            ],[
                'ppv_settingname.required' => 'Name is required',
                'ppv_settingname.unique' => 'Name has already taken',
            ]
        );

        $setting = PpvSetting::create([
            'PPV_SETTINGNAME' => $request->ppv_settingname,
            'PPV_SETTINGDESC' => $request->ppv_settingdesc,
            'PPV_REMARK' => $request->ppv_remark,
            'PPV_ADDEDON' => NOW(),
            'PPV_ADDEDBY' => $this->user->ppv_username,
        ]);

        $settingId = $setting->ppv_settingid;

        foreach($request->ppv_settingvalue as $key=>$settingItem)
        {
            PpvSettingItem::create([
                'PPV_SETTINGID' =>  $settingId,
                'PPV_SETTINGVALUE' => $request->ppv_settingvalue[$key],
                'PPV_STATUS' => $request->ppv_status[$key],
                'PPV_ADDEDON' => NOW(),
                'PPV_ADDEDBY' => $this->user->ppv_username,
            ]);
        }

        $notify = (new NotificationController ())->createNotify();

        return redirect()->route('setting.list')->with($notify);
    }

    public function edit($ppv_settingid)
    {
        $settingId = Crypt::decryptString($ppv_settingid);
        $setting = PpvSetting::with('setting_item')->findOrFail($settingId);

        return view('setting.edit', compact('setting'));
    }

    public function update(Request $request , $ppv_settingid)
    {
        $request->validate([
                'ppv_settingname' => 'required',
                'ppv_settingdesc' => 'required',
                'ppv_remark' => 'required',
            ],[
                'ppv_settingname.required' => 'Name is required',
                'ppv_settingdesc' => 'Description is required',
            ]
        );

        $settingId = Crypt::decryptString($ppv_settingid);

        $setting = PpvSetting::where('ppv_settingid', $settingId)->update([
            'PPV_SETTINGNAME' => $request->ppv_settingname,
            'PPV_SETTINGDESC' => $request->ppv_settingdesc,
            'PPV_REMARK' => $request->ppv_remark,
            'PPV_ADDEDON' => NOW(),
            'PPV_ADDEDBY' => $this->user->ppv_username,
        ]);

        // dd($this->user->ppv_username);
        // dd($request->all());
        $itemId = $request->ppv_setting_itemid;
        foreach($request->ppv_settingvalue as $key => $value)
        {
            if(isset($itemId[$key]) && !empty($itemId[$key]) )
            {
                // update
                PpvSettingItem::where('ppv_setting_itemid',  $itemId[$key])->update([
                    'PPV_SETTINGVALUE' => $request->ppv_settingvalue[$key],
                    'PPV_STATUS' => $request->ppv_status[$key],
                    'PPV_UPDATEDON' => NOW(),
                    'PPV_UPDATEDBY' => $this->user->ppv_username,
                ]);
            }else{
                PpvSettingItem::create([
                    'PPV_SETTINGID' =>  $settingId,
                    'PPV_SETTINGVALUE' => $request->ppv_settingvalue[$key],
                    'PPV_STATUS' => $request->ppv_status[$key],
                    'PPV_ADDEDON' => NOW(),
                    'PPV_ADDEDBY' => $this->user->ppv_username,
                ]);
            }
        }
        $notify = (new NotificationController ())->updateNotify();

        return redirect()->back()->with($notify);
    }


    public function delete(Request $request)
    {

        $settingId = Crypt::decryptString($request->id);

        $setting = PpvSetting::where('ppv_settingid', $settingId)->update([
            'ppv_deletedon' => NOW(),
            'ppv_deletedby' => $this->user->ppv_username,
        ]);

        return response()->json((new NotificationController ())->deleteNotify());

    }

}
