<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer_text', 'user_id', 'question_id'
    ];

    public function questions(){
        return $this->belongsTo('App\Question');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
