@extends('dashboard.account')

@section('content-title')
    Home
@endsection

@section('breadcrumb')
  <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
    <div class="container-fluid">
      <div class="container-fluid">
        
        <div class="text-right mb-2">
          <a href="{{ route('event_create') }}" class="btn btn-primary">Add Event</a>
        </div>
                
        <div class="row">
        @foreach ($eventPrograms as $event)
          <div class="col-sm-4 mb-2">
          <a href="{{ route('event_post', $event->id) }}">
            <div class="position-relative p-3 bg-gray fit-image" 
                  style="background-image: url({{ asset($event->logo_location) }});">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              {{ $event->title }} <br />
              <small>{{ $event->description }}</small>
            </div>
          </a>
          </div>
        @endforeach
        </div>
           
      </div>
      <!-- /.container-fluid -->
    </div>
@endsection