<?php
session_start();
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https":"http")."://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]));

require_once("./controllers/Visiteur/Visiteur.controller.php");
require_once("./controllers/Toolbox.class.php");
require_once("./controllers/Securite.class.php");
require_once("./controllers/Utilisateur/Utilisateur.controller.php");
require_once("./controllers/Administration/Administrateur.controller.php");
$visiteurController = new VisiteurController();
$utilisateurController = new UtilisateurController();
$administrateurController = new AdministrateurController();

try{
    if(empty($_GET['page'])){
        $page="accueil";
    } else{
        $url=explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page=$url[0];
    }

    switch($page){
        case "accueil": $visiteurController->accueil();
        break;
        case "Rock": $visiteurController->Rock();
        break;
        case "A_Beautiful_Lie": $visiteurController->A_Beautiful_Lie();
        break;
        case "Nevermind": $visiteurController->Nevermind();
        break;
        case "The_End_Is_Where_We_Begin": $visiteurController->The_End_Is_Where_We_Begin();
        break;
        case "The_Razor_Edge": $visiteurController->The_Razor_Edge();
        break;
        case "Rap": $visiteurController->Rap();
        break;
        case "Good_Kid_MAAD_City": $visiteurController->Good_Kid_MAAD_City();
        break;
        case "Ipseite": $visiteurController->Ipseite();
        break;
        case "Mental": $visiteurController->Mental();
        break;
        case "Xeu": $visiteurController->Xeu();
        break;
        case "Pop": $visiteurController->Pop();
        break;
        case "After_Hours": $visiteurController->After_Hours();
        break;
        case "Doo_Wops_AND_Hooligans": $visiteurController->Doo_Wops_AND_Hooligans();
        break;
        case "Red_Pill_Blues": $visiteurController->Red_Pill_Blues();
        break;
        case "Metal": $visiteurController->Metal();
        break;
        case "Avatar_Country": $visiteurController->Avatar_Country();
        break;
        case "City_of_Evil": $visiteurController->City_of_Evil();
        break;
        case "Cooking_with_Pagans": $visiteurController->Cooking_with_Pagans();
        break;
        case "Symphony_of_Enchanted_Lands": $visiteurController->Symphony_of_Enchanted_Lands();
        break;
        case "Reggae": $visiteurController->Reggae();
        break;
        case "96_degrees_in_the_shade": $visiteurController->degrees_in_the_shade();
        break;
        case "Dialogue_de_sourds": $visiteurController->Dialogue_de_sourds();
        break;
        case "Right_time": $visiteurController->Right_time();
        break;
        case "Trenchtown_Days_Birth_of_a_Legend": $visiteurController->Trenchtown_Days_Birth_of_a_Legend();
        break;
        case "Classique": $visiteurController->Classique();
        break;
        case "Les_neufs_symphonies": $visiteurController->Les_neufs_symphonies();
        break;
        case "Clavier_bien_tempere": $visiteurController->Clavier_bien_tempere();
        break;
        case "Les_quatres_saisons": $visiteurController->Les_quatres_saisons();
        break;
        case "Oeuvres_sacrees": $visiteurController->Oeuvres_sacrees();
        break;
        case "login": $visiteurController->login();
        break;
        case "validation_login":
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                $login = Securite::secureHTML($_POST['login']);
                $password = Securite::secureHTML($_POST['password']);
                $utilisateurController->validation_login($login,$password);
            } else {
                Toolbox::ajouterMessageAlerte("login ou mot de passe non renseigné", Toolbox::COULEUR_ROUGE);
                header('location: '.URL."login");
            }
        break;
        case "creerCompte" : $visiteurController->creerCompte();
        break;
        case "validation_creerCompte";
            if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['mail'])){
                $login = Securite::secureHTML($_POST['login']);
                $password = Securite::secureHTML($_POST['password']);
                $mail = Securite::secureHTML($_POST['mail']);
                $utilisateurController->validation_creerCompte($login,$password,$mail);
            } else {
                Toolbox::ajouterMessageAlerte("Les 3 informations sont obligatoires !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."creerCompte");
            }
        break;
        case "validationMail" : $utilisateurController->validation_mailCompte($url[1],$url[2]);
        break;
        case "compte" :
            if(!Securite::estConnecte()){
                Toolbox::ajouterMessageAlerte("Veuillez vous connecter !",Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."login");
            } elseif(!Securite::checkCookieConnexion()){
                Toolbox::ajouterMessageAlerte("Veuillez vous reconnecter !", Toolbox::COULEUR_ROUGE);
                setcookie(Securite::COOKIE_NAME,"",time() - 3600);
                unset($_SESSION["profil"]);
                header("Location: ".URL."login");
            } else {
                Securite::genererCookieConnexion();
                switch($url[1]){
                    case "profil": $UtilisateurController->profil();
                    break;
                    case "deconnexion" : $utilisateurController->deconnexion();
                    break;
                    case "validation_modificationMail" : $utilisateurController->validation_modificationMail(Securite::secureHTML($_POST['mail']));
                    break;
                    case "modificationPassword" : $utilisateurController->modificationPassword();
                    break;
                    default: throw new Exception("La page n'existe pas");
                }
            }
        break;
        case "validation_modificationPassword" :
            if(!empty($_POST['ancienPassword']) && !empty($_POST['nouveauPassword']) && !empty($_POST['confirmNouveauPassword'])){
                $ancienPassword = Securite::secureHTML($_POST['ancienPassword']);
                $nouveauPassword = Securite::secureHTML($_POST['nouveauPassword']);
                $confirmationNouveauPassword = Securite::secureHTML($_POST['confirmationNouveauPassword']);
                $utilisateurController->validation_modificationPassword($ancienPassword,$nouveauPassword,$confirmationNouveauPassword);
            } else {
                Toolbox::ajouterMessageAlerte("Vous n'avez pas renseigné toutes les informations", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."compte/modificationPassword");
            }
        break;
        case "suppressionCompte" : $utilisateurController->suppressionCompte();
        break;
        case "validation_modificationImage" :
            if($_FILES['image']['size'] > 0) {
                $utilisateurController->validation_modificationImage($_FILES['image']);
            } else {
                Toolbox::ajouterMessageAlerte("Vous n'avez pas modifié l'image", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."compte/profil");
            }
        break;
        case "administration" :
            if(!Securite::estConnecte()) {
                Toolbox::ajouterMessageAlerte("Veuillez vous connecter !",Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."accueil");
            } else {
                switch($url[1]){
                    case "droits" : $administrateurController->droits();
                    break;
                    default: throw new Exception("La page n'existe pas");
                }
            }
        break;
        case "validation_modificationRole" : $administrateurController->validation_modificationRole($_POST['login'],$_POST['role']);
        break;
        default: throw new Exception("La page n'existe pas");
    }
} catch (Exception $e){
    $visiteurController->pageErreur($e->getMessage());
}
require_once("./views/common/template.php");

//index.php?page=acceuil
//index.php?page=page1
//index.php?page=contact
?>