{{-- Start date --}}
<div class="form-group">
    <h4 for="">Date of the event</h4>
    <br>
    
    <label for="">Start Date</label>
    <div class="row">
        <div class="col">
            <label for="">Day</label>
            <select name="startDay" class="form-control">
                @foreach (range(1, 31) as $day)
                    <option value="{{ str_pad($day, 2, 0, STR_PAD_LEFT) }}" 
                        @if (isset($event) && $day == $event->getExplodedDate('start_date')['day'])
                        selected
                        @endif>{{ $day }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Month</label>
            <select name="startMonth" class="form-control">
                @foreach (range(1, 12) as $month)
                    <option value="{{ str_pad($month, 2, 0, STR_PAD_LEFT) }}" 
                        @if (isset($event) && $month == $event->getExplodedDate('start_date')['month'])
                            selected
                        @endif>{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Year</label>
            <select name="startYear" class="form-control">
                @foreach (range(0, 3) as $year)
                    <option value="{{ date('Y') + $year }}" 
                        @if (isset($event) && $year == $event->getExplodedDate('start_date')['year'])
                            selected
                        @endif>{{ date('Y') + $year }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

{{-- End date --}}
<div class="form-group">
    <label for="">End Date</label>

    <div class="row">
        <div class="col">
            <label for="">Day</label>
            <select name="endDay" class="form-control">
                @foreach (range(1, 31) as $day)
                    <option value="{{ str_pad($day, 2, 0, STR_PAD_LEFT) }}" 
                        @if (isset($event) && $day == $event->getExplodedDate('end_date')['day'])
                            selected
                        @endif>{{ $day }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Month</label>
            <select name="endMonth" class="form-control">
                @foreach (range(1, 12) as $month)
                    <option value="{{ str_pad($month, 2, 0, STR_PAD_LEFT) }}" 
                        @if (isset($event) && $month == $event->getExplodedDate('end_date')['month'])
                            selected
                        @endif>{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Year</label>
            <select name="endYear" class="form-control">
                @foreach (range(0, 3) as $year)
                    <option value="{{ date('Y') + $year }}" 
                        @if (isset($event) && $year == $event->getExplodedDate('end_date')['year'])
                            selected
                        @endif>{{ date('Y') + $year }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>