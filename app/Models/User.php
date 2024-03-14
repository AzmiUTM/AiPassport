<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $connection ='oracle_ai';
    protected $table;
    protected $primaryKey = 'ppv_userid';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('dbschema.ai').'.PPV_USER ';
    }
    protected $fillable = [
        'ppv_username',
        'ppv_email',
        'ppv_password',
        'ppv_createdon',
        'ppv_updatedby'
    ];

    // kena merge
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
