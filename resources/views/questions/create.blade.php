@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>New Question</h3>
    </div>
    <div class="card-body">
        <form action="/questions/store" method="post">
            @csrf
            <div class="form-group">
                <label for="question_text">Question</label>
                <textarea class="form-control" name="question_text" id="question_text" rows="10"></textarea>
                @if($errors->has('question_text'))
                    <span class="help-block small text-danger" role="alert">
                        {{ $errors->first('question_text')}}
                    </span>
                @endif
            </div>
            <input type="hidden" name="user_id" value="{{ $id }}">
            <input type="submit" value="POST">
        </form>
    </div>    
</div>
@endsection
