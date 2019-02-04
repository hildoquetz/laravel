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
        return route("questions.show", $this->slug);
    }

    public function getCreatedDateAtribute() {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute()
    {
        if($this->answers > 0 ) {
            
            if( $this->best_answer_id ) {
                return "answered-accepted";
            }
            
            return "answered";
        }

        return "unanswered";

    }
}
