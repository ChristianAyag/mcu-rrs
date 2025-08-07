<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
        'password',
        'remember_token',
    ];
}
