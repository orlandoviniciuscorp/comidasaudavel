<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class ProducerContact extends Model
{
    //

    protected $table;


    protected $fillable = ['producer_id','contact_id'];


    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }



}
