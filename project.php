<?php
$name=$_REQUEST['name1'];
$phone=$_REQUEST['phone1'];
$email=$_REQUEST['email1'];
$n_individuals=$_REQUEST['individuals1'];
$date=$_REQUEST['date1'];
$dropdown=$_REQUEST['dropdown1'];

if(isset($_POST['bntt'])){

    $l_host="localhost";
    $user="root";
    $passward="";
    $db="project";

    $con= mysqli_connect($l_host,$user,$passward,$db);

    $insert="insert into person values('$name','$phone','$email','$n_individuals','$date','$dropdown')";

    mysqli_query($con,$insert);
    
    if($con){
        echo("<h2><b>connected</b></h2>");
    }
    else{
        echo("<h2><b>no connection</b></h2>");
    }


}

?>