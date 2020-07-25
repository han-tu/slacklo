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
                @forelse($questions as $question)
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
                    <div>Question(s) not found.</div>
                </div>
                @endforelse
                <div class="d-flex justify-content-center">{{ $questions->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
