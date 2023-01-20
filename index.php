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
    <div class="InputForm">
        <form name="form" action="" method="post">
            <input type="number" id="numberInput" name="numberInput">
            
        </form>
    </div>
    <div class="box">
        <?php
        for($i = 1; $i <= 3; $i++){
            switch($i){
                case 1:
                    allTable(5);
                    break;
                case 2:
                    allTable(10);
                    break;
                case 3:
                    allTable(15);
                    break;
            }
        }
        ?>
    </div>
    <div class="box2">
    <?php
    if($_POST['numberInput']){
        allTable($_POST['numberInput']);
    }
    function allTable($numberInput){
        echo('<table class="table table-striped table-hover">');
        for($multiply = 1; $multiply <= 10; $multiply++){
            echo("<tr>
                    <td> $numberInput X $multiply </td> <td> = </td> <td>" . $numberInput*$multiply . "</td>
                </tr>");
        }
        echo("</table>");
    }
    ?>
    </div>
</body>
</html>