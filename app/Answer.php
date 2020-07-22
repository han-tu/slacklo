<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer_text', 'user_id', 'question_id'
    ];
}
