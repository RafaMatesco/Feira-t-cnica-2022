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
                        padding-right: 150px;
                        padding-left: 150px;
                    }
                    .alinharcentro{
                        padding-right: 300px;
                        padding-left: 540px;
                    }
                    main h1 {
                        font-size:56px;
                    }
                    main h2 {
                        font-size:21px;
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
                        min-width: 500px;
                        min-height: 200px;
                        max-height: 400px;
                        padding: 40px;
                    }
                    div.container1 {
                        background: white;
                        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
                        border-radius: 8px;
                        padding: 2px;
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
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script>
                    google.charts.load('current', {'packages':['corechart']});

                    function desenharPizza (){

                        var tabela = new google.visualization.DataTable();
                        tabela.addColumn('string','categorias');
                        tabela.addColumn('number','valores');
                        tabela.addRows([

                            ['Massa gorda',<?php echo round($quilos_gordura_corporal, 1)?>],
                            ['Massa magra',<?php echo round($massa_magra,1)?>]
                        ]);

                        var opcoes = {
                            'title':'Composição do peso',
                            'height': 300,
                            'width': 500
                        };

                        var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
                        grafico.draw(tabela, opcoes);
                        }

                        google.charts.setOnLoadCallback(desenharPizza);
                </script>
                </head>
                <body>
                    <main>
                    <div class="esquerda">
                    <div class="alinharcentro">
                            <div class="titulo">
                            <h1>
                                Dados do paciente <br>
                            </h1>
                            </div>
                        </div>
                        <br>
                            <div class="row">
                                <div class="col">
                                    
                                        <div class="container">
                                            <h2>
                                                <?php echo $nome; ?>, <?php echo $idade; ?> anos <hr><br>
                                                Sexo: <?php echo $sexo; ?> <hr><br>
                                                Peso total: <?php echo $peso; ?>Kg <hr><br>
                                                Altura:<?php echo $altura; ?> m <hr>
                                            </h2>
                                            <a href="menu.html">Voltar</a>
                                        </div>
                                    
                                </div>
                                <br>
                                <div class="col">
                                    <div class="container">
                                    <h2>
                                    Você tem <?php echo round($perc_gord_corporal,0);?>% de gordura corporal <br>
                                    <?php echo round($massa_magra,1);?> Kg de massa magra <br>
                                    <?php echo round($quilos_gordura_corporal,1);?> Kg de massa gorda <hr>
                                    Sua densidade óssea possui o valor: <?php echo round($dens_ossea,2);?> <hr>
                                    Seu IMC é <?php echo round($imc,2);?><br>
                                    </h2>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container1">
                                         <div id="graficoPizza"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </body>
            </html>