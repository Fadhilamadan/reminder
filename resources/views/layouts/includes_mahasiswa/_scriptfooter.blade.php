<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets_mahasiswa/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/js/jquery.slimscroll.min.js') }}"></script>

<!-- Jquery-Ui -->
<script src="{{ asset('assets_mahasiswa/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="{{ asset('assets_mahasiswa/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script type="text/javascript">
	calendarDosen();
	function calendarDosen()
	{
		@php ($redirectMe = "")
		@if($id != 0)
			@php($requestDosenKu = $id)
			@php ($redirectMe = "../")
		@endif
		var redirectMe = '<?php echo $redirectMe; ?>';

		!function($) {
	    	"use strict";

	    var CalendarApp = function() {
	        this.$body = $("body")
	        this.$modal = $('#event-modal'),
	        this.$event = ('#external-events div.external-event'),
	        this.$calendar = $('#calendar'),
	        this.$saveCategoryBtn = $('.save-category'),
	        this.$categoryForm = $('#add-category form'),
	        this.$extEvents = $('#external-events'),
	        this.$calendarObj = null
	    };


	    /* on drop */
	    CalendarApp.prototype.onDrop = function (eventObj, date) { 
	        var $this = this;
	            // retrieve the dropped element's stored Event Object
	            var originalEventObject = eventObj.data('eventObject');
	            var $categoryClass = eventObj.attr('data-class');
	            // we need to copy it, so that multiple events don't have a reference to the same object
	            var copiedEventObject = $.extend({}, originalEventObject);
	            // assign it the date that was reported
	            copiedEventObject.start = date;
	            if ($categoryClass)
	                copiedEventObject['className'] = [$categoryClass];
	            // render the event on the calendar
	            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
	            // is the "remove after drop" checkbox checked?
	            if ($('#drop-remove').is(':checked')) {
	                // if so, remove the element from the "Draggable Events" list
	                eventObj.remove();
	            }
	    },
	    /* on click on event */
	    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
	        var token = $('meta[name="csrf-token"]').attr('content');
	        var optionTag = '';
	        var myEventForeach = '';
	        var approvedOrNo = '';
	        @foreach($jenis_konsul as $value)
	            optionTag += "<option value='{{$value->id}}'";
	            myEventForeach = '<?php echo $value->nama; ?>';
	            if (myEventForeach == calEvent.title)
	            {
	                optionTag += " selected"
	            }
	            optionTag += '>{{$value->nama}}</option>';
	        @endforeach
	        var strSplit = calEvent.description;
	        myEventForeach = strSplit.split("<br/>");
	        var placeForMyEvent = myEventForeach[0].split(": ");
	        var detailForMyEvent = myEventForeach[1].split(": ");
	        var button = "btn-default";
	        var valueAccept = 'Waiting';
	        var disabledOrNo = '';
	        @foreach($slot as $value)
	            myEventForeach = '<?php echo $value->id; ?>';
	            approvedOrNo = '<?php echo $value->status; ?>';
	            if(myEventForeach == calEvent._id)
	            {
	            	if(approvedOrNo == 'Approved')
	            	{
	            		valueAccept = 'Approved';
	                	button = "btn-success";
	                	disabledOrNo = 'disabled';
	                }
	            }
	        @endforeach

	        var $this = this;
	            var form = $("<form method='post' action='"+ redirectMe +"../slotMhs/" + calEvent._id + "'></form>");
	            form.append("<input type='hidden' name='_token' value='" + token + "'/><div class='row'></div>");
	            form.find(".row")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Jenis Konsultasi</label><select class='form-control' "+ disabledOrNo +" name='jenis_konsul_id'>" + optionTag + "</select></div></div>")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Place</label><input class='form-control' placeholder='Place' type='text' "+ disabledOrNo +" name='place' value='" + placeForMyEvent[1] + "'></div></div>")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Detail</label><input class='form-control' placeholder='Detail' type='text' name='detail' value='" + detailForMyEvent[1] + "'><br/><input class='btn "+ button +" form-control' type='button' disabled value='"+ valueAccept +"'></div></div>");
	            $this.$modal.modal({
	                backdrop: 'static'
	            });
	            $this.$modal.find('.save-event').html('Update');
	            if(valueAccept == 'Approved')
	            {
	            	$this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end();
	            }
	            else
	            {
	            	$this.$modal.find('.delete-event').show().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end();
		            $this.$modal.find('.delete-event').unbind('click').click(function () {
		                form.append("<input type='hidden' name='_method' value='DELETE'/>");
		                form.submit();
		            });
	            }
	            
	            $this.$modal.find('.save-event').unbind('click').click(function () {
	                form.append("<input type='hidden' name='_method' value='PUT'/>");
	                form.submit();
	            });
	    },
	    /* on select */
	    CalendarApp.prototype.onSelect = function (start, end, allDay) {
	        var $this = this;
	        var token = $('meta[name="csrf-token"]').attr('content');
	        var mEnd = $.fullCalendar.moment(end);
	        var mStart = moment(start, 'YYYY-MM-DDTHH:mm:ssZ').format();
	        var dStart = mStart.substring(0, 10);
	        var dosen_id_ku = '<?php echo $requestDosenKu; ?>';
	        mStart = $.fullCalendar.moment(start);

	            $this.$modal.modal({
	                backdrop: 'static'
	            });
	            var form = $("<form method='post' action='"+ redirectMe +"../slotMhs'></form>");
	            form.append("<input type='hidden' name='_token' value='" + token + "'/><div class='row'></div>");
	            form.find(".row")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Jenis Konsultasi</label><select class='form-control' name='jenis_konsul_id'>@foreach($jenis_konsul as $value)<option value='{{$value->id}}'>{{$value->nama}}</option>@endforeach</select></div></div>")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Place</label><input class='form-control' placeholder='Place' type='text' name='place'/></div>")
	                .append("<div class='col-md-12'><div class='form-group'><label class='control-label'>Detail</label><input class='form-control' placeholder='Detail' type='text' name='detail' value='-'/></div></div><input type='hidden' name='status' value='Waiting'/>")
	                .append("<input type='hidden' value='{{ Auth::user()->owner_id }}' name='mahasiswa_id'><input type='hidden' value='"+ dosen_id_ku +"' name='dosen_id'><input type='hidden' name='date' value='" + dStart + "'/><input type='hidden' name='start' value='" + mStart + "'/><input type='hidden' name='end' value='" + mEnd + "'/><input type='hidden' name='isRequest' value='1'/>");
	            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
	                form.submit();
	            });
	            $this.$modal.find('.save-event').html('Request Event');
	            $this.$modal.find('form').on('submit', function () {
	            	var title = form.find("input[name='jenis_konsul_id']").val();
	                var detail = form.find("input[name='detail']").val();
	                var place = form.find("input[name='place']").val();
	                var categoryClass = "bg-warning";
	                if (place !== null && place.length != 0 && detail.length != 0) {
	                    $this.$modal.modal('hide');
	                    return true;
	                }
	                else{
	                    alert('You have to give a title/place/detail to your slot');
	                }
	                return false;
	            });
	            $this.$calendarObj.fullCalendar('unselect');
	    },
	    CalendarApp.prototype.enableDrag = function() {
	        //init events
	        $(this.$event).each(function () {
	            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
	            // it doesn't need to have a start or end
	            var eventObject = {
	                title: $.trim($(this).text()) // use the element's text as the event title
	            };
	            // store the Event Object in the DOM element so we can get to it later
	            $(this).data('eventObject', eventObject);
	            // make the event draggable using jQuery UI
	            $(this).draggable({
	                zIndex: 999,
	                revert: true,      // will cause the event to go back to its
	                revertDuration: 0  //  original position after the drag
	            });
	        });
	    },
	    /* Initializing */
	    CalendarApp.prototype.init = function() {
	        this.enableDrag();
	        /*  Initialize the calendar  */
	        @php($events = "")
	        @foreach ($slot as $value)
				@if($value->dosen_id == $requestDosenKu)
		        	@foreach ($jenis_konsul as $value2)
		        		@if ($value->jenis_konsul_id == $value2->id)
		                    @if($value->status == "Waiting")
		                        @if($value->isRequest == 0)
		                            @php($classname = 'bg-warning')
		                        @elseif($value->isRequest == 1)
		                            @php($classname = 'bg-dark')
		                        @endif
		                    @elseif($value->status == "Approved")
		                        @if ($value2->nama == "Tugas Akhir")
		                            @php($classname = 'bg-danger')
		                        @elseif ($value2->nama == "Kerja Praktek")
		                            @php($classname = 'bg-success')
		                        @elseif ($value2->nama == "Matakuliah")
		                            @php($classname = 'bg-primary')
		                        @endif
		                    @endif
				        	<?php 
					        	$events .= "{
					                title: '" . $value2->nama. "',
		                            description: 'Place : " . $value->place . "<br/>Detail : " . $value->detail . "',
					                start:" . $value->start . ",
					                end:" . $value->end . ",
				                    className: '" . $classname . "',
		                            _id: '" . $value->id . "'
					            },"; 
				            ?>		
		        		@endif
		            @endforeach
	            @endif 
	        @endforeach

	        var defaultEvents =  [ <?php echo substr($events, 0, (strlen($events)-1)); ?> ];
	        var $this = this;
	        $this.$calendarObj = $this.$calendar.fullCalendar({
	            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
	            minTime: '08:00:00',
	            maxTime: '16:00:00',  
	            defaultView: 'agendaWeek',  
	            handleWindowResize: true,   
	            height: $(window).height() - 100,   
	            header: {
	                left: 'prev,next today',
	                center: 'title',
	                right: 'month,agendaWeek,agendaDay'
	            },
	            events: defaultEvents,
	            editable: true,
	            droppable: true, // this allows things to be dropped onto the calendar !!!
	            eventLimit: true, // allow "more" link when too many events
	            selectable: true,
	            eventRender: function(event, element) { 
	                element.find('.fc-title').append("<br/>" + event.description); 
	            },
	            drop: function(date) { $this.onDrop($(this), date); },
	            select: function (start, end, allDay) {
	                var mEnd = $.fullCalendar.moment(end);
	                var mStart = $.fullCalendar.moment(start);
	                var check = moment(start, 'YYYY-MM-DD HH:mm').format();
	                var today = moment(new Date(), 'YYYY-MM-DD HH:mm').format();

	                if (check < today) {
	                    $('#calendar').fullCalendar('unselect');
	                    return false;
	                }
	                else {
	                    if (mEnd.isAfter(mStart, 'day'))
	                        $('#calendar').fullCalendar('unselect');
	                    else {
	                        var getTimeStart = (mStart.get('hour') * 60) + mStart.get('minute');
	                        var getTimeEnd = (mEnd.get('hour') * 60) + mEnd.get('minute');
	                        if ((getTimeEnd - getTimeStart) > 30 )
	                            $('#calendar').fullCalendar('unselect');
	                        else {
	                            /*Manual create event*/
	                            $this.onSelect(start, end, allDay); // selected day for make an event
	                        }
	                    }
	                }
	            },
	            eventClick: function(calEvent, jsEvent, view) {
	                $this.onEventClick(calEvent, jsEvent, view);
	            }

	        });

	        //on new event
	        this.$saveCategoryBtn.on('click', function(){
	            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
	            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
	            if (categoryName !== null && categoryName.length != 0) {
	                $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>' + categoryName + '</div>')
	                $this.enableDrag();
	            }

	        });
	    },

	   //init CalendarApp
	    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
	    
		}(window.jQuery),

		//initializing CalendarApp
		function($) {
		    "use strict";
		    $.CalendarApp.init()
		}(window.jQuery);
	}
</script>

<script src="{{ asset('assets_mahasiswa/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_mahasiswa/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_mahasiswa/plugins/switchery/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets_mahasiswa/plugins/parsleyjs/parsley.min.js') }}"></script>

<script src="{{ asset('assets_mahasiswa/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets_mahasiswa/plugins/summernote/summernote.min.js') }}"></script>

<!-- form advanced init js -->
<script src="{{ asset('assets_mahasiswa/pages/jquery.form-advanced.init.js') }}"></script>

<!-- App Js -->
<script src="{{ asset('assets_mahasiswa/js/jquery.app.js') }}"></script>