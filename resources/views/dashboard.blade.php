@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Olete sisselogitud!</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Lisa</a>
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Sisesta toode</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
