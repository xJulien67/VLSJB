//Permet de donner la couleur sur le calendrier associée à un sport
    function getSportColor(sportName)
    {
       var res = "black"; 
       switch(sportName)
       {
            case 'Run':
                res = "green";
                break;
            case 'Swim':
                res = "blue";
                break;
            case 'Bike':
                res = "yellow";
                break;
            case 'Muscu':
                res = "brown";
                break;
            case 'Triathlon':
                res = "red";
                break;
            case 'Swimrun':
                res = "orange";
                break;
       }
       return res;
    }

