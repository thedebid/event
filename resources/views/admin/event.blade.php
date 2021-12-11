@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Events') }}<a href="/admin/event/add"><button type="button"
                                class="ml-2 btn btn-primary">Add
                                New</button></a></div>
                    <div class="card-body">
                        @if (Route::is('viewevent'))
                            @if (count($events) > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                            <tr>
                                                <th scope="row">{{ $event->id }}</th>
                                                <td>{{ $event->heading }}</td>
                                                <td>{{ $event->description }}</td>
                                                <td>{{ $event->status }}</td>
                                                <td>

                                                    <a href="{{ url('/admin/event/delete', ['id' => $event->id]) }}">
                                                        <button type="button  ml-5" class="btn btn-danger">Delete</button>
                                                    </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                No records found!
                            @endif
                        @endif
                        @if (Route::is('addevent'))
                            <form method="POST" action="{{ route('saveevent') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="heading"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Heading') }}</label>

                                    <div class="col-md-6">
                                        <input id="heading" type="text"
                                            class="form-control @error('heading') is-invalid @enderror" name="heading"
                                            value="{{ old('heading') }}" required autocomplete="heading" autofocus>

                                        @error('heading')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="desc"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>

                                        @error('desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
