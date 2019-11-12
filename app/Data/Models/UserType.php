<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //

    protected $table;


    protected $fillable = ['name'];


    public function ProducerContacts()
    {
        return $this->hasMany(ProducerContacts::class);
    }


}
