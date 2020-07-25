<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    
    protected $fillable = [
        'question_text', 'user_id'
    ];
    
    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function user() {
    	return $this->belongsTo(User::class) ;
    }
}
