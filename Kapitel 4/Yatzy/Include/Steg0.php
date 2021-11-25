<p>Information<p>
    <form method="POST">
        Vad vill du kalla din<br>
        <input type="text" name="namn" required minlength="2" maxlength="15" value="<?= $namn; ?>">
        <input type="submit" name="submit" value="Börja spela">
    </form>