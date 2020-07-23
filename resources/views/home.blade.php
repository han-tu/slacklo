@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 2rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                        <button class="float-right btn btn-primary text-white">Find More ></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
