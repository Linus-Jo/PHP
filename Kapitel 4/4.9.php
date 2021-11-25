<?php
declare (strict_types=1);
// Anger ett standardvärde
$artal=date("x");
$artal=filter_input(INPUT_POST, "number", FILTER_SANITIZE_STRING);

// Kontrollera om vi fått någon indata
if(isset($_GET['artal'])) {
    // Ta hand om indata om det är ett heltal
    $artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
    // bestämmer vad max och min datumen man kan lägga in är.
    if ($artal>2100 || $artal<1922) {
        $artal=date("x");
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vasalopp</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET">
            Ange år:<input type="number" value="<?= $artal; ?>" name="artal" max=2100 min=1922><br>
            <input type="submit" value="Skicka!">
        </form>
        <p>vasaloppet genomförs de närmaste 5 åren följande datum:<br>
        <?php
            for($i=0;$i<5;$i++) {
                echo $artal+$i . " den " . Vasaloppet($artal+$i) . "<br>";
            }
        ?>
        </p>
    </body>
</html>
<?php
// funktionen räknar vasaloppet 
function Vasaloppet(int $ar):string {
    // Hitta datum för vasaloppet
    $datum=strtotime("First Sunday of March $ar");
    // Returnera det funna datumet
    return date("d-m", $datum);
}