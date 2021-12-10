<?php    
    $pdf = $_FILES['pdf']['tmp_name'];
    session_start();
    $_SESSION['pdf'] = $pdf;
    move_uploaded_file($_FILES['pdf']['tmp_name'],"uploads/datosCuestionario.pdf");
    header("Location: mail.php");
?>