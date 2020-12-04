<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table ='dashboard';
   		 protected $fillable =['id','name'];
}
