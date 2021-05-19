document.addEventListener('DOMContentLoaded', function () {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        locale: 'en',
        navLinks: true,
        eventLimit: true,
        selectable: true,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function (arg) {
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
        },
        eventResize: function (element) {
            console.log(element);
            let start = moment(element.event.start).format('YYYY-MM-DD HH:mm:ss');
            let end = moment(element.event.end).format('YYYY-MM-DD HH:mm:ss');
            let newEvent = {
                _method:'put',
                id: element.event.id,
                start:start,
                end:end,
            }
            sendEvent(routeEvents('routeEventUpdate'),newEvent);
        },
        eventDrop: function (element) {
            let start = moment(element.event.start).format('YYYY-MM-DD HH:mm:ss');
            let end = moment(element.event.end).format('YYYY-MM-DD HH:mm:ss');
            let newEvent = {
                _method:'put',
                id: element.event.id,
                start:start,
                end:end,
            }
            sendEvent(routeEvents('routeEventUpdate'),newEvent);
        },
        eventClick: function (element) {
            resetForm('#form-event')
            $('#modalCalendar').modal('show');
            $('#modalCalendar #titleModal').text('eventUpgrade');
            $('#modalCalendar button.deleteEvent').css('display','flex');

            let id = element.event.id;
            $('#modalCalendar input[name="id"]').val(id);
            let title = element.event.title;
            $('#modalCalendar input[name="title"]').val(title);
            let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
            $('#modalCalendar input[name="start"]').val(start);
            let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
            $('#modalCalendar input[name="end"]').val(end);
            let color = element.event.backgroundColor;
            $('#modalCalendar input[name="color"]').val(color);
            let description = element.event.extendedProps.description;
            $('#modalCalendar textarea[name="description"]').val(description);
        },
        select: function (event) {
            resetForm('#form-event')
            $('#modalCalendar').modal('show');
            $('#modalCalendar #titleModal').text('newEvent');
            $('#modalCalendar button.deleteEvent').css('display','none');

            let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
            $('#modalCalendar input[name="start"]').val(start);
            let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
            $('#modalCalendar input[name="end"]').val(end);
            $('#modalCalendar input[name="color"]').val('#c40233');
        },
        events: routeEvents('routeLoadEvents'), //routeEventsFunction, in scripts file!
    });
    calendar.render();
});
