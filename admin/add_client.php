<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Client - Admin</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include('../includes/admin_header.php'); ?>
  <h1>Add a Client</h1>

    <div>

        <?php 
            require('../includes/config.php');
            if(isset($_POST['add_client'])){
                //print_r($_POST);
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];;

                $query = "INSERT INTO client (`email`, `name`, `phone`) VALUES ('$email', '$name', '$phone')";
                
                $client = mysqli_query($conn, $query);
                if($client){
                    header('Location: dashboard.php');
                }
                else{
                    echo 'FAILED, error code is' .
                    mysqli_error($conn);
                }
            }
        ?>

      
     <form action="add_client.php" method="POST" class="card p-4 shadow-sm">
        <h3 class="mb-3">Add Client</h3>

        <div class="mb-3">
            <label class="form-label">Client Email</label>
            <input type="text" name="email" class="form-control" placeholder="Client Email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Client Name</label>
            <input type="text" name="name" class="form-control" placeholder="Client Name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>

        <button type="submit" name="add_client" class="btn btn-primary">Add Client</button>
    </form>
</div>

  
  <?php include('../includes/admin_footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>