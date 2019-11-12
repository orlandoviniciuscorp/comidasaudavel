<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    //

    protected $table;


    protected $fillable =['title','start','end','created_by_id','updated_by_id'];

}
