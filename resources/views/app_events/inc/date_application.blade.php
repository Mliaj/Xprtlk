{{-- Start date --}}
<div class="form-group">
    <h4 for="">Application Date</h4>
    <br>

    <label for="">Start Date</label>
    <div class="row">
        <div class="col">
            <label for="">Day</label>
            <select name="startApplyDay" class="form-control">
                @foreach (range(1, 31) as $day)
                    <option value="{{ str_pad($day, 2, 0, STR_PAD_LEFT) }}">{{ $day }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Month</label>
            <select name="startApplyMonth" class="form-control">
                @foreach (range(1, 12) as $month)
                    <option value="{{ str_pad($month, 2, 0, STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Year</label>
            <select name="startApplyYear" class="form-control">
                @foreach (range(0, 3) as $year)
                    <option value="{{ date('Y') + $year }}">{{ date('Y') + $year }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Hour</label>
            <select name="startApplyHour" class="form-control">
                @foreach (range(0, 23) as $hour)
                    <option value="{{ str_pad($hour, 2, 0, STR_PAD_LEFT) }}">{{ $hour }}</option>
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
            <select name="endApplyDay" class="form-control">
                @foreach (range(1, 31) as $day)
                    <option value="{{ str_pad($day, 2, 0, STR_PAD_LEFT) }}">{{ $day }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Month</label>
            <select name="endApplyMonth" class="form-control">
                @foreach (range(1, 12) as $month)
                    <option value="{{ str_pad($month, 2, 0, STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Year</label>
            <select name="endApplyYear" class="form-control">
                @foreach (range(0, 3) as $year)
                    <option value="{{ date('Y') + $year }}">{{ date('Y') + $year }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="">Hour</label>
            <select name="endApplyHour" class="form-control">
                @foreach (range(0, 23) as $hour)
                    <option value="{{ str_pad($hour, 2, 0, STR_PAD_LEFT) }}">{{ $hour }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>