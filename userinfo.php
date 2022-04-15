<?php
    
    $con = new mysqli('localhost','root');

    if($con){
        echo "thank you for appraoching us";
    }
    else{
        echo "Not Connected";
    }

    mysqli_select_db($con,'int220');

    $a = $_POST['user'];
    $b = $_POST['email'];
    $c = $_POST['mobile'];
    $d = $_POST['comments'];
    $query=" insert into userinfodata (user,email,mobile,comments) 
    values ('$a','$b','$c','$d')";

    mysqli_query($con,$query);

?>
