<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    protected $fillable  = ['text'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Comment $comment) {
            $comment->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public static function validations()
    {
        return [
            'text' => 'required',
        ];
    }
}
