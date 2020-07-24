@extends('layouts.app')
@section('title', 'SlackOverlow')
@section('content')
<div class="container" style="border-top: 2rem black">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 1.5rem">{{ __('My Questions') }}</span>
                </div>

                <!-- List of question -->
                @forelse($myQuestions as $question)
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            {{ $question->created_at }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            {{ $question->question_text }}
                        </div>
                        <a href="/questions/{{ $question->id }}" class="float-right btn btn-primary text-white">Find More ></a>
                    </div>
                </div>
                @empty
                <div>There is no questions</div>
                @endforelse
            </div>

            <div class="card my-4">
                <div class="card-header">
                    <span style="font-size: 1.5rem">{{ __('My Answers') }}</span>
                </div>

                <!-- List of answer -->
                @forelse($myAnswers as $answer)
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            {{ $answer->created_at }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            {{ $answer->answer_text }}
                        </div>
                        <a href="/questions/{{ $answer->question_id }}" class="float-right btn btn-primary text-white">Find More ></a>
                    </div>
                </div>
                @empty
                <div>There is no answers</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
