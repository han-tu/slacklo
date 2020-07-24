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
                @forelse($questions as $question)
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
        </div>
    </div>
</div>
@endsection
