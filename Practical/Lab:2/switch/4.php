// Create a script that takes a day of the week (number from 1 to 7) as input and displays the
corresponding day name using a switch statement.

<?php
$num;
switch($num){
    case 1:
        echo "The day is Sunday";
        break;
    case 2:
        echo "The day is Maonday";
        break;
    case 3:
        echo "The day is Teusday";
        break;
    case 4:
        echo "The day is Wednesday";
        break;
    case 5:
        echo "The day is Thursday";
        break;
     case 6:
        echo "The day is Friday";
        break;
     case 7:
        echo "The day is saturday";
        break;
     default:
     echo "No any day matched wrong entry";                        
}
?>