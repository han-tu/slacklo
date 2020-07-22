@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 2rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 1.5rem">{{ __('QUESTIONS') }}</span>
                    <button class="float-right btn btn-success text-white rounded">Ask Question +</button>
                </div>

                <!-- List of question -->
                @for ($i = 0; $i < 5; $i++)
                <div class="card m-1">
                    <div class="card-header">
                        Wisnu
                        <span class="float-right">
                            <span class="fa fa-clock-o ml-1"></span>
                            02:02:10
                        </span>
                    </div>
                    <div class="card-body">
                        <div>
                            Siapa nama komting kita?
                        </div>
                        <button class="float-right btn btn-primary text-white">Find More ></button>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
