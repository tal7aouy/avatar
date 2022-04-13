<?php
require_once './../vendor/autoload.php';

use Tal7aouy\Avatar\Avatar;

$avatar = new Avatar('Mhammed Talhaouy', 'circle', 64);
$avatar2 = new Avatar('Lora  Josh', 'circle', 64);
$avatar3 = new Avatar('Brahim Alaoui', 'circle', 64);
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
    <style>
        div {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        h1 {
            font-size: 1.2rem;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div>
        <img src="<?php echo $avatar; ?>" alt="">
        <h1>Mhammed Talhaouy</h1>
    </div>
    <br />
    <div>
        <img src="<?php echo $avatar2; ?>" alt="">
        <h1>Lora Josh</h1>
    </div> <br />

    <div>
        <img src="<?php echo $avatar3; ?>" alt="">
        <h1>Brahim Alaoui</h1>
    </div>
</body>

</html>