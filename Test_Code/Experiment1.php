<?php

    $name1 = "Mattie";
    $name2 = "Laura";
    $bow = true;

    if($bow==true)
    {
        $string1 = <<<STR

        *$name1 and $name2 both bow and exit stage right*
        
        STR;
    }
    else
    {
        $string1 = <<<STR

        *$name1 and $name2 run around screaching with joy*
        
        STR;
    };

    $string = <<<STR

    Script: <br/> <br/>
    {$name1[0]}: This is so fancy! <br/>
    {$name2[0]}: I know, Right? <br/><br/>
    *$name1 walkes to stage left looking excited* <br/>
    $string1

    STR;
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
        <?php echo $string; ?>
    </p>
</body>

</html>