<?php 
    $curso = "Curso de PHP e MySQL";
    echo $curso;

    echo "<br> <br>";

    echo "<form method = 'POST'>";
    echo "<label>Digite um número: </label>";
    echo "<input type='text' name='numero'>";
    echo "<input type='submit' name='enviar'>";
    echo "</form>";

    $numero = $_POST['numero'];

    if(isset($_POST['enviar'])) {
        if($numero > 5) {
            echo $numero." é maior que 5!";
        } 
        else {
            echo $numero." é menor ou igual a 5!";
        }
    }

    echo "<br> <br>";

    echo "Isto é um 'For Loop' em PHP: <br>";
    echo "{ <br>";
    for($i=0;$i<=5;$i++) {
        echo "Resultado ".$i;
        echo "<br>";
    }
    echo "} <br>";
?>