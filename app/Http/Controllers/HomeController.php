<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = Question::orderBy('created_at', 'DESC')->paginate(5);
        return view('home', ['questions' => $questions]);
    }
}
