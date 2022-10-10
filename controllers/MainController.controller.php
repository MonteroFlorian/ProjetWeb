<?php
require_once("./models/MainManager.model.php");
require_once("./controllers/Toolbox.class.php");

abstract class MainController{
   

    public function __construct(){
        $this->mainManager = new MainManager();
    }
    protected function genererPage($data){
        extract($data);
        ob_start();
        require_once($view);
        $page_content=ob_get_clean();
        require_once($template);
    }
    public function accueil(){
        $data_page=[
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => "accueil.css",
            "view" => "views/acceuil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function Pop(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Pop.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    
    public function Rap(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Rap.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    
    public function Reggae(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Reggae.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function Rock(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Rock.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function Metal(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Metal.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function Classique(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/Classique.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function login(){
    $data_page=[
        "page_description" => "Page de connexion",
            "page_title" => "Page de connexion",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
    }
    public function pageErreur($msg){
        $data_page=[
            "page_description" => "Page permettant de gérer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "views/erreur.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    public function profil(){
        $datas = $this->utilisateurManager->getUserInformation($_SESSION['profil']['login']);
        $_SESSION['profil']['role'] = $datas['role'];

        $data_page = [
            "page_description" => "Page de profil",
            "page-title" => "Page de profil",
            "utilisateur" => $datas,
            "view" => "views/Utilisateur/profil.view.php",
            "template" => "views/common/template"
        ];
        $this->genererPage($data_page);
    }
}
?>