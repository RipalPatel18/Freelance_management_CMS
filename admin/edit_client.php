<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit A Client - Admin</title>
</head>
<body>
  <?php include('../includes/admin_header.php'); ?>
  <h1>Edit The Client</h1>
  
    <?php

        require('../includes/config.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['client_id'])) {
            $id = $_GET['client_id'];
            $query = "SELECT * FROM client WHERE client_id=$id";
            $result = mysqli_query($conn, $query);
            $client = $result->fetch_assoc();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['client_id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
        
            $query = "UPDATE client SET `email`='$email', `name`='$name', `phone`='$phone' WHERE client_id=$id";
            $result = mysqli_query($conn, $query);

            if($result){
            echo 'Client was updated successfully!';
            header("Location: dashboard.php"); 
            }else{
            echo "Failed: " . mysqli_error($conn);
            }
        }


    ?>

    <form action="edit_client.php" method="POST">
        <input type="hidden" name="client_id" value="<?php echo $client['client_id'] ?>">

        <label for="name">Client Name:</label>
        <input type="text" id="name" name="name" placeholder="Client Name" value="<?php echo $client['name'] ?>">
        <br>

        <label for="email">Client Email:</label>
        <input type="text" id="email" name="email" placeholder="Client Email" value="<?php echo $client['email'] ?>">
        <br>

        <label for="phone">Contact:</label>
        <input type="number" id="phone" name="phone" placeholder="Contact" value="<?php echo $client['phone'] ?>">
        <br>

        <input type="submit" name="updateclient" value="Update">
    </form>
    

  
  <?php include('../includes/admin_footer.php'); ?>
</body>
</html>