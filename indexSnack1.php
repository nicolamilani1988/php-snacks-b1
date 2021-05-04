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
            padding: 0 20px;
            width: 1140px;
            margin: auto;
        }
        .container *{
            padding: 10px 0;
        }
        div.instructions{
            color: blue;
        }
        
        .bg-green{
            background-color: green;
        }
        .bg-red{
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>NBA 2021 Playoff Game 1 results</h1>
            <?php 
                $matches = [
                    [
                        'home' => 'Philadelphia 76ers',
                        'pointsHome' => '120',
                        'away' => 'Charlotte Hornets',
                        'pointsAway' => '97'
                    ],
                    [
                        'home' => 'Brooklyn Nets',
                        'pointsHome' => '130',
                        'away' => 'Boston Celtics',
                        'pointsAway' => '111'
                    ],
                    [
                        'home' => 'Milwaukee Bucks',
                        'pointsHome' => '112',
                        'away' => 'Miami Heat',
                        'pointsAway' => '105'
                    ],
                    [
                        'home' => 'New York Knicks',
                        'pointsHome' => '95',
                        'away' => 'Atlanta Hawks',
                        'pointsAway' => '97'
                    ],
                    [
                        'home' => 'Utah Jazz',
                        'pointsHome' => '100',
                        'away' => 'Golden State Warriors',
                        'pointsAway' => '119'
                    ],
                    [
                        'home' => 'Phoenix Suns',
                        'pointsHome' => '120',
                        'away' => 'Portland Trail Blazers',
                        'pointsAway' => '115'
                    ],
                    [
                        'home' => 'Denver Nuggets',
                        'pointsHome' => '112',
                        'away' => 'Dallas Mavericks',
                        'pointsAway' => '128'
                    ],
                    [
                        'home' => 'Los Angeles Clippers',
                        'pointsHome' => '105',
                        'away' => 'Los Angeles Lakers',
                        'pointsAway' => '98'
                    ],
                ]; 

                for($i = 0;$i < count($matches); $i++){
                    $match = $matches[$i];
                    echo '<div>' . $matches[$i]['home'] . ' - ' . $matches[$i]['away'] . ' | ' . $matches[$i]['pointsHome'] . ' - ' . $matches[$i]['pointsAway'] . '</div>';
                };
              
            ?>

    </div>



    
</body>
</html>