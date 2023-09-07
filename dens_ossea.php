<?php

    session_start();

        $nome = $_SESSION['nome'];
        $sexo = $_SESSION['sexo'];
        $idade = $_SESSION['idade'];
        $peso = $_SESSION['peso'];
        $altura = $_SESSION['altura'];
        $imc = $_SESSION['imc'];
        $perc_gord_corporal = $_SESSION['perc_gord'];
        $quilos_gordura_corporal = $_SESSION['kg_gord'];
        $massa_magra = $_SESSION['massa_magra'];
        $dens_ossea = $_SESSION['dens_ossea'];
        $altura = $altura/100;

?>

<html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="stylesheet" href="style.css">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                    <title>Feira Tecnica</title>
                    <style>
                    .esquerda{
                        padding-right: 100px;
                    }
                    main h1 {
                        font-size:56px;
                    }
                    main h2 {
                        font-size:22px;
                    }
                    body {
                    background: linear-gradient(45deg, #1f0331, #b348fa);
                    }
                    form input[type="submit"] {
                    background: linear-gradient(215deg, #1f0331, #b348fa);
                    }

                    form input[type="submit"] :hover {
                        background: linear-gradient(to left, #1f0331, #b348fa);
                    }
                    div.container {
                        max-width: 1000px;
                        min-height: 200px;
                        padding: 40px;
                    }
                    main h2 ::before {
                        content: '';
                        position: absolute;
                        height: 4px;
                        width: 25px;
                        bottom: 3px;
                        left: 0;
                        border-radius: 8px;
                        background: white;
                    }
                </style>
                </head>
                <body>
                    <main>
                            <div class="titulo">
                            <h1>
                                Dados do paciente <br>
                            </h1>
                            </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="esquerda">
                                    <div class="container">
                                        <h2>
                                            <?php echo $nome; ?>, <?php echo $idade; ?> anos <hr><br>
                                            Sexo: <?php echo $sexo; ?> <hr><br>
                                            Peso total: <?php echo $peso; ?>Kg <hr><br>
                                            Altura:<?php echo $altura; ?> m <hr> <br>
                                            Sua densidade óssea possui o valor: <?php echo round($dens_ossea,2);?> <hr>
                                        <a href="menu.html">Voltar</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col">
                                <div class="container">
                                <h2>
                                Densidade Mineral Óssea (DMO) é a quantidade de Calcio (grau de mineralização)
                                de um determinado "pedaço" de osso. <br><br>
                                Menor que -2: alto risco para ósteoporose <hr>
                                Entre -2 e 1: risco mediano para ósteoporose <hr>
                                Maior que 1: risco baixo para ósteoporose <br>
                                </h2>
                                
                                </div>
                            </div>
                        </div>
                    </main>
                </body>
            </html>