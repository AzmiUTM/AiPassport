<?php

namespace App\Models;

use App\Models\PpvSettingItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PpvSetting extends Model
{
    use HasFactory;
    protected $connection = 'oracle_ai';
    protected $table;
    protected $primaryKey = 'ppv_settingid';
    public $timestamps = false;

    protected $fillable = [
        'PPV_SETTINGNAME',
        'PPV_SETTINGDESC',
        'PPV_REMARK',
        'PPV_ADDEDON',
        'PPV_ADDEDBY',
    ];


    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_SETTING';
    }

    public function setting_item()
    {
        return $this->hasMany(PpvSettingItem::class, 'ppv_settingid');
    }

}
