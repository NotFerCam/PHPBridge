<?php
    if(file_exists("../uploads/datosCuestionario.pdf")){
        unlink("../uploads/datosCuestionario.pdf");        
    }     
    
    move_uploaded_file(
        $_FILES['pdf']['tmp_name'], 
        "../uploads/datosCuestionario.pdf"
    );
?>