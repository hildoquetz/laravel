@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach($questions as $question)
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mt-0">
                                <a href="{{ route("questions.show", $question->id) }}">
                                    {{ $question->title }}
                                </a>
                            </h3>
                            <p class="lead">
                                Asked by 
                                <a href="{{ route("questions.show", $question->user->id ) }}">{{ $question->user->name }}</a>
                                <small class="text-muted">{{ $question->created_date }}</small>
                            </p>
                            {{ str_limit($question->body, 250) }}
                        </div>
                        <hr/>
                    </div>
                    @endforeach
                    <div class="text-center"></div>
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
