 <?php
    // Include the configuration file
    require_once 'config.php';
    
    // Include the header
    include_once ROOT . 'inc/header.php';
?>

<!-- Display a form for adding a new user -->
<div class="card">
    <div class="card-header">
        Add new user
    </div>

    <div class="card-body">
        <form action="store.php" method="POST">
            <!-- Name field -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <!-- Email field -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <!-- Password field -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary float-end">Add New User</button>
        </form>
    </div>
 </div>