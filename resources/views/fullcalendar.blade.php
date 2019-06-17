<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="calendar"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <input type="hidden" name="event_id" id="event_id" value=""/>
            <div class="modal-body">
                <h4>Edit Event</h4>

                Text:
                <br/>
                <input type="text" class="form-control" name="title" id="text">

                Color:
                <br/>
                <select type="color" class="form-control" name="color" id="color">
                    @foreach(config('event_color.colors') as $key => $color)
                        <option value="{{ $color }}">{{ $color }}</option>
                    @endforeach
                </select>

                Start time:
                <br/>
                <input type="text" class="form-control" name="start_time" id="start_time">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="event_update" value="Save">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <input type="hidden" name="start_time" id="new_start_time">
            <div class="modal-body">
                <h4>Create Event</h4>

                Text:
                <br/>
                <input type="text" class="form-control" name="title" id="new_text">

                Color:
                <br/>
                <select type="color" class="form-control" name="color" id="new_color">
                    @foreach(config('event_color.colors') as $key => $color)
                        <option value="{{ $color }}">{{ $color }}</option>
                    @endforeach
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="create_update" value="Save">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('select[name="color"]').select2({
            wrap: true,
        });

        $('input[name="start_time"]').flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i:s",
        });

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            /*
            Create event
             */
            select: function (start, end, jsEvent, view) {
                $('#new_start_time').val(moment(start).format('YYYY-MM-DD HH:MM:SS'));
                $('#createModal').modal();
            },
            events: [
                    @foreach($events as $event)
                {
                    id: '{{ $event->id }}',
                    title: '{{ $event->title }}',
                    @if ($event->start_date)
                    start: '{{ $event->start_date }}',
                    @if ($event->end_date)
                    end: '{{ $event->end_date }}',
                    @endif
                            @else
                    allDay: true,
                    @endif
                    className: 'event-{{ $event->color ?? 'azure' }}',
                    textColor: '#ffffff',
                    borderColor: 'transparent',
                },
                @endforeach
            ],
            /*
           Edit event
            */
            eventClick: function (calEvent, jsEvent, view) {
                $('#event_id').val(calEvent.id);
                $('#text').val(calEvent.title);
                $('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:MM:SS'));
                $('#end_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:MM:SS') ? moment(calEvent.end).format('YYYY-MM-DD HH:MM:SS') : '');
                $('#color').val(calEvent.color);
                $('#editModal').modal();
            }
        })
    });

    $(document).ready(function () {
        /*
        Handler Edit Event
         */
        $('#event_update').click(function (e) {
            e.preventDefault();
            var data = {
                _token: '{{ csrf_token() }}',
                event_id: $('#event_id').val(),
                title: $('#text').val(),
                start_date: $('#start_time').val(),
                end_date: $('#end_time').val(),
                color: $('#color').val(),
            };

            $.post('{{ route('event.ajax_update') }}', data, function (result) {
                if (result) {
                    $('#calendar').fullCalendar('removeEvents', $('#event_id').val());
                    var updatedEvent = {};
                    updatedEvent.id = result.event.id;
                    updatedEvent.title = result.event.title;
                    updatedEvent.start_time = result.event.start_time;
                    updatedEvent.end_time = result.event.end_time;
                    updatedEvent.color = result.event.color;
                    $('#calendar').fullCalendar('renderEvent', updatedEvent, true);

                    $('#editModal').modal('hide');
                }
            });
        });
        /*
        Handler Create Event
         */
        $('#create_update').click(function (e) {
            e.preventDefault();
            var data = {
                _token: '{{ csrf_token() }}',
                title: $('#new_text').val(),
                start_date: $('#new_start_time').val(),
                end_date: $('#new_end_time').val(),
                color: $('#new_color').val(),
            };

            $.post('{{ route('event.ajax_store') }}', data, function (result) {
                if (result) {
                    var newEvent = {};
                    newEvent.title = result.event.title;
                    newEvent.start_time = result.event.start_time;
                    newEvent.end_time = result.event.end_time;
                    newEvent.color = result.event.color;

                    $('#calendar').fullCalendar('renderEvent', newEvent, true);

                    $('#createModal').modal('hide');
                }
            });
        });
    });
</script>

