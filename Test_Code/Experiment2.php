<?php
    function yayOrNay()
    {
        $rand = random_int(1, 8);
        
        if ($rand == 1)
        {
            $string = "Yes";
        }
        else if ($rand == 2)
        {
            $string = "No";
        }
        else if ($rand == 3)
        {
            $string = "Maybe";
        }
        else if ($rand == 4)
        {
            $string = "Perhaps";
        }
        else if ($rand == 5)
        {
            $string = "Of Course";
        }
        else if ($rand == 6)
        {
            $string = "Absolutely Not";
        }
        else if ($rand == 7)
        {
            $string = "In Your Dreams";
        }
        else if ($rand == 8)
        {
            $string = "Why Do You Ask?";
        }

        $qAndA = <<<STR

        Am I amazing? <br/><br/>
        $string

        STR;
        echo $qAndA;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width" , intel-scale=1.0>
    <title>Script</title>
</head>

<body>
    <p>
        <?php echo yayOrNay(); ?>
    </p>
</body>

</html>