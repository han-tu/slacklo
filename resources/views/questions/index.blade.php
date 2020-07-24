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
                            @if(Auth::user()->id == $question->user_id)
                                <a href="/questions/edit/{{ $question->id }}" class="btn btn-warning">Edit</a>
                                <a href="/questions/delete/{{ $question->id }}" class="btn btn-danger">Hapus</a>
                            @endif
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            {{ $question->question_text }}
                        </div>
                    </div>
                    <div class="card-footer">
                            <div class="card my-1">
                                <form action="/answers/store/{{ $question->id }}" method="post">
                                    @csrf
                                    <input type="text" name="answer_text" placeholder="Comment...">
                                    <input type="submit" value="Comment">
                                    @if($errors->has('answer_text'))
                                        <div class="text-danger">
                                            {{ $errors->first('answer_text')}}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        @forelse($answers as $answer)
                            <div class="card my-1">
                                {{ $answer->answer_text }}
                                @if(Auth::user()->id == $answer->user_id)
                                    <span class="float-right">
                                        <a href="/answers/edit/{{ $answer->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/answers/delete/{{ $answer->id }}" class="btn btn-danger">Hapus</a>
                                    </span>
                                @endif
                            </div>
                        @empty
                            <div class="card my-1">
                                There is no comment
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
