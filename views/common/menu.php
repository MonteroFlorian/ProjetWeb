<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= URL; ?>accueil">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Genres
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= URL; ?>pClassique">Classique</a></li>
                        <li><a class="dropdown-item" href="<?= URL; ?>pMetal">Métal</a></li>
                        <li><a class="dropdown-item" href="<?= URL; ?>pPop">Pop</a></li>
                        <li><a class="dropdown-item" href="<?= URL; ?>pRap">Rap</a></li>
                        <li><a class="dropdown-item" href="<?= URL; ?>pReggae">Reggae</a></li>
                        <li><a class="dropdown-item" href="<?= URL; ?>pRock">Rock</a></li>
                    </ul>
                </li>
                <?php if(empty($_SESSION['profil'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL; ?>login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL; ?>creerCompte">Créer compte</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL; ?>login">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL; ?>compte/deconnexion">login</a>
                    </li>
                <?php endif; ?>
                <?php if(Securite::estConnecte() && Securite::estAdministrateur()) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                            Administration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= URL; ?>administration/droits">Gérer les droits</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>