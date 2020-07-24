<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Question;
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

    public function edit($id){
        $answer = Answer::find($id);

        if(Auth::id() != $answer->user_id){
            return back();
        }else{
            return view('answers.edit', ['answer' => $answer]);
        }
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'answer_text' => 'required'
        ]);

        $answer = Answer::find($id);
        $answer->answer_text = $request->answer_text;
        $answer->save();
        
        return back();
    }

    public function delete($id){
        $answer = Answer::find($id);

        if(Auth::id() != $answer->user_id){
            return back();
        }else{
            $answer->delete();

            return back();
        }
    }
}
