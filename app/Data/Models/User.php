<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $table;


    protected $fillable = ['name','username', 'email','email_verified_at','password', 'user_type_id'];


    public function ProducerContacts()
    {
        return $this->hasMany(ProducerContacts::class);
    }


    public function userType(){
        return $this->belongsTo(UserType::class);
    }

}
