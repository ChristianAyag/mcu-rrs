<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $table = 'tbl_pi_info';

    // 👇 if your primary key is NOT "id"
    protected $primaryKey = 'pi_ID';

    // 👇 if your PK is NOT auto-increment
    public $incrementing = false;

    // 👇 if your PK is a string (like varchar)
    protected $keyType = 'string';
    protected $fillable = [
        'pi_Lname',
        'pi_fname',
        'pi_MI',
        'pi_Email',
        'Co_Investigators',
        'pi_school',
        'pi_title',
        'pi_program',
        'pi_Password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'userPassword',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            //'email_verified_at' => 'datetime',
            //'password' => 'hashed',
        ];
    }
}
