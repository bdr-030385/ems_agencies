$(function(){
	$('#calendar').fullCalendar({
      header: {
        left: 'title',
        center: '',
        //right: 'month,agendaWeek,agendaDay'
        right: 'prev,next today',
      },
      defaultDate: $('#selected_appointment_date').val(),
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: {
        url: BASE_URL + 'appointment/json_load_events',
        error: function() {
          $('#script-warning').show();
        }
      },
      eventRender: function(event, eventElement) {
          if (event.id) {                
            $("td[data-date='" + event.date_event + "']").addClass('has-event');                
          }
      },
      dayClick: function(date, jsEvent, view) {
          loadAppointmentList(date.format());            
          // change the day's background color just for fun
          $(".fc-day").css('background-color', '');
          $(this).css('background-color', '#54DAF2');
          $("#selected_appointment_date").val(date.format());
          $("#dt_appointment_date").val(date.format());
      },       
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
    loadAppointmentList($('#selected_appointment_date').val());

  function loadAppointmentList(date = ''){
    $(".appointment-list").html('<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading appointments...</div>');
    var url = BASE_URL + 'appointment/ajax_load_appointments_by_date';
    $.get(url,{date:date},
        function(o){
            $(".appointment-list").html(o);
            $('.date-desc').html(date);
    });
  }

  $(".dt-default").datepicker({
    inline: true,
    dateFormat: 'yy-mm-dd',

    //minDate:0,       
    beforeShow: function(input, inst)
    {
        inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 'px'});
    }
  }); 

  $(".default-timepicker").timepicker({
      showInputs: false
  });

  $('.btn-hide-show-appointment-form').click(function(){
    $("#more-details-container").toggle(500);
    if($(this).attr("data-show") == 'false') {
      $(this).html('<i class="fa fa-minus-square"></i> Hide');
      $(this).attr("data-show","true");
    }else{
      $(this).html('<i class="fa fa-plus-square"></i> View more');
      $(this).attr("data-show","false");
    }
  });

})