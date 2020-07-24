<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Answer;

class AnswerController extends Controller
{
    public function store($id, Request $request){
        $this->validate($request, [
            'answer_text' => 'required'
        ]);

        Answer::create([
            'answer_text' => $request->answer_text,
            'user_id' => Auth::user()->id,
            'question_id' => $id
        ]);

        return back();
    }
}
