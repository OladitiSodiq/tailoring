< script >
    $(function() {
        $(document).ready(function() {



            // var today = new Date();

            // var dd = today.getDate();

            // var mm = today.getMonth() + 1; //January is 0!

            // var yyyy = today.getFullYear();



            // if (dd < 10) { dd = '0' + dd }

            // if (mm < 10) { mm = '0' + mm }



            // var current = yyyy + '-' + mm + '-';

            var calendar = $('#calendar').fullCalendar({

                header: {

                    left: 'title',

                    center: '',

                    right: 'month, agendaWeek, agendaDay, prev, next'

                },

                events: 'calendar.php',

                editable: true,

                // droppable: true,

                // eventLimit: true, // allow "more" link when too many events

                selectable: true,




                select: function(start, end, allDay) {

                    // newEvent(start);
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                },


            });

        })
    }); < /script>