<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
use HasFactory;
protected $table='commentaires';
protected $fillable=[
'content',
'user_id',
'task_id'
];
}