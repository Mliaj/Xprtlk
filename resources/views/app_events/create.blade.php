@extends('dashboard.account')

@section('content-title')
    Create Event
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item active">Create Event</li>
@endsection

@section('content')
<div class="container-fluid">
    {!! Form::open(['route' => 'event_store' ,'enctype' => 'multipart/form-data']) !!}
        <div class="text-right mb-2">
            <button class="btn btn-primary">Publish</button>
        </div>

        <div class="card card-body">
            <div class="form-group">
                <label for="">Title of your event</label>
                <input type="text" class="form-control" name="titleEvent">
            </div>
            <div class="form-group">
                <label for="">Event Logo</label>

                <input type="file" name="logoEvent" class="form-control-file">
            </div>

            <hr>

            @include('app_events.inc.date_event')

            <hr>

            <div class="form-group">
                <label for="">Location</label>
                <input type="text" class="form-control" name="location">
            </div>

            <hr>

            @include('app_events.inc.date_application')

            <hr>

            <div class="form-group">
                <label for="">Expert's Fee</label>
                @foreach ($expertFees as $fee)
                    <div class="form-check">
                        <input type="checkbox" name="fee[]" class="form-check-input" value="{{ $fee->id }}">
                        <label for="" class="form-check-label">{{ $fee->description }}</label>
                    </div>
                @endforeach
            </div>

            <hr>

            @include('app_events.inc.event_info')
        </div>
    {!! Form::close() !!}
</div>
@endsection