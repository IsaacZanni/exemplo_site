<?php
    //    isset($_POST['nome_btn_submit'])
    if(isset($_POST['btn_enviar'])){
        // print_r('Nome: '.$_POST['nome']);
        // print_r('<br>');
        // print_r('Email: '.$_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: '.$_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: '.$_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: '.$_POST['data_nasc']);
        // print_r('<br>');
        // print_r('Estado: '.$_POST['estado']);

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome_usuario,email_usuario,telefone_usuario,sexo_usuario,date_nasc_usuario,cidade_usuario,estado_usuario, endereco_usuario)
        VALUES ($nome,$email,$telefone,$genero,$data_nasc,$cidade,)")
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,cyan,darkblue);
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            color:white;
        }

        fieldset{
            border: 3px solid white;
        }

        legend{
            border: 2px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            color: black;
            font-weight: bold;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            outline: none;
            border:none;
            border-bottom: 2px solid white;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top:-20px;
            font-size: 11px;
        }

        #data_nasc{
            border: none;
            padding: 10px;
            margin: 5px;
            background-color: white;
            color: black;
            border-radius: 10px;
            outline: none;
        }

        #btn_enviar{
            background-color: blue;
            border: none;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            border-radius: 10px;
            width: 100%;
            height:30px;
            font-weight: bold;
        }


    </style>

</head>
<body>
    <div class="box">
        <form action="tela_cadastro.php" method="POST">
            <fieldset>
                <legend>Formulário do Cliente</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="genero">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="genero">Masculino</label>
                <br><br>

                    <label for="data_nasc"><b>Data de nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="estado" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>
                <br><br>
                <input type="submit" id="btn_enviar" name="btn_enviar" value="Enviar">

            </fieldset>
        </form>
    </div>
</body>
</html>