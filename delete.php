<?php
require_once "config.php";

if(isset($_POST["submit"])){
    if(!empty($_POST["room"])){
        foreach($_POST["room"] as $room){
            $sql="DELETE FROM reservations WHERE room_no=?;";
            $stmt=mysqli_prepare($conn,$sql);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"i",$param_room);
                $param_room=$room;
                if(mysqli_stmt_execute($stmt)){
                    header("location: customer_table.php");
                }
                else{
                    echo "something went wrong....";
                }
            }
            echo "andar gadbad";
        }
    }
    else{
        echo "gadbag gadbad";
    }
}
else{
    echo "gadbad";
}
mysqli_close($conn);
?>