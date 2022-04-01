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

        .imgProduto {
            text-align: center;
            min-height: 225px;
        }

        .tituloProduto {
            font-weight: bold;
            text-align: center;
            margin-bottom: 5px;
        }

        .valorProduto {
            margin-bottom: 5px;
            color: orange;
            font-weight: bold;
            text-align: center;
        }

        .botao {
            text-align: center;
            margin-bottom: 10px;
        }

        .border {
            box-shadow: 3px 3px #888888;
            padding: 5px;
        }

        .espacoProdutos {
            margin-bottom: 30px;
        }

        .img-servicos {
            min-height: 167px;
        }

        .rodape {
            background-color: #333;
            color: white;
            padding: 10px;
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
                        &raquo; PRODUTOS EM DESTAQUE
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/pc-gamer-kp500.jpg" class="img-fluid"
                                alt="Computador Lenovo" title="Computador Lenovo"></div>
                        <div class="tituloProduto fs-6">PC Gamer KP500</div>
                        <div class="valorProduto fs-6">R$ 2.799,00</div>
                        <div class="botao"><a href="detalhes-produto-pc.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/ps5.jpg" class="img-fluid" alt="PS5" title="PS5"></div>
                        <div class="tituloProduto fs-6">Console Playstation 5</div>
                        <div class="valorProduto fs-6">R$ 4.999,00</div>
                        <div class="botao"><a href="detalhes-produto-ps5.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/smartv-samsung-43.jpg" class="img-fluid"
                                alt='Smart TV 43 polegadas Samsung' title='Smart TV 43" Samsung'></div>
                        <div class="tituloProduto fs-6">Smart TV 43" Samsung</div>
                        <div class="valorProduto fs-6">R$ 3.499,00</div>
                        <div class="botao"><a href="detalhes-produto-tv.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/ssd-kingston-240gb.jpg" class="img-fluid"
                                alt='SSD Kingston 240 GB' title='SSD Kingston 240 GB'></div>
                        <div class="tituloProduto fs-6">SSD Kingston 240 GB</div>
                        <div class="valorProduto fs-6">R$ 429,90</div>
                        <div class="botao"><a href="detalhes-produto-ssd.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/kit-gamer-mouse-teclado-v100.jpg" class="img-fluid"
                                alt="Kit gamer mouse e teclado V100" title="Kit gamer mouse e teclado V100"></div>
                        <div class="tituloProduto fs-6">Kit gamer mouse e teclado V100</div>
                        <div class="valorProduto fs-6">R$ 399,00</div>
                        <div class="botao"><a href="detalhes-produto-kit.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/hd-externo-1TB-Seagate.jpg" class="img-fluid"
                                alt="HD externo 1TB Seagate" title="HD externo 1TB Seagate"></div>
                        <div class="tituloProduto fs-6">HD externo 1TB Seagate</div>
                        <div class="valorProduto fs-6">R$ 449,90</div>
                        <div class="botao"><a href="detalhes-produto-hd.php" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/headset-gamer-havit.jpg" class="img-fluid"
                                alt="Headset gamer Havit" title="Headset gamer Havit"></div>
                        <div class="tituloProduto fs-6">Headset gamer Havit</div>
                        <div class="valorProduto fs-6">R$ 199,00</div>
                        <div class="botao"><a href="detalhes-produto-headset.php" class="btn btn-primary">Ver
                                detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 espacoProdutos">
                    <div class="border border-primary rounded">
                        <div class="imgProduto"><img src="img/cadeira-gamer-husky.jpg" class="img-fluid"
                                alt="Cadeira gamer preta e vermelha Husky" title="Cadeira gamer preta e vermelha Husky">
                        </div>
                        <div class="tituloProduto fs-6">Cadeira gamer Husky</div>
                        <div class="valorProduto fs-6">R$ 599,90</div>
                        <div class="botao"><a href="detalhes-produto-cadeira.php" class="btn btn-primary">Ver
                                detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-12">
                    <div class="tituloPagina">
                        &raquo; NOSSOS SERVIÇOS
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 espacoProdutos text-center">
                    <img src="img/formatacao-computador-notebook.jpg" class="img-fluid img-servicos"
                        alt="Formatação de computadores e notebooks" title="Formatação de computadores e notebooks">
                </div>
                <div class="col-sm-12 col-md-4 espacoProdutos text-center">
                    <img src="img/desenvolvimento-de-sistemas.webp" class="img-fluid img-servicos"
                        alt="Desenvolvimento de sistemas" title="Desenvolvimento de sistemas">
                </div>
                <div class="col-sm-12 col-md-4 espacoProdutos text-center">
                    <img src="img/curso-manutencao-computadores.jpg" class="img-fluid img-servicos"
                        alt="Curso de manutenção de computadores" title="Curso de manutenção de computadores">
                </div>
            </div>
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