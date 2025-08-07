<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "tbl_admin";
    protected $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        'adminID',
        'adminFname',
        'adminMI',
        'adminLname',
        'adminEmail',
        'adminPassword',
        'adminAccess',
    ];
}
