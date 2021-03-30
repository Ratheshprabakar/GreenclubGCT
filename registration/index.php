    
<?php
$sname="localhost";
$uname="***********";
$passwd="**********";
$dbname="********";
$conn=new mysqli($sname,$uname,$passwd,$dbname);
if($conn->connect_error)
{
 die("Connection failed:".$conn->connect_error);
}
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$regtype=$_POST['regtype'];
$event1 = $_POST['check'];
$event2 = $_POST['check'];
$event3 = $_POST['check'];
$event4 = $_POST['check'];
$event5 = $_POST['check'];
$event6 = $_POST['check'];
$event7 = $_POST['check'];

$checkbox1 = $_POST['vehicle'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  

       $sql = "INSERT INTO registration(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`,`events`)VALUES( '$firstname','$lastname','$gender','$email','$phone','$college','$chk' )";
       if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; }
      // if(mysqli_query($conn,$sql)) {

    //echo 'Data added sucessfully';
 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*if($event1 == 'Ppt')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','Yes','No','No','No','No','No','No')";
}

if($event2 == '')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','Yes','No','No','No','No','No')";
}
if($event3 != ' ')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','No','Yes','No','No','No','No')";
}
if($event4 != ' ')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','No','No','Yes','No','No','No')";
}
if($event5 != ' ')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','No','No','No','Yes','No','No')";
}
if($event6 != ' ')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','No','No','No','No','Yes','No')";
}
if($event7 != ' ')
{
 $sql = "INSERT INTO `registration`(`firstname`, `lastname`,`gender`, `email`, `phone`,`college`, `PPT`,'GREEN_ORA','VERSEITE','LIGHTS','ARTS','MIND','WORK') VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','No','No','No','No','No','No','Yes')";
}

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; }*/

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="favicon.jpg" rel="icon">

</head>
<body>

<div class="container">
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Successful</h4>
        </div>
        <div class="modal-body">
          <p>Thank you!!. <strong><?php echo $firstname;?></strong></p>
          <p>Successfully registered</p>
          <p>Your Unique ID : <strong><?php echo "GCGCT_",$last_id;?></strong></p><p>(Please note your Unique ID.)</p>
          <br>
        <p style="color:red;">Instructions: Registration is successful only if the payment is made...Kindly make the payment as soon as possible.</p>
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><a href="https://www.greenclubgct.com">Close</a></button>
      </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

    
<?php    
$conn->close();
?>
