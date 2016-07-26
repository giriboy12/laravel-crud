<?php
/**
 * Created by PhpStorm.
 * User: Rosham
 * Date: 7/12/2016
 * Time: 7:33 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class role extends Model

{
protected $fillable = ['name'];
    function users()
    {

        return $this->hasMany(Role::class);
        }



}