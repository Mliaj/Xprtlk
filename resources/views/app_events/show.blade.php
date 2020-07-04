@extends('dashboard.account')

@section('content-title')
    View Event
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    @if (Auth::user()->user_type == 'Expert')
        <li class="breadcrumb-item"><a href="{{ route('event_list') }}">Event List</a></li>
    @endif
    <li class="breadcrumb-item active">View Event</li>
@endsection

@section('content')
    <div class="container-fluid">
        <a href="{{ route('event_edit', $event->id) }}" class="btn btn-primary">Edit Post</a>

        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        {{ $event->title }}
                    </div>
                    <div class="card-body">
                        <img class="fixed-size-logo" src="{{ asset($event->logo_location) }}" alt="event logo">
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    {{-- <div class="card-header">
                        Details
                    </div> --}}
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable mb-n2" value="{{ $event->getScheduleDate() }}">
                            <small class="text-muted">Scheduled Date</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable mb-n2" value="{{ $event->description }}">
                            <small class="text-muted">Description</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable mb-n2" value="{{ $event->location }}">
                            <small class="text-muted">Venue</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable mb-n2" value="{{ $event->getApplyDate() }}">
                            <small class="text-muted">Duration of Application</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable mb-n2" value="{{ $event->audience_size }}">
                            <small class="text-muted">Audience Size</small>
                        </div>
                        <div class="form-group">
                            @foreach ($event->getExpertFees() as $expertFee)
                                <span class="badge badge-primary p-2">{{ $expertFee->description }}</span>
                            @endforeach
                            <br>
                            <small class="text-muted">Expert Fees</small>
                        </div>
                        <div class="form-group">
                            @foreach ($event->getTopics() as $topic)
                                <span class="badge badge-primary p-2">{{ $topic }}</span>
                            @endforeach
                            <br>
                            <small class="text-muted">Topics</small>
                        </div>
                        <div class="form-group">
                            @foreach ($event->getExpertRoles() as $role)
                                <span class="badge badge-primary p-2">{{ $role->role }}</span>
                            @endforeach
                            <br>
                            <small class="text-muted">Expert Roles</small>
                        </div>
                        <div class="form-group">
                            @foreach ($event->getPresentationTypes() as $presentation)
                                <span class="badge badge-primary p-2">{{ $presentation }}</span>
                            @endforeach
                            <br>
                            <small class="text-muted">Presentation Type</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable" value="{{ $event->travel_fee }}">
                            <small class="text-muted">Travel Fee</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable" value="{{ $event->accomodation_fee }}">
                            <small class="text-muted">Accomodation Fee</small>
                        </div>
                        <div class="form-group">
                            <input type="text" readonly class="form-control-plaintext unclickable" value="{{ $event->with_ticket }}">
                            <small class="text-muted">Event with ticket</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection