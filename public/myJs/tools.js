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
            res = "purple";
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

function getDistanceUnitAndFormat(distance, sportName)
{
    switch(sportName)
    {
        case 'Run':
            res = distance + " km";
            break;
        case 'Swim':
            res = distance + "m";
            break;
        case 'Bike':
            res = distance + "km";
            break;
        case 'Muscu':
            res = "";
            break;
        case 'Triathlon':
            res = distance + "km";
            break;
        case 'Swimrun':
            res = distance + "km";
            break;
    }
    return res;
}

//Renvoie l'unité de la distance en fonction du sport (non utilisée au 08/04/2019)
function getDistanceUnit(sportName)
{
    switch(sportName)
    {
        case 'Run':
            res = "km";
            break;
        case 'Swim':
            res = "m";
            break;
        case 'Bike':
            res = "km";
            break;
        case 'Muscu':
            res = "";
            break;
        case 'Triathlon':
            res = "km";
            break;
        case 'Swimrun':
            res = "km";
            break;
    }
    return res;
}