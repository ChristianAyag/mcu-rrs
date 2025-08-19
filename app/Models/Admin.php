<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // extends authenticatable for auth features
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'adminID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'adminID',
        'adminFname',
        'adminMI',
        'adminLname',
        'adminEmail',
        'adminPassword',
        'adminAccess',
    ];

    protected $hidden = [
        'adminPassword',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->adminPassword;
    }
}
