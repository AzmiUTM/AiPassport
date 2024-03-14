<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpvSettingItem extends Model
{
    use HasFactory;
    protected $table;
    protected $primaryKey = 'ppv_setting_itemid';
    public $timestamps = false;


    protected $fillable = [
        'PPV_SETTINGID',
        'PPV_SETTINGVALUE',
        'PPV_STATUS',
        'PPV_ADDEDON',
        'PPV_ADDEDBY',
        'PPV_UPDATEDON',
        'PPV_UPDATEDBY',
        'PPV_DELETEDON',
        'PPV_DELETEDBY',
    ];
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_SETTING_ITEM';
    }




}
