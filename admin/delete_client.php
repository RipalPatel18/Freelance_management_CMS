<?php
  require('../includes/config.php');

  if(isset($_POST['client_id'])){
    $id = $_POST['client_id'];
    $query = "DELETE FROM client WHERE `client_id` = '$id'";
    $client = mysqli_query($conn, $query);

    if($client){
      echo 'Client was deleted successfully!';
      header('Location: dashboard.php');
    }else{
      echo "Failed: " . mysqli_error($conn);
    }

  }else{
    echo "Not Authorized";
  }

?>