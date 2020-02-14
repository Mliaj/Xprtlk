<h4>Event Information</h4>

<div class="form-group">
    <label for="">Event Description</label>
    <textarea name="" cols="30" rows="4" class="form-control"></textarea>
</div>

<div class="form-group">
    <label for="">Audience Size</label>
    <select name="audienceSize" class="form-control">
        <option value="unknown">Unknown</option>
        <option value="1 - 10">1 - 10</option>
        <option value="10 - 50">10 - 50</option>
        <option value="50 - 100">50 - 100</option>
        <option value="100 - 500">100 - 500</option>
        <option value="500 - 1000">500 - 1000</option>
        <option value="1000 - 5000">1000 - 5000</option>
        <option value="5000+">5000+</option>
    </select>
</div>

<h4>Required Topics and Skills</h4>

<div class="form-group">
    <label for="">Topics related to the event</label>

    <select name="topics" class="form-control" multiple>
        {{-- <option value="None">None</option> --}}
        <option value="Technology">Technology</option>
        <option value="PR & Communications">PR & Communications</option>
        <option value="Health">Health</option>
        <option value="Leadership">Leadership</option>
        <option value="Media & Marketing">Media & Marketing</option>
        <option value="Education">Education</option>
        <option value="Science">Science</option>
        <option value="Social & Political">Social & Political</option>
        <option value="Art & Entertainment">Art & Entertainment</option>
        <option value="Travel & Adventure">Travel & Adventure</option>
        <option value="Skills & Trades">Skills & Trades</option>
    </select>
</div>

<div class="form-group">
    <label for="">Expert Roles needed</label>

    <select name="expertRole" class="form-control" multiple>
        @foreach ($expertRoles as $role)
            <option value="{{ $role->id }}">{{ $role->role }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Presentation Type</label>

    <select name="expertPresentation" class="form-control" multiple>
        <option value="conference">Conference</option>
        <option value="workshop">Workshop</option>
        <option value="moderator">Moderator</option>
        <option value="online">Online</option>
        <option value="school">School</option>
        <option value="meetup">Meetup</option>
    </select>
</div>

<div class="form-group">
    <label for="">Travel Covered?</label>

    <div class="form-check">
        <input type="radio" name="travelFee" value="yes" class="form-check-input">
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="travelFee" value="partially" class="form-check-input">
        <label for="" class="form-check-label">Partially</label>
    </div>
    <div class="form-check">
        <input type="radio" name="travelFee" value="no" class="form-check-input">
        <label for="" class="form-check-label">No</label>
    </div>
</div>

<div class="form-group">
    <label for="">Accomodation Covered?</label>

    <div class="form-check">
        <input type="radio" name="accomodationFee" value="yes" class="form-check-input">
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="accomodationFee" value="partially" class="form-check-input">
        <label for="" class="form-check-label">Partially</label>
    </div>
    <div class="form-check">
        <input type="radio" name="accomodationFee" value="no" class="form-check-input">
        <label for="" class="form-check-label">No</label>
    </div>
</div>

<div class="form-group">
    <label for="">Event Ticket Registration</label>

    <div class="form-check">
        <input type="radio" name="eventRegistration" value="1" class="form-check-input">
        <label for="" class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        <input type="radio" name="eventRegistration" value="0" class="form-check-input">
        <label for="" class="form-check-label">No</label>
    </div>
</div>