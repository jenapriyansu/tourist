<?php
session_start();//session is 
$conn = mysqli_connect("localhost","root" , "" , "capston");

if(isset($_POST['sumbit_now'])){
    $firstname = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$phone = $_POST['visitor_phone'];
$adults = $_POST['total_adults'];
$children = $_POST['total_children'];
$checkin1 =date('y-m-d',strtotime($_POST['checkin']));
$checkout1 =date('y-m-d',strtotime($_POST['checkout']));
$room_preference1 = $_POST['room_preference'];
$text = $_POST['visitor_message'];

$query = "INSERT into tourest (name , email , phone , adults , children , jstart , jend , place , text)  values('$firstname' ,'$email' , '$phone' , '$adults' , '$children' , '$checkin1' , '$checkout1' , '$room_preference1' , '$text' )";

$query_run = mysqli_query($conn , $query);

if($query_run){
    ?>
   <script>
    alert("booking successfully");
   </script>
   <?php
      header("location:index.html");
}
else{
    ?>
    <script>
     alert("booking failed");
    </script>
    <?php
}
}
?>