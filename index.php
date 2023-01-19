<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Uppgift 1</title>
</head>
<body>
    <div class="box">
        <?php
        for($i = 1; $i <= 3; $i++){
            switch($i){
                case 1:
                    echo('<table class="table1 table table-striped table-hover">');
                    $number = 5;
                    break;
                case 2:
                    echo('<table class="table table-striped table-hover">');
                    $number = 10;
                    break;
                case 3:
                    echo('<table class="table table-striped table-hover">');
                    $number = 15;
                    break;
            }
            for($multiply = 1; $multiply <= 10; $multiply++){
                echo("<tr>
                        <td> $number X $multiply </td> <td> = </td> <td>" . $number*$multiply . "</td>
                    </tr>");
            }
            echo("</table>");
        }
        ?>
    </div>
</body>
</html>