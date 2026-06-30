<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='projets';

    protected $fillable = [
        'name',
        'description',
        'status',
        'priority',
        'start_date',
        'due_date',
        'owner_id',
    ];
    protected $casts = [
        'start_date' => 'date',
        'due_date' => 'date',
        'priority' => 'integer',
    ];
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function members()
    {
        return $this->belongsToMany(User::class, 'project_user')
        ->withPivot('role')
        ->withTimestamps();
    }

/**
* Tâches du projet
*/
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


}
