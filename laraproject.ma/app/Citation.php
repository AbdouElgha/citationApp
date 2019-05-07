<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $table='citation';
    protected $fillable=['citation','auteur','lue'];

    //protected $citation;

}
