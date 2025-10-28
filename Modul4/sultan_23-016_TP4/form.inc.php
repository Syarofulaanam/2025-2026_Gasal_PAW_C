 <form method="post">
    <label for="surname">Surname :</label>
<input type="text" name="surname" id="surname"
value="<?php echo isset($_POST['surname']) ?
htmlspecialchars($_POST['surname']) : ''; ?>">
<input type="submit" value="Submit" name="submit">
</form>
