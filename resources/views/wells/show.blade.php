@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Session::has('message'))
                        <h4>{{ Session::get('message') }}</h4>
                    @endif
                    <div class="panel-heading">{{ $well->name }}</div>

                    <div class="panel-body">

                            <article>
                                <h4>{{ $resource->name }}</h4>
                                <h4>{{ $resource->amount }} unit</h4>
                            </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection