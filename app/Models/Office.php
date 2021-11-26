<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Authenticatable
{
    /*use HasFactory;
    protected $fillable = ['build_num', 'build_name', 'office_name'];*/

    use Notifiable;
    protected $table = 'tbloffice';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','officeName','officeBuildingNum', 'officePassword','officeStatus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'officePassword', 'remember_token',
    ];


    public function getAuthPassword()
    {
      return $this->officePassword;
    }
}
