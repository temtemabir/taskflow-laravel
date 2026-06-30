<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Task extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='taches';
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'estimated_hours',
        'project_id',
        'assigned_to',
        'category_id',
    ];
    protected $casts = [
        'due_date' => 'date',
        'priority' => 'integer',
        'estimated_hours' => 'decimal:2',
    ];
    public function project()
    { 
        return $this->belongsTo(Project::class);
    }
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }

}
