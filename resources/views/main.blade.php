@extends('layouts.master')

@section('content')

<div class="ourevent">
    <h1>HOMMIE EVENT PLAN</h1>
</div>

<div class="events">
    <!--    <a target="_blank" href="image/farinaz-athari-OwEL5Z5cA48-unsplash.jpg">-->
    <img src="image/farinaz-athari-OwEL5Z5cA48-unsplash.jpg"  width="284.5" height="189.5">
    <!--    </a>-->
    <div class="desc"><a href="/wedding">WEDDING</a></div>
</div>

<div class="events">
    <!--    <a target="_blank"   src="{{ asset('images/gas.jpeg') }}>-->
    <img  src="{{ asset('images/qas.jpeg') }}" width="284.5" height="189.5">
    <!--    </a>-->
    <div class="desc"><a href="/birthday">BIRTHDAY</a></div>
</div>

<div class="events">
    <!--    <a target="_blank" href="image/index.jpeg">-->
    <img src="image/index.jpeg"  width="284.5" height="189.5">
    <!--    </a>-->
    <div class="desc"><a href="/anniversary">ANNIVERSARY</a></div>
</div>

@endsection
