<?php
session_start();
require_once('config.php');
?>

<?php
if(isset($_POST['Add']))
{
  @$Name = $_POST['Name'];
  @$Address = $_POST['Address'];
  @$pnumber = $_POST['pnumber'];
  @$email = $_POST['email'];

    $query = "INSERT INTO persons(`Name`,`Address`,`Phone_number`,`Email`) VALUES ('$Name','$Address','$pnumber','$email')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
      echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
      $_SESSION['Name'] = $Name;
      $_SESSION['Address'] = $Address;
      $_SESSION['pnumber'] = $pnumber;
      $_SESSION['email'] = $email;
      header( "Location: ../add.php");
    }
    else
    {
      echo '<p class="bg-danger msg-block">Data not saved</p>';
    }
  }
?>

<!--code for delete belo-->
<?php


if(isset($_POST['delete_btn']))
{
    $Id = $_POST['delete_id'];

    $query = "DELETE FROM persons WHERE Id='$Id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
     
        header('Location: ../add.php'); 
        echo '<script type="text/javascript">alert("Your Data is Deleted")</script>';
    }
    else
    {
        header('Location: ../add.php'); 
        echo '<script type="text/javascript">alert("Your Data is not Deleted")</script>';
    }    
}
?>
<!---Bulk delete function-->

<?php

if(isset($_POST['b_delete'])){
  $chkarr = $_POST['checkbox'];
  foreach($chkarr as $Id){
    mysqli_query($con, "DELETE From persons WHERE Id=".$Id);
  }
  header("Location:../search.php");
}



?>

<!--Update Function-->
<?php

if(isset($_POST['update']))
{
    $Id = $_POST['edit_id'];
    $Name = $_POST['edit_Name'];
    $Address = $_POST['edit_Address'];
    $Phone_Number = $_POST['edit_Phone_Number'];
    $Email= $_POST['edit_Email'];

    $query = "UPDATE persons SET Name='$Name', Address='$Address', Phone_Number='$Phone_Number', Email='$Email' WHERE Id='$Id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: ../add.php'); 
        echo '<script type="text/javascript">alert("User updated ")</script>';
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: ../add.php'); 
    }
}

?>