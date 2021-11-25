<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Black Jack</title>
    <h1>Black Jack</h1>
    <input type="submit" value="Skicka">
        <link href="CSS/Black jack css.css" rel="stylesheet" type="text/css"/>
        <p>hej</p>
</head>
    <body>
        <?php
        //gör en kortleks array som har alla kort i sig.
        $kortLek = ['sA', 's2', 's3', 's4', 's5', 's6', 's7', 's8', 's9', 's10', 'sKn', 'sD', 'sK',
            'hA', 'h2', 'h3', 'h4', 'h5', 'h6', 'h7', 'h8', 'h9', 'h10', 'hKn', 'hD', 'hK',
            'rA', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'rKn', 'rD', 'rK',
            'kA', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'kKn', 'kD', 'kK',];
       //Här så blandar jag kortleken i en shuffle och väljer ut de tre första korten i den blandade kortleken.
        shuffle($kortLek);
        for ($i = 0; $i < 3; $i++) {
            $hand[] = array_shift($kortLek);
        }
        foreach ($hand as $kort) {
            echo"<img src='Bilder/$kort.png' alt='$kort' height='69'> ";
        }
        
        $dealer
        ?>
    </body>
</html>
