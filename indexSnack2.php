<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            background-color: orange;
            padding: 50px;
            width: 1140px;
            margin: auto;
        }       
    </style>
</head>

<body>
    <div class="container">

            <?php 
                
                $name = $_GET['name'];
                $nameLength = strlen($name);

                $mail = $_GET['mail'];
                $hasAt = strpos($mail, '@');  // posizione del primo '@'             
                $hasDot = strripos($mail, '.'); //posizione dell'ultimo punto
                $atCounter = substr_count($mail,'@'); //quanti '@' ci sono
                
                
                $age = $_GET['age'];
                $isNum = is_numeric($age);
                // var_dump($nameLength);
                // var_dump($hasAt);
                // var_dump($hasDot);
                // var_dump($isNum);
                //var_dump($atCounter);
                //var_dump($hasDot);

              if($nameLength>3 && $hasAt>0 && ($hasAt+1)<strlen($mail) && $hasDot && $hasDot>$hasAt && $atCounter<2 && $isNum){
                  echo '<h1>ACCESSO RIUSCITO</h1>';
              } else {
                  echo '<h1>ACCESSO NEGATO</h1>';
              };

              //nega accesso se metto '@' come primo o ultimo carattere. 
              //nega accesso se l'ultimo '.' non è successivo all'@',
              //nega accesso se c'è più di un '@'.
              
            ?>

    </div>



    
</body>
</html>