<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function create(Article $article, $fields)
    {
        $article->fill($fields);
        $article->save();
    }

    public static function validations()
    {
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }
}