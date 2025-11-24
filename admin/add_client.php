<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Client - Admin</title>
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

        <form action="add_client.php" method="POST">
            <input type="text" name="email" placeHolder="Client's Email">
            <br>
            <input type="text" name="name" placeHolder="Client Name">
            <br>
            <input type="number" name="phone" placeHolder="Client Contact Number">
            <br>
            <input type="submit" name="add_client" value="Add">
        </form>

    </div>

  
  <?php include('../includes/admin_footer.php'); ?>
</body>
</html>