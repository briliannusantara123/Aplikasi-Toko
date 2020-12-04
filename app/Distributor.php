<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
         protected $table ='distributor';
    	 protected $fillable =['kd_distributor','distributor','alamat','no_telepon'];
}
