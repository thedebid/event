@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Bookings') }}</div>
                    <div class="card-body">

                        @if (count($bookings) > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Event Type</th>
                                        <th scope="col">Venue</th>
                                        <th scope="col">No of Guests</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->mobile }}</td>
                                            <td>{{ $data->event }}</td>
                                            <td>{{ $data->venue }}</td>
                                            <td>{{ $data->guests }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>
                                                @if ($data->status == 2)
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif($data->status == 1)
                                                    <span class="badge bg-info text-dark">Pending</span>
                                                @else
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->status == 1)
                                                    <a href="{{ url('/admin/bookings/reject', ['id' => $data->id]) }}">
                                                        <button type="button" class="btn btn-danger">Reject</button>
                                                    </a> <a
                                                        href="{{ url('/admin/bookings/approve', ['id' => $data->id]) }}">
                                                        <button type="button  ml-5"
                                                            class="btn btn-secondary">Approve</button>
                                                    </a>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            No records found!
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
