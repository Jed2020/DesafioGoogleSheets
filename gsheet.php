<?php

$sheetID = "124ohoKsps3RQ_Of6P7o_HZ2t6Ky9iFC_7e7tRbAcaBg>";
$key = "<AIzaSyA6Dq-U1H4kkbAmtd8zkvH8Y1mSqW27l50>";
$sheetName = "<engenharia_de_software>";
$range = " ";
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Google Planilhas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Engenharia de Software</h1><hr>
    <h2>Total de aulas no semestre: 60</h2><hr>
    <div class="col-8 m-auto text-center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">Faltas</th>
                    <th scope="col">P1</th>
                    <th scope="col">P2</th>
                    <th scope="col">P3</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Nota para Aprovação Final</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                      // Novo link adaptado para versão V4 da API do google
                        $url = "https://sheets.googleapis.com/v4/spreadsheets/124ohoKsps3RQ_Of6P7o_HZ2t6Ky9iFC_7e7tRbAcaBg/values/engenharia_de_software!A4:H27?majorDimension=ROWS&key=AIzaSyA6Dq-U1H4kkbAmtd8zkvH8Y1mSqW27l50";
                        $file = file_get_contents($url);
                        $datas = json_decode($file);
                        $data = $datas->{'values'};                               
                    ?>
                    <?php
            foreach ($data as $datas) {
                    ?>
            <tr>
                    <th scope="row"><?php echo $datas[0]; ?></th>
                    <td><?php echo $datas[1]; ?></td>
                    <td><?php echo $datas[2]; ?></td>
                    <td><?php echo $datas[3]; ?></td>
                    <td><?php echo $datas[4]; ?></td>
                    <td><?php echo $datas[5]; ?></td>
            </tr>
            ?>
            <?php
            
            }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>