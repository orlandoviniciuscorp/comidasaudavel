<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table;


    protected $fillable = ['contact','contact_type_id'];


    public function contactType()
    {
        return $this->belongsTo(ContactType::class);
    }
}
