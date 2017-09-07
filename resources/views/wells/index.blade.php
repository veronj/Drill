@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Session::has('message'))
                        <h4>{{ Session::get('message') }}</h4>
                    @endif
                    <div class="panel-heading">List of wells</div>

                    <div class="panel-body">
                        @foreach($wells as $well)
                            <article>
                                <h4>{{ $well->name }}</h4>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
