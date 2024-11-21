<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\table;

class Journal extends Model
{
   use HasFactory;

   protected $fillable = [
        "entry",
        "emotion",
   ];
   protected $table = "journal";


}


