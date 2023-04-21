<?php
    require_once 'config.php';
    include_once ROOT . 'inc/header.php';
    
    $sql = "SELECT * FROM users";
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

    // get userdata from db 
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
?>

<a href="create.php" class="btn btn-primary float-end">Add new user</a>
<br><br><br>

<table class="table">
    <thead class="table-light">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // var_dump($users);
            foreach ($users as $user) {
                echo "<tr>
                    <td>" . $user['id'] . "</td>
                    <td>" . $user['name'] . "</td>
                    <td>" . $user['email'] . "</td>
                    <td>" . $user['password'] . "</td>
                    <td><a href='create.php?id=" . $user['id'] . "' class='btn btn-light btn-sm'>Show</a></td>
                </tr>";
            }
        ?>
        
    </tbody>
</table>