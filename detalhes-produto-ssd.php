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

        .rodape {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        .valorProduto {
            margin-bottom: 5px;
            color: orange;
            font-weight: bold;
        }

        .botaoComprar {
            margin: 15px 0;
        }

        .linkVoltar {
            text-align: right !important;
        }

        .linkVoltar a {
            text-decoration: none;
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
        </header>

        <div>
            <div class="row">
                <div class="col-12">
                    <div class="tituloPagina">
                        &raquo; DETALHES DO PRODUTO
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 linkVoltar">
                    <div class="linkVoltar">
                        <a href="index.php">&laquo; Voltar para o início</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 text-center"><img src="img/ssd-kingston-240gb.jpg" class="img-fluid"
                        alt="SSD Kingston 240 GB" title="SSD Kingston 240 GB"></div>
                <div class="col-sm-12 col-md-9">
                    <div class="valorProduto fs-4">R$ 429,90</div>
                    <div>À vista no PIX com até <strong>10% OFF</strong></div>
                    <div class="botaoComprar"><a href="#" class="btn btn-primary">Comprar</a></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <strong>DESCRIÇÃO DO PRODUTO</strong>
                </div>
            </div>

            <p class="text-lg-start">
                Considerado um dispositivo de alto desempenho, a unidade em estado sólido A400 da Kingston é projetada
                para as pessoas mais exigentes. Melhora significativamente a capacidade de resposta do seu sistema, pois
                atinge velocidades de leitura/gravação de até 500MB/seg e 450MB/seg. Portanto, é 10 vezes mais rápido do
                que um disco rígido tradicional.
                Sendo composta por uma memória flash, é silenciosa e tem poucas chances de falha.

                Inquebrável
                Além de sua funcionalidade e suporte, a importância dos discos de armazenamento também reside na sua
                qualidade e resistência. Não se preocupe e aproveite a durabilidade deste produto devido à sua
                capacidade de absorver e resistir a fortes impactos.
            </p>
        </div>

        <footer>
            <div class="row">
                <div class="col-12 text-center rodape">
                    &copy; Todos os direitos reservados - 2022
                </div>
            </div>
        </footer>

    </div>
</body>

</html>