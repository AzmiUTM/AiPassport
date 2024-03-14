<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpvStudent extends Model
{
    use HasFactory;

    protected $connection = 'oracle_ai';
    protected $table;
    protected $primaryKey = 'ppv_studentid';
    public $timestamps = false;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_STUDENT';
    }

    // public function photo(): HasMany
    // {
    //     return $this->hasMany(PpvPhoto::class);
    // }
}
