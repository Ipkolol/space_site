<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'up_vote' => 0,
        'down_vote' => 0,
        'thumbnail' => 'thumbnail_placeholder.png'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'article',
        'slug',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d.m.Y', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('d.m.Y', strtotime($value));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
        $this->attributes['user_id'] = Auth::user()->id;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
