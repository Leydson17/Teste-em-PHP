<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>unigran - Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar</h1>
        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['CadUsuario'])) {
            //var_dump($dados);

            $empty_input = false;

            $dados = array_map('trim', $dados);
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

            if (!$empty_input) {
                $query_usuario = "INSERT INTO usuarios (nome, email, Data de nascimento, genero, CPF, telefone, Diferencial) VALUES (:nome, :email, :Data de nascimento, :genero, :CPF, :telefone, :SeuDiferencial ) ";
                $cad_usuario = $conn->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':Data de nascimento', $dados['Data de nascimento'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':CPF', $dados['CPF'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':SeuDiferencial', $dados['SeuDiferencial'], PDO::PARAM_STR);
                $cad_usuario->execute();
                if ($cad_usuario->rowCount()) {
                    echo "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                    unset($dados);
                } else {
                    echo "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
                }
            }
        }
            ?>
        <form name="cad-usuario" method="POST" action="">
            <label>Nome: </label>
            <input type="Texto" name="Nome" id="nome" placeholder="Nome completo"><br><br>

            <label>email: </label>
            <input type="email" name="email" id="email" placeholder="Digite o seu e-mail"><br><br>

            <label>Data de nascimento: </label>
            <input type="date" name="Data de Nascimento" id="date" placeholder="Digite a data de nascimento"><br><br>

            <fieldset>
                <label>Genero: </label>    
                <input type="checkbox" name="Genero" id="Genero" value="M">
                <label for="Genero"> M </label><br>
                <input type="checkbox" name="Genero" id="Genero" value="F">
                <label for="Genero"> F </label><br>
            </fieldset>

            <label>CPF: </label>
            <input type="int" name="CPF" id="CPF" placeholder="Digite o seu CPF"\
                   pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \">
            <input type="submit" value="Verificar">
            <br><br>

            <label>Telefone: </label>
            <input type="Telefone" name="Telefone" id="Telefone"><br><br>

            <label>Seu Diferencial: </label>
            <input type="SeuDiferencial" name="SeuDiferencial" id="Seu Diferencial" placeholder="O que te torna diferente?"><br><br>

            <input type="submit" value="Cadastrar" name="CadUsuario">
        </form>
    </body>
</html>