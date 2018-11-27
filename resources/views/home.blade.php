@extends('templates.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Selamat Datang {{ Auth::user()->name }}
                    <button onclick="sweet()">klik</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
