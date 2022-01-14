
<!Doctype html>
<html>
        <head>
                <meta charset="UTF - 8">
                <h1> Alunos </h1>
        </head>

        <body>
<?php
        $url = "https://www.unigran.br/campogrande/api/index.php/teste/tecnico";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $resultado = json_decode(curl_exec($ch));
        echo "Nome" . $nome -> nome . "<br>";
       
        
        curl_close($ch); 
?>
        </body>
</html>

