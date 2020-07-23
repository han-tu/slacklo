@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 2rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!-- List of question -->
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            02:02:10
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
