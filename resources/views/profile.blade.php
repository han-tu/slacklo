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
                    <div class="card-body">
                        <div>
                            {{ $question->question_text }}
                        </div>
                        <span class="sec mt-0 pt-0">
                            <span class="fa fa-clock-o"></span>
                            {{ $question->created_at->diffForHumans() }} &middot; {{ $question->users->name }}
                        </span>
                        <a href="/questions/{{ $question->id }}" class="float-right btn btn-primary text-white">Find More ></a>
                    </div>
                </div>
                @empty
                <div class="card-body">
                    <div>You didn't ask a question yet.</div>
                </div>
                @endforelse
            </div>

            <div class="card my-4">
                <div class="card-header">
                    <span style="font-size: 1.5rem">{{ __('My Answers') }}</span>
                </div>

                <!-- List of answer -->
                @forelse($myAnswers as $answer)
                <div class="card m-1">
                    <div class="card-body">
                        <div>
                            {{ $answer->answer_text }}
                        </div>
                        <span class="sec mt-0 pt-0">
                            <span class="fa fa-clock-o"></span>
                            {{ $answer->created_at->diffForHumans() }} &middot; {{ $answer->users->name }}
                        </span>
                        <a href="/questions/{{ $answer->question_id }}" class="float-right btn btn-primary text-white">Find More ></a>
                    </div>
                </div>
                @empty
                <div class="card-body">
                    <div>You didn't answer a question yet.</div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
