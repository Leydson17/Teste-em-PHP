<?php
        // inicia o curl
        $curl = curl_init();

        // Define as configurações
        curl_setopt($curl, CURLOPT_URL,"https://www.unigran.br/campogrande/api/index.php/teste/tecnico");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        json_decode(curl_exec($curl));  
        
        
        // Executa a Requisição
        //$output = curl_exec($curl);

        // Fecha a conexão
        curl_close($curl); 
?>