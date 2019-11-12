<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    //

    protected $table;


    protected $fillable = ['name','description'];


    public function producerContacts()
    {
        return $this->hasMany(ProducerContact::class);
    }


}
