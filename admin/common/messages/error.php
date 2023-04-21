<?php 
    if (!empty($_SESSION['flashdata']['errors'])) {
        foreach ($_SESSION['flashdata']['errors'] as $error) { 
            echo 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ' . $error . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            ;
        }
    }

    session_unset();
?>

