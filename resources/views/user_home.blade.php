@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>
                <div class="panel-body">
                    Selamat Datang <b>{{ Auth::user()->name }} </b><br>
                    Anda Login Sebagai Member
                </div>
            </div>
        </div>
    </div>
</div>
@endsection