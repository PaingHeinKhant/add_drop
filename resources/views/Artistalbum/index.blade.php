@extends('layouts.app')
@section('content')


    <div class="">
        <button class="btn btn-primary d-block m-5" id="addButton">Add Col</button>
        <div class="my-2" id="inputContainer">
            <input type="number" />
            <input type="number" />
            <span class="mx-3">67</span>
            <button class="btn btn-danger">Delete</button>
        </div>
        <button id="sumButton">Calculate Sum</button>
        <div id="sum"></div>
    </div>












{{--    <form action="{{route('createAlbum')}}" method="post">--}}
{{--        @csrf--}}
{{--        <button class="btn btn-primary">Create</button>--}}
{{--    </form>--}}


{{--    <div class="text-white d-flex justify-content-start">--}}
{{--        @foreach($albums as $album)--}}
{{--            <div class="m-2">--}}
{{--                <div class="card overflow-hidden border border-0" style="width: 13rem; height: 13rem">--}}
{{--                    <img src="{{$album->image}}" class="card-img-top" alt="...">--}}
{{--                </div>--}}
{{--                <div class="my-2">--}}
{{--                    <p class="text-white m-0">{{$album->title}}</p>--}}
{{--                    <p class="text-white-50 m-0">{{$album->release_date}}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
@stop
