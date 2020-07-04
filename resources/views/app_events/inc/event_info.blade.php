<h4>Event Information</h4>

<div class="form-group">
    <label for="">Event Description</label>
    <textarea name="description" cols="30" rows="4" class="form-control" required>@if (isset($event)) {{ $event->description }} @endif </textarea>
</div>

<div class="form-group">
    @php
        $audience_size = [
            "Unknown",
            "1 - 10",
            "10 - 50",
            "50 - 100",
            "100 - 500",
            "500 - 1000",
            "1000 - 5000",
            "5000+",
        ];
    @endphp
    
    <label for="">Audience Size</label>
    <select name="audienceSize" class="form-control">
        @foreach ($audience_size as $size)
            <option value="{{ $size }}" 
                @if (isset($event) && $event->audience_size == $size)
                    selected        
                @endif>{{ $size }}</option>
        @endforeach
    </select>
</div>

<h4>Required Topics and Skills</h4>

<div class="form-group">
    @php
        $topics = [
            "Technology",
            "PR & Communications",
            "Health",
            "Leadership",
            "Media & Marketing",
            "Education",
            "Science",
            "Social & Political",
            "Art & Entertainment",
            "Travel & Adventure",
            "Skills & Trades",
        ];
    @endphp
    <label for="">Topics related to the event</label>

    <select name="topics[]" class="form-control" multiple>
        @foreach ($topics as $topic)
            <option value="{{ $topic }}" 
                @if (isset($event))
                    @foreach ($event->getTopics() as $chosen_topic)
                        @if ($chosen_topic == $topic)
                            selected
                        @endif
                    @endforeach
                @endif>{{ $topic }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Expert Roles needed</label>

    <select name="expertRoles[]" class="form-control" multiple>
        @foreach ($expertRoles as $role)
            <option value="{{ $role->id }}" 
                @if (isset($event))
                    @foreach (array_map('trim', explode(",",$event->expert_roles)) as $chosen_role)
                        @if ($chosen_role == $role->id)
                            selected
                        @endif
                    @endforeach
                @endif>{{ $role->role }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    @php
        $presentations = [
            "Conference",
            "Workshop",
            "Moderator",
            "Online",
            "School",
            "Meetup",
        ];
    @endphp
    <label for="">Presentation Type</label>

    <select name="expertPresentations[]" class="form-control" multiple>
        @foreach ($presentations as $presentation)
            <option value="{{ $presentation }}" 
                @if (isset($event))
                    @foreach (array_map("trim", explode(",", $event->presentation_types)) as $chosen_presentation)
                        @if ($chosen_presentation == $presentation)
                            selected
                        @endif
                    @endforeach
                @endif>{{ $presentation }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Travel Covered?</label>

    <div class="form-check">
        <input type="radio" name="travelFee" value="yes" class="form-check-input" 
            {{ $event->travel_fee == "yes" ? "checked" : "" }}>
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="travelFee" value="partially" class="form-check-input" 
            {{ $event->travel_fee == "partially" ? "checked" : "" }}>
        <label for="" class="form-check-label">Partially</label>
    </div>
    <div class="form-check">
        <input type="radio" name="travelFee" value="no" class="form-check-input"
            {{ $event->travel_fee == "no" ? "checked" : "" }}>
        <label for="" class="form-check-label">No</label>
    </div>
</div>

<div class="form-group">
    <label for="">Accomodation Covered?</label>

    <div class="form-check">
        <input type="radio" name="accomodationFee" value="yes" class="form-check-input"
            {{ $event->accomodation_fee == "yes" ? "checked" : "" }}>
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="accomodationFee" value="partially" class="form-check-input"
            {{ $event->accomodation_fee == "partially" ? "checked" : "" }}>
        <label for="" class="form-check-label">Partially</label>
    </div>
    <div class="form-check">
        <input type="radio" name="accomodationFee" value="no" class="form-check-input"
            {{ $event->accomodation_fee == "no" ? "checked" : "" }}>
        <label for="" class="form-check-label">No</label>
    </div>
</div>

<div class="form-group">
    <label for="">Event Ticket Registration</label>

    <div class="form-check">
        <input type="radio" name="eventRegistration" value="1" class="form-check-input"
            {{ $event->with_ticket == true ? "checked" : "" }}>
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="eventRegistration" value="0" class="form-check-input"
            {{ $event->with_ticket == false ? "checked" : "" }}>
        <label for="" class="form-check-label">No</label>
    </div>
</div>