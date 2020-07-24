@extends('layouts.app')
@section('title', 'SlackOverlow')
@section('content')
<div class="container" style="border-top: 2rem black">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 1.5rem">{{ __('QUESTIONS') }}</span>
                    <a href="/questions/create" class="float-right btn btn-success text-white rounded">Ask Question +</a>
                </div>

                <!-- List of question -->
                @foreach($questions as $question)
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            02:02:10
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            {{ $question->question_text }}
                        </div>
                        <a href="/questions/{{ $question->id }}" class="float-right btn btn-primary text-white">Find More ></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
