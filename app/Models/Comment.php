<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'body',
        'user_id',
        'post_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
