<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setTitleAtribute($value) {
        $this->atributes['title'] = $value;
        $this->atributes['slug'] = str_slug($value, '_');
    }
    
    public function getUrlAtribute() {
        return route("questions.show", $this->id);
    }

    public function getCreatedDateAtribute() {
        return $this->created_at->diffForHumans();
    }
}
