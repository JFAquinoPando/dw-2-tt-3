<?php
    if($_POST["fecha"] <= "2023-03-11"){
        echo "<body style='color:{$_POST['colorFav']};
        background:{$_POST['colorFav2']};'><div >";
        echo "Fecha Valida <br>";
        print_r($_POST);
        echo "</div></body>";
    }
    else {
        echo "Fecha invalida, no se permite del futuro";
    }