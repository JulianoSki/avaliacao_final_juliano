<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JULIANO INFORMÁTICA</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        .tituloPagina {
            margin: 10px 0 20px;
            background-color: rgb(255, 230, 184);
            font-size: 14px;
            font-weight: bold;
            padding: 5px;
        }

        .espacoLinhas {
            margin-bottom: 15px;
        }

        .obrigatorio {
            color: red;
        }

        .alert {
            display: none;
        }

        .rodape {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        #btnEnviar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

        <header>
            <div class="row">
                <div class="col text-center">
                    <a href="index.php"><img src="img/logo.jpg" class="img-fluid" alt="Juliano Informática"
                            title="Juliano Informática"></a>
                </div>
            </div>

            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tituloPagina">
                        &raquo; FALE CONOSCO
                    </div>
                </div>
            </div>
        </header>

        <div>
            <div class="alert alert-danger" role="alert"></div>

            <form name="fcontato" method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-6 form-group espacoLinhas">
                        <label for="nome" class="form-label">Nome <span class="obrigatorio">*</span></label>
                        <input type="text" class="form-control" name="nome" id="nome" value="" maxlength='100'
                            placeholder="Seu nome">
                    </div>
                    <div class="col-sm-12 col-md-6 form-group espacoLinhas">
                        <label for="email" class="form-label">E-mail <span class="obrigatorio">*</span></label>
                        <input type="text" class="form-control" name="email" id="email" value="" maxlength='100'
                            placeholder="E-mail do fornecedor">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 form-group espacoLinhas">
                        <label for="telefone" class="form-label">Telefone <span class="obrigatorio">*</span></label>
                        <input type="tel" class="form-control" name="telefone" id="telefone" value="" maxlength='15'
                            placeholder="Telefone Fixo">
                    </div>
                    <div class="col-sm-12 col-md-6 form-group espacoLinhas">
                        <label for="celular" class="form-label">Celular <span class="obrigatorio">*</span></label>
                        <input type="tel" class="form-control" name="celular" id="celular" value="" maxlength='15'
                            placeholder="Celular">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group espacoLinhas">
                        <label for="mensagem" class="form-label">Mensagem <span class="obrigatorio">*</span></label>
                        <textarea class="form-control" name="mensagem" id="mensagem"
                            placeholder="Digite aqui sua mensagem" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 form-group">
                        <button type="submit" id="btnEnviar" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

        <footer>
            <div class="row">
                <div class="col-12 text-center rodape">
                    &copy; Todos os direitos reservados - 2022
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#nome").focus();

            $("#btnEnviar").click(function () {
                console.log("X");

                $(".alert").removeClass("alert-success").addClass("alert-danger");

                if ($("#nome").val() == "") {
                    $(".alert").html("Preencha o campo Nome!");
                    $("#nome").focus();
                } else if ($("#email").val() == "") {
                    $(".alert").html("Preencha o campo E-mail!");
                    $("#email").focus();
                } else if ($("#telefone").val() == "") {
                    $(".alert").html("Preencha o campo Telefone!");
                    $("#telefone").focus();
                } else if ($("#celular").val() == "") {
                    $(".alert").html("Preencha o campo Celular!");
                    $("#celular").focus();
                } else if ($("#mensagem").val() == "") {
                    $(".alert").html("Preencha o campo Mensagem!");
                    $("#mensagem").focus();
                } else {
                    $(".alert").removeClass("alert-danger").addClass("alert-success");
                    $(".alert").html("Mensagem enviada com sucesso!");
                }

                $(".alert").show();

                return false;
            })

        })
    </script>
</body>

</html>