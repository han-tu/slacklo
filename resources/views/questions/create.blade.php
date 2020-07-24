@extends('layouts.app')

@section('content')
<form action="/questions/store" method="post">
    @csrf
    <div class="form-group">
        <label for="question_text">Pertanyaan</label>
        <textarea name="question_text"></textarea>
        @if($errors->has('question_text'))
            <div class="text-danger">
                {{ $errors->first('question_text')}}
            </div>
        @endif
    </div>
    <input type="submit" value="POST">
</form>

@endsection
