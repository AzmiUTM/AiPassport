<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpvLog extends Model
{
    use HasFactory;
    protected $connection = 'oracle_ai';
    protected $table;
    protected $primaryKey = 'ppv_logid';
    public $timestamps = false;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_LOG';
    }

    public function PpvPhoto()
    {
        return $this->belongsTo(PpvPhoto::class, 'ppv_photoid', 'ppv_photoid');
    }

    public function PpvStudent()
    {
        return $this->belongsTo(PpvStudent::class, 'ppv_studentid','ppv_studentid');
    }
}
