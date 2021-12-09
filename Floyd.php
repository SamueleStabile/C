<?php
    function printFloydTriangle($height) {
        $n = 1;
        
        for ($i = 1; $i <= $height; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo $n . " ";
                $n++;
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francesco Peluso - Triangolo di Floyd</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap');

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

            font-family: 'Readex Pro', sans-serif;
            text-shadow: 0 0 4px black;
            text-align: center;
            font-size: 24px;
            color: white;

            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	        background-size: 400% 400%;
	        animation: gradient 15s ease infinite;
        }

        h1 {
            margin-bottom: 0;
        }
        h3 {
            margin-top: 0;
        }
        hr {
            width: 250px;
            color: white;
            box-shadow: 0 0 4px black;
            margin: 12px;
            margin-bottom: 24px;
        }

        .triangoli {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 200px;
            border-left: 2px solid white;
        }
        .box:first-of-type {
            border-left: 0;
        }

        /* Animazione color gradient in CSS */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <h1>Triangolo di Floyd</h1>
    <h3>Francesco Peluso - 5°A A.S.2021/22</h3>
    <hr>
    <div class="triangoli">
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<div class=\"box\">";
                echo "<h4> Altezza: $i</h4>";
                    printFloydTriangle($i);
                echo "</div>";
            }        
        ?>
    </div>
</body>
</html>