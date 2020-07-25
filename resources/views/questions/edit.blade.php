@extends('layouts.app')
@section('title', 'Edit Question')
@section('content')





<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col">
            <div class="card">

                <!-- List of question -->
                <div class="card m-1">
                    <div class="card-header">
                        {{ $question->users->name }}
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            {{ $question->created_at }}
                        </span>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="/questions/{{ $question->id }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

                        <form action="/questions/update/{{ $question->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="question_text">Pertanyaan</label>
                                <textarea class="form-control" name="question_text" id="question_text" rows="10">{{ $question->question_text }}</textarea>
                                @if($errors->has('question_text'))
                                    <span class="help-block small text-danger" role="alert">
                                        {{ $errors->first('question_text')}}
                                    </span>
                                @endif
                            </div>
                            <input class="btn btn-warning my-2 mr-2 float-right" type="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
