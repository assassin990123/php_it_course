<?php
    require_once 'config.php';
    require_once BACKEND_ROOT . 'common/helper/session.php';
    
    $user_data = $_POST;
    // var_dump($user_data);
    
    if ($user_data['name'] == '') {
        array_push($_SESSION['flashdata']['errors'], 'Name field is required.');
    }

    if ($user_data['email'] == '') {
        array_push($_SESSION['flashdata']['errors'], 'Email field is required.');
    }

    if ($user_data['password'] == '') {
        array_push($_SESSION['flashdata']['errors'], 'Password field is required.');
    }

    if ($user_data['password'] != $user_data['confirm_password']) {
        array_push($_SESSION['flashdata']['errors'], 'Password does not match');
    }

    if (!empty($_SESSION['flashdata']['errors'])) {
        header('Location: create.php');
    }
    
    var_dump($_SESSION);
    // $sql = "INSERT INTO users (NAME, email, PASSWORD) VALUE ('" .$user_data['name'] . "', '" . $user_data['email'] . "', '" . $user_data['password'] . "');";
    
    // if ($conn->query($sql) === TRUE) {
    //     echo 'success';
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
        
?>