//Notre code:
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      //defaultDate: '2019-04-12',
      defaultDate: Date.now(),
      editable: false, //si on peut on non déplacer les éléments sur le calendrier
      eventLimit: true, // allow "more" link when too many events
      firstDay: 1,
      //height: 650 //taille du calendrier
    });

    //Parcours le tableau contenant toutes les activités
    for(var ii=0;ii<arrayActivities.length;ii++)
    {   
        var myTitle = arrayActivities[ii].sport + "  " 
                    + getDistanceUnitAndFormat(arrayActivities[ii].distance, arrayActivities[ii].sport);
                    + arrayActivities[ii].duration + " ";
        var myDate = new Date(arrayActivities[ii].strDate + 'T00:00:00');
        var myColor = getSportColor(arrayActivities[ii].sport);
        var mySport = arrayActivities[ii].sport;

        //On ajoute chaque activité sur le calendrier
        calendar.addEvent(
        {
            title: myTitle,
            start: myDate,
            allDay: true,
            color: myColor,
            //backgroundColor : 'yellow',
            //borderColor: 'black',
            textColor: 'white',
            sportName : mySport,
            url: "/activity/" + arrayActivities[ii].id, //redirige vers la visualisation de l'activité quand on clique dessus
            id : 'a'
        });
    }

    calendar.render();//affiche le calendrier à l'écran
  });//fin addEventListener