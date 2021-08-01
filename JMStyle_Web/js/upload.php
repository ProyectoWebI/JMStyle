<?php
if( !empty($_FILES['imagen']['name']) ){
    move_uploaded_file($_FILES['imagen']['tmp_name'], "src/img" .$_FILES['imagen']['name']);
    echo "El archivo se subio. :"
}
?>