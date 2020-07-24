@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col">
            <div class="card">

                <!-- List of question -->
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            {{ $question->created_at }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-auto">{{ $question->question_text }}</div>
                            @if(Auth::user()->id == $question->user_id)
                                <div class="ml-auto">
                                    <a href="/questions/edit/{{ $question->id }}">Edit</a>&nbsp;-
                                    <a href="/questions/delete/{{ $question->id }}">Remove</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        @forelse($answers as $answer)
                            <div class="card mt-0 mb-2 p-2">
                                <div class="d-flex">
                                    <div class="mr-auto">{{ $answer->answer_text }}</div>
                                    @if(Auth::user()->id == $answer->user_id)
                                        <div class="ml-auto">
                                            <a href="/answers/edit/{{ $answer->id }}">Edit</a>&nbsp;-
                                            <a href="/answers/delete/{{ $answer->id }}">Remove</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="card m-2 p-2">
                                This question is not answered yet.<br>
                            </div>
                        @endforelse
                        <div class="card mt-5 mb-1">
                            <form action="/answers/store/{{ $question->id }}" method="post">
                                @csrf
                                <textarea class="form-control" name="answer_text" placeholder="Comment..." id="answer_text" rows="5"></textarea>
                                <input class="btn btn-warning my-2 mr-2 float-right" type="submit" value="Comment">
                                @if($errors->has('answer_text'))
                                    <span class="help-block small text-danger" role="alert">
                                    {{ $errors->first('answer_text')}}
                                </span>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
