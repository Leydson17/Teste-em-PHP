<?php
        // inicia o curl
        $curl = curl_init();

        // Define as configurações
        curl_setopt($curl, CURLOPT_URL,"https://www.unigran.br/campogrande/api/index.php/teste/tecnico");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'post');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'put');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'delete');
        
        // Executa a Requisição
        $output = curl_exec($curl);

        // Fecha a conexão
        curl_close($curl); 
?>