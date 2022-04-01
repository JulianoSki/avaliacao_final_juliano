<!DOCTYPE html>
<html lang="pt">

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
                <div class="col-sm-12 col-md-3 text-center"><img src="img/smartv-samsung-43.jpg" class="img-fluid"
                        alt="Smart TV 43 Samsung" title="Smart TV 43 Samsung"></div>
                <div class="col-sm-12 col-md-9">
                    <div class="valorProduto fs-4">R$ 3.499,00</div>
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
                Smart TV Crystal 4K 43” Samsung UN43AU7700GXZD - Wi-Fi Bluetooth HDR 3 HDMI 1 USB. Se você procura uma
                TV para assistir filmes, séries, novelas e até mesmo jogar seus games favoritos com a melhor qualidade
                possível, a Smart TV UN43AU7700GXZD da Samsung é o modelo ideal para a sua casa! Ela possui tela de 43"
                Crystal 4K com painel VA, oferecendo cores vivas e imagens impressionantes de qualquer ângulo. As bordas
                super finas aumentam ainda mais o campo de visão e destacam apenas as imagens que você quer ver. Seu
                design elegante contribui para deixar o ambiente mais organizado, pois conta com canaletas exclusivas
                para organizar e esconder os fios. O sistema operacional Tizen traz mais praticidade e permite comandar
                a TV por voz através de assistentes integrados como Bixby, Alexa e Google Assistant. Um dos grandes
                destaques deste modelo é o controle remoto único desenvolvido pela Samsung. Com ele você pode controlar
                todos os aparelhos compatíveis conectados a TV e acessar aplicativos com um único botão de atalho. Além
                disso, esta smart TV oferece outras vantagens como entradas HDMI e USB, conectividades wi-fi e bluetooth
                e embalagem reutilizável.
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