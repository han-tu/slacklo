<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'search']]);
    }

    public function index($id){
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('questions.index',
                    ['question' => $question, 'answers' => $answers]);
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

        $answers = Answer::where('question_id', $id)->get();
        return redirect()->action(
            'QuestionController@index', ['id' => $id]
        );
    }

    public function delete($id){
        $question = Question::find($id);

        if(Auth::id() != $question->user_id){
            return back();
        }else{
            $question->delete();
            return redirect('home');
        }
    }

    public function search(Request $request) {
        $search = $request->search ;

        $quest = DB::table('questions')->where('question_text','like',"%".$search."%")->paginate() ;

        return view('home',['questions' => $quest]);  
    }
}
