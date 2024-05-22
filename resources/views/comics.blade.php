@extends('layouts.app')

@section('title', 'Comics')

@section('content')


<section class="background">
    <div class="container-xxl">
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)

            <div class="d-flex flex-column m-2">
                <img src="{{$comic['thumb']}}">
                <div class=" d-flex flex-wrap title mt-2">{{ strtoupper ($comic['series'])}}</div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection