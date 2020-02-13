@extends('dashboard.account')

@section('content-title')
    View Event
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item"><a href="{{ route('event_list') }}">Event List</a></li>
    <li class="breadcrumb-item active">View Event</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Title
                    </div>
                    <div class="card-body">
                        Image
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Details
                    </div>
                    <div class="card-body">
                        Content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection