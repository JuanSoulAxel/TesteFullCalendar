document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'pt-br',
      initialView: 'multiMonthYear',
      events: '/FullCalendar/controllers/ControllerEvents.php',
      buttonText: {
        today: 'Hoje',
      }
      });
    calendar.render();
  });

  document.getElementById('my-today-button').addEventListener('click', function() {
    calendar.today();
  });