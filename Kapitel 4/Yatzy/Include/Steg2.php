<p> Du har tagit alla slagen XDD LOLZ. <br>
    <?php
        foreach($tarning as $key=>$value) {
            echo "<div class='tarningarna'><img src='Bilder/Dice_$value.png' alt='Tärning_$value' height='22'></div><br>";
        }
    ?>
    <br>
       Du fick en <?= $resultat['resultat']; ?> med värdet <?= $resultat['varde']; ?>
</p>
<form method="POST">
    <input type="submit" name="submit" value="spela igen">
    <input type="submit" name="submit" value="Göra något riktigt tråkigt">
</form>