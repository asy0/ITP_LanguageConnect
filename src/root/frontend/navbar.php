<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="start.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i><b>LanguageConnect</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active pl-1">
                    <a class="nav-link" href="start.php"><i class="fa fa-home fa-fw mr-1"></i>Startseite</a>
                </li>
                <li class="nav-item  pl-1">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="hilfeseite.php">FAQ</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="impressum.php">İmpressum</a>
                </li>
                <?php
                session_start();
                if (isset($_SESSION['logged_in'])): ?>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../../root/backend/actions/logout.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Abmelden</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../../root/frontend/Meine-Kurse.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Meine Kurse</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../../root/frontend/myprofil.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Mein Profil</a>
                    </li>
                    <?php endif ?>
                    <?php
                if (!isset($_SESSION['logged_in'])): ?>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="./login-form.php"><i class="fa fa-user fa-fw mr-1"></i>Anmelden</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="./registrierung-form.php"><i class="fa fa-sign-in-plus fa-fw mr-1"></i>Registrieren</a>
                    </li>
                    <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
