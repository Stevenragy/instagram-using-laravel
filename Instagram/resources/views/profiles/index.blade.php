@extends('layouts.app')

@section('content')
<div class="container-fluid p-4 bg-light" style="width:800px; margin: auto;">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-3 p-1">
            <img src="/imgs/avatar.jpg" class="rounded-circle img-thumbnail" width="150px" height="150px" alt="">
        </div>
        <div class="col-9 pt-4 pl-5 ">
            <div class="d-flex justify-content-between">
                <strong><h1>{{$user->name}} {{--Auth::user()->name--}}</h1></strong>
                <a href="{{route('p.create')}}" class="btn btn-lg btn-link">+Create</a>
            </div>
            <div class="d-flex ">
                <div class="pr-4"><strong>150</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>120</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="http://{{$user->profile->url}}">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100 figure-img" src="/imgs/man.jpg" width="200" height="200" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 flex-fill" src="/imgs/fox.jpg" width="200" height="200" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="/imgs/car.jpg" width="200" height="200" alt="">
        </div>

    </div>
</div>
@endsection
