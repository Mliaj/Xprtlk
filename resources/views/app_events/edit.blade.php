@extends('dashboard.account')

@section('content-title')
    Edit Event
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item"><a href="{{ route('event_post', $event->id) }}">View Event</a></li>
    <li class="breadcrumb-item active">Edit Event</li>
@endsection

@section('content')
<div class="container-fluid">
    {!! Form::open(['route' => ['event_destroy', $event->id], 'method' => 'DELETE']) !!}
        <button class="btn btn-danger" type="submit">Delete</button>
    {!! Form::close() !!}
    {!! Form::open(['route' => ['event_update', $event->id] , 'files' => true, 'method' => 'PUT']) !!}
        <div class="text-right mb-2">
            <button class="btn btn-primary">Update</button>
        </div>

        <div class="card card-body">
            <div class="form-group">
                <label for="">Title of your event</label>
                <input type="text" class="form-control" name="titleEvent" required style="font-size:30px; height: 80px"
                    value="{{ $event->title }}">
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
                <textarea name="location" class="form-control" cols="30" rows="3" style="resize:none">{{ $event->location }}</textarea>
            </div>

            <hr>

            @include('app_events.inc.date_application')

            <hr>

            <div class="form-group">
                <label for="">Expert's Fee</label>
                @foreach ($expertFees as $fee)
                    <div class="form-check">
                        <input type="checkbox" name="expertFees[]" class="form-check-input" value="{{ $fee->id }}"
                        @foreach (explode(",", $event->expert_fees) as $chosen_expert_fee)
                            @if ($chosen_expert_fee == $fee->id)
                                checked
                            @endif
                        @endforeach>
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