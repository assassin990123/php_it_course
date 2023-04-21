 <?php
    // Include the configuration file
    require_once 'config.php';
    session_start();
    
    // Include the header
    include_once BACKEND_ROOT . 'inc/header.php';

    include BACKEND_ROOT . 'common/messages/error.php';
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
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>
            <!-- Email field -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
            <!-- Password field -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <!-- Confirm Password field -->
            <div class="mb-3">
                <label for="pwd2" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" placeholder="Enter confirm password" name="confirm_password">
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary float-end">Add New User</button>
        </form>
    </div>
 </div>

 <?php
    include_once BACKEND_ROOT . 'inc/footer.php';
 ?>