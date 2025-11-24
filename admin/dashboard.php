<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
  <?php include('../includes/admin_header.php'); ?>
  <h1>Welcome Admin!</h1>
  
  <a href="add_client.php">
      Add Client
  </a>

  <?php

        require('../includes/config.php');
        
        $query = 'SELECT * FROM client';

        $clients = mysqli_query($conn,$query);

        // echo '<pre>'.print_r($schools).'</pre>'

        foreach ($clients as $client) {
                echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">' . $client['name'] . '</h3>
                        <p class="card-title">Client Email: ' . $client['email'] . '</p>
                        <p class="card-text">Contact: ' . $client['phone'] . '</p>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <form action="edit_client.php">
                              <input type="hidden" name="client_id" value="' . $client['client_id'] . '">
                              <button type="submit" name="edit_client" class="btn btn-sm btn-primary">Edit</button>
                            </form>
                          </div>
                          <div class="col text-end">
                            <form action="delete_client.php" method="POST">
                                <input type="hidden" name="client_id" value="' . $client['client_id'] . '">
                                <button type="submit" name="delete_client" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>'; 
            };
        ?>

  
  <?php include('../includes/admin_footer.php'); ?>
</body>
</html>