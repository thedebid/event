@extends('layouts.master')

@section('content')


    <div class="bkbanner_image">
        <div class="bkbanner_content">
            <h1>BOOKING</h1>
        </div>
    </div>
    <div class="bkcontainer">
        <!--        <div class="left">-->
        <!--        <img src="image/,mn.jpeg" height="400" width="100%">-->
        <!--        </div>-->
        <div class="bkformbox">
              <form method="POST" action="{{ route('savebooking') }}">
                                @csrf
                <div class="bkd">
                    Booking Details
                    <p>Customer name:</p><input type="text" name="custname">

                     @error('custname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                    <p>Customer mobile:</p><input type="number" name="custmob">
                     @error('custmob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <p>Event type:</p>
                         @if (count($events) > 0)
                         <select name="event">
                        
                            @foreach ($events as $data)
                                <option value="{{ $data->heading }}">{{ $data->heading }}</option>
                            @endforeach

                    </select> @else
                       <p> No events found please add from dashboard!</p>
                    @endif

                     @error('event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                      <p>Venue:</p>
                         @if (count($venues) > 0)
                         <select name="venue" id="venue">
                         
                            @foreach ($venues as $data)
                                <option value="{{ $data->title }}">{{ $data->title }}</option>
                            @endforeach

                    </select> @else
                       <p> No venues found please add from dashboard!</p>
                    @endif
                     @error('venue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <p>No of guests:</p><input type="text" name="totalguests">
                     @error('totalguests')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <p>Date:</p><input type="date" name="date">

                     @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                   <p> <input type="submit" class="btn-primary" value="Book Now"/></p>
                </div>

            </form>
        </div>
    </div>

@endsection
