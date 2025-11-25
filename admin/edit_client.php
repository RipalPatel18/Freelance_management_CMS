<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit A Client - Admin</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include('../includes/admin_header.php'); ?>
   <div class="container mt-4">
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

     <form action="edit_client.php" method="POST" class="card p-4 shadow-sm" style="max-width: 500px;">
        <input type="hidden" name="client_id" value="<?php echo $client['client_id'] ?>">

        <div class="mb-3">
          <label for="name" class="form-label">Client Name:</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Client Name" value="<?php echo $client['name'] ?>">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Client Email:</label>
          <input type="text" id="email" name="email" class="form-control" placeholder="Client Email" value="<?php echo $client['email'] ?>">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Contact:</label>
          <input type="number" id="phone" name="phone" class="form-control" placeholder="Contact" value="<?php echo $client['phone'] ?>">
        </div>

        <button type="submit" name="updateclient" class="btn btn-primary">Update</button>
    </form>
    

  
  <?php include('../includes/admin_footer.php'); ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>