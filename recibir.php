<?php
    if($_POST["fecha"] <= "2023-03-11"){
        echo "<div style='color:{$_POST['colorFav']};
        background:{$_POST['colorFav2']};'>";
        echo "Fecha Valida <br>";
        print_r($_POST);
        echo "</div>";
    }
    else {
        echo "Fecha invalida, no se permite del futuro";
    }