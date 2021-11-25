<p>Haha! Hej <?= $namn; ?></p>
<p>här är dina tärningars värde :D</p>
<form method="POST">
    Du har slagit <?=$antalSlag; ?> gånger <br>
   <input type="hidden" name="antalSlag" value="<?= $antalSlag; ?>">
    Markera tärningarna som du vill slå om XD<br>
    <?php
        foreach($tarning as $key=>$value) {
            echo "<div class='tarningarna'><img src='Bilder/Dice_$value.png' alt='Tärning_$value'height='22'><br><input type='checkbox' name='tarning_$key'></div>";
            echo "<input type='hidden' name='t_$key' value='$value'>";
            
        }
    ?>
    <br>
    <input type="submit" name="submit" value="Nästa slag">
</form>