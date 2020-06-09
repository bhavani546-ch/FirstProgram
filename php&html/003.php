<html>
   <body>
   
   <html>
   <body>

   <p>Demo Using If Else If </p>
   
    <?php
        $d = date("D");
        
        if ($d == "Fri")
        echo "Have a nice weekend!";
        
        elseif ($d == "Sun")
        echo "Have a nice Sunday!"; 
        
        else
        echo "Have a nice day!"; 
    ?>

    <hr/>

    <p>Demo Using Switch Statement </p>

    <br/>

    <?php
        $d = date("D");
        
        switch ($d){
        case "Mon":
            echo "Today is Monday";
            break;
        
        case "Tue":
            echo "Today is Tuesday";
            break;
        
        case "Wed":
            echo "Today is Wednesday";
            break;
        
        case "Thu":
            echo "Today is Thursday";
            break;
        
        case "Fri":
            echo "Today is Friday";
            break;
        
        case "Sat":
            echo "Today is Saturday";
            break;
        
        case "Sun":
            echo "Today is Sunday";
            break;
        
        default:
            echo "Wonder which day is this ?";
        }
    ?>
      
   </body>
</html>
   
   </body>
</html>