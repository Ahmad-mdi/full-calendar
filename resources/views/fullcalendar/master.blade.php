<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset='utf-8'/>
    <link href='{{asset('assets/fullcalendar/lib/main.css')}}' rel='stylesheet'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fullcalendar/css/style.css')}}">
</head>
<body>

@include('fullcalendar.modal-calendar')
<div id='wrap'>
    <div id='external-events'>
        <h4>Draggable Events</h4>
        <div id='external-events-list'>
            <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event'>event1</div>
            </div>
        </div>

        <p>
            <input type='checkbox' id='drop-remove'/>
            <label for='drop-remove'>remove after drop</label>
        </p>
    </div>

    <div id='calendar-wrap'>
        <div
            id='calendar' class="fc-event-main"
            data-route-load-events = "{{route('routeLoadEvents')}}"
            data-route-event-update = "{{route('routeEventUpdate')}}"
        ></div>
    </div>
</div>
<script src='{{asset('assets/fullcalendar/lib/main.js')}}'></script>
{{--<script src='{{asset('assets/fullcalendar/lib/locales/en.js')}}'></script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{asset('assets/fullcalendar/js/scripts.js')}}"></script>
<script src="{{asset('assets/fullcalendar/js/calendar.js')}}"></script>
</body>
</html>
