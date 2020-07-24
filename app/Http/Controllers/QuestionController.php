<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id){
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id);
        // foreach($answers as $answer){
        //     dd($answer);
        // }
        // dd($answers);
        return view('questions.index',
                    ['question' => $question, 'answers_count' => $answers->count(), 'answers' => $answers]);
    }

    public function create(){
        return view('questions.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'question_text' => 'required'
        ]);

        Question::create([
            'question_text' => $request->question_text,
            'user_id' => Auth::user()->id
        ]);

        return redirect('home');
    }

    public function edit($id){
        $question = Question::find($id);

        if(Auth::id() != $question->user_id){
            return back();
        }else{
            return view('questions.edit', ['question' => $question]);
        }
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'question_text' => 'required'
        ]);

        $question = Question::find($id);
        $question->question_text = $request->question_text;
        $question->save();
        return view('questions.index', ['question' => $question]);
    }

    public function delete($id){
        $question = Question::find($id);

        if(Auth::id() != $question->user_id){
            return back();
        }else{
            $question->delete();
            return view('home', ['questions' => Question::all()]);
        }
    }
}
