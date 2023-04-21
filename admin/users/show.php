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
        <form action="update.php?id=<?php echo $id;?>" method="POST">
            <!-- Name field -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                    value=<?php echo $user['name']?>
                >
            </div>
            <!-- Email field -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value=<?php echo $user['email']?>
                >
            </div>
            <!-- Password field -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                    value=<?php echo $user['password']?>
                >
            </div>

            <!-- Back button -->
            <a href="index.php" class="btn btn-info float-start">Back</a>
            <!-- Udate button -->
            <button type="submit" class="btn btn-primary float-end">Update User Data</button>
        </form>
    </div>
 </div>