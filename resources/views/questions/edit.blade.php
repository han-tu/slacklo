@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="/questions/{{ $question->id }}">Back</a>

<form action="/questions/update/{{ $question->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="question_text">Pertanyaan</label>
        <textarea name="question_text">{{ $question->question_text }}</textarea>
        @if($errors->has('question_text'))
            <div class="text-danger">
                {{ $errors->first('question_text')}}
            </div>
        @endif
    </div>
    <input type="submit" value="SAVE">
</form>

@endsection
