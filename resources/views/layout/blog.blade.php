@extends('layout.master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
    </div>
    <a href="{{ route('logout')}}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
