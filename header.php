<nav>
<a href="index.php">Arena</a>
    <ul>
        <li><a href="profile.php">Profil</a></li>
        <?php if(isset($_SESSION['LOGGED_USER'])): ?>
        <li><a href="diary.php">Agenda</a> </li>
        <li><a href="booking.php">Réservations</a></li>
        <li><a href="logout.php">Déconnexion</a> </li>
        <?php endif; ?>
        <?php if($_SESSION['LOGGED_USER']['type'] === 2): ?>
            <li><a href="admin.php">Admin</a> </li>
        <?php endif; ?>
    </ul>
</nav>