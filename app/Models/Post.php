<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'body',
        'team_id',
        'user_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('team')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function getByPost(int $limit_count = 5)
    {
        return $this->comments()->with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
