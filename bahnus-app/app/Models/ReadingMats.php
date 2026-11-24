<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingMats extends Model
{
    protected $table = "readingmats_table"; 

    protected $fillable = ['topic', 'infotexts', 'extra_links'];
}
