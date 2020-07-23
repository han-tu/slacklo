<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Question;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        $id = Auth::id();
        return view('questions.create', ['id' => $id]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'question_text' => 'required'
        ]);

        Question::create([
            'question_text' => $request->question_text,
            'user_id' => $request->user_id
        ]);

        return redirect('home');
    }
}
