<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table = "todoList";
    protected $fillable = array('texte', 'termine')
}
