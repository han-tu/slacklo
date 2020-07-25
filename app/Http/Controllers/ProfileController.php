<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Answer;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
    	$myAnswers = Answer::where('user_id', Auth::id())->get();
	    $myQuestions = Question::where('user_id', Auth::id())->get();
    	return view('profile', ['myAnswers' => $myAnswers, 'myQuestions' => $myQuestions]);
    }
}
