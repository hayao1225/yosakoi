<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'image_url',
        'prefecture_id',
        'user_id'
        ];
        
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
