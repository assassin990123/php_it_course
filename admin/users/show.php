<?php
    // Include the configuration file
    require_once 'config.php';
    
    // Include the header
    include_once BACKEND_ROOT . 'inc/header.php';

    // get id from URL
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE id = " . $id;
    $result = $conn->query($sql);

    if ($result->num_rows < 0) {
        // if there is 0 users
        echo '
        <div class="card">
        <div class="card-header">
        Notification
        </div>
        <div class="card-body">
        <h5 class="card-title">Here is no user.</h5>
        <a href="../index.php" class="btn btn-primary float-end">Back</a>
        </div>
        </div>
        ';
        return;
    }

      $user = mysqli_fetch_assoc($result);
    
?>

<!-- Display a form for adding a new user -->
<div class="card">
    <div class="card-header">
        Update User Data
    </div>

    <div class="card-body">
        <div class="container">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user['name'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user['email'];?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user['password'];?>">
                </div>
            </div>

        </div>
        
        <!-- Back button -->
        <a href="index.php" class="btn btn-info float-start">Back</a>
        <!-- Edit button -->
        <a href="edit.php?id=<?php echo $id;?>" class="btn btn-primary float-end">Edit User Data</a>
    </div>
 </div>