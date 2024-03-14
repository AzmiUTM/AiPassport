<?php

namespace App\Models;

use App\Models\PpvStudent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PpvPhoto extends Model
{
    use HasFactory;

    protected $connection = 'oracle_ai';
    protected $table;
    protected $primaryKey = 'ppv_photoid';
    public $timestamps = false;

    protected $fillable = [];

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_PHOTO';
    }

    public function PpvStudent()
    {
       return $this->belongsTo(PpvStudent::class, 'ppv_studentid','ppv_studentid');
    }

    public function PpvSetting()
    {
        return $this->hasOne(PpvSetting::class, 'ppv_settingid', 'ppv_settingid');
    }
}
