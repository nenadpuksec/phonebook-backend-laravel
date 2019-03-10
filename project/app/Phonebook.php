<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $table='phonebook';
    protected $fillable = ['first_name', 'last_name','telephone_number','deleted'];
    public $timestamps = false;
}

