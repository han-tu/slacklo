@extends('layouts.app')
@section('title', 'Edit Answer')
@section('content')

<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col">
            <div class="card">

                <!-- List of answer -->
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            02:02:10
                        </span>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="/questions/{{ $answer->question_id }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                        <form action="/answers/update/{{ $answer->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="answer_text">Jawaban</label>
                                <textarea class="form-control" name="answer_text" id="answer_text" rows="10">{{ $answer->answer_text }}</textarea>
                            </div>
                            @if($errors->has('answer_text'))
                                <span class="help-block small text-danger" role="alert">
                                    {{ $errors->first('answer_text')}}
                                </span>
                            @endif
                            <input class="btn btn-warning" type="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
