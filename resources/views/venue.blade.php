@extends('layouts.master')

@section('content')

    <div class="vbanner_image">
        <div class="vbanner_content">
            <h1>VENUES</h1>

        </div>
    </div>
    <div class="vcontainer">
        <pre>We provide venues according to your choices. Explore our recommended venues in
                                          paradise,river crown,sangrilla,megha
                                            view our venues or get in touch.</pre>
    </div>

    @if (count($venues) > 0)
     @foreach ($venues as $data)
        <div class="VVgallery">
            <h3>{{ $data->title }}</h3>
                <a target="_blank" href="image/wp7488433-corporate-event-wallpapers.jpg">
                    <img src="image/wp7488433-corporate-event-wallpapers.jpg" alt="venue1" width="600" height="400">
                </a>
                <div class="VVdesc">
                    <pre>{{ $data->description }}
          </pre>
                </div>
        </div>
        @endforeach
    @else
        No records found!
    @endif

    </div>
@endsection
