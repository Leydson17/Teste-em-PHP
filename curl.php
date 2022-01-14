
<!Doctype html>
<html>
        <head>
                <meta charset="UTF - 8">
                <h1>Alunos </h1>
        </head>

        <body>
<?php
        // inicia o curl
        $curl = curl_init();

        // Define as configurações
        curl_setopt($curl, CURLOPT_URL,"https://www.unigran.br/campogrande/api/index.php/teste/tecnico");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
      
        // Executa a Requisição
        $output = curl_exec($curl);

        // Fecha a conexão
        curl_close($curl); 
?>
        </body>
</html>

