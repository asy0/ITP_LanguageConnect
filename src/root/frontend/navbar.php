<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="start.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i><b>LanguageConnect</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active pl-1">
                    <a class="nav-link" href="../frontend/start.php"><i class="fa fa-home fa-fw mr-1"></i>Startseite</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="../frontend/hilfeseite.php">FAQ</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="../frontend/impressum.php">İmpressum</a>
                </li>
                <?php
                session_start();
                if (isset($_SESSION['logged_in']) && $_SESSION['isTutor'] = true): ?>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="../backend/userlogged.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Meine Startseite</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../frontend/meine-kurse.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Meine Kurse</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../frontend/tutorprofil.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Mein Tutorprofil</a>
                    </li>

                    <li class="nav-item pl-1 ml-auto">
                        <button class="btn btn-outline-light btn-sm"><a class="nav-link" href="../backend/actions/logout.php" style="margin-right: 10px;" ><i class="fa fa-sign-out fa-fw mr-1"></i>Abmelden</a></button>
                    </li>


                <?php endif ?>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['isTutor'] != true ): ?>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="../backend/userlogged.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Meine Startseite</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="meine-kurse.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Meine Kurse</a>
                    </li>
                    <li class="nav-item pl-1">
                    <a class="nav-link" href="../frontend/myprofil.php"><i class="fa fa-sign-out fa-fw mr-1"></i>Mein Profil</a>
                    </li>
                    <li class="nav-item pl-1 ml-auto">
                        <button class="btn btn-outline-light btn-sm"><a class="nav-link" href="../backend/actions/logout.php" style="margin-right: 10px;" ><i class="fa fa-sign-out fa-fw mr-1"></i>Abmelden</a></button>
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
