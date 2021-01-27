<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles_user()
    {
        return $this->hasOne('App\Models\Roles_user', 'id_user');
    }

    public function show_all(){
        
        return DB::table('users')
            ->join('roles_users', 'users.id', '=', 'roles_users.id_user')
            ->select(['users.id', 'users.name', 'users.email', 'users.created_at', 'roles_users.rol','roles_users.status' ])
            ->get();

    }

    public function show_find($id){
        return DB::table('users')
            ->where('users.id', $id)
            ->join('roles_users', 'users.id', '=', 'roles_users.id_user')
            ->select(['users.id', 'users.name', 'users.email', 'users.created_at', 'roles_users.rol','roles_users.status' ])
            ->first();
    }
}
