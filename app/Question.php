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
        
}
