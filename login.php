<h1>Login</h1>
<form action="submit_login.php" method="post">
    <label>e-mail
        <input type="email" name="email">
    </label><br>
    <label>mot de passe
        <input type="password" name="password">
    </label><br>
    <input type="hidden" name="isAdmin" value="False" />
    <input type="hidden" name="isTable" value="False" />
    <button type="submit">Envoyer</button>
</form>