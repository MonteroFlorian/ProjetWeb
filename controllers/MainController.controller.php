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

//Classique

public function Classique(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Classique/Classique.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Clavier_bien_tempere(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Classique/Clavier_bien_tempere.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Oeuvres_sacrées(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Classique/Oeuvres_sacrées.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Les_neufs_symphonies(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Classique/Les_neufs_symphonies.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Les_quatres_saisons(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Classique/Les_quatres_saisons.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}


//Metal

public function Metal(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Metal/Metal.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Avatar_Country(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Metal/Avatar_Country.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function City_of_Evil(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Metal/City_of_Evil.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Cooking_with_Pagans(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Metal/Cooking_with_Pagans.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Symphony_of_Enchanted_Lands(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Metal/Symphony_of_Enchanted_Lands.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}


//Pop

public function Pop(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Pop/Pop.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function After_Hours(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Pop/After_Hours.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Doo_Wops_Hooligans(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Pop/Doo-Wops_&_Hooligans.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Red_Pill_Blues(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Pop/Red_Pill_Blues.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}


//Rap

public function Rap(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rap/Rap.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Good_Kid_MAAD_City(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rap/Good_Kid_MAAD_City.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Mental(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rap/Mental.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Xeu(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rap/Xeu.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Ipséité(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rap/Ipséité.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}


//Reggae

public function Reggae(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Reggae/Reggae.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function °_in_the_shade(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Reggae/96°_in_the_shade.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Dialogue_de_sourds(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Reggae/Dialogue_de_sourds.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Right_time(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Reggae/Right_time.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Trenchtown_Days_Birth_of_a_Legend(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Reggae/Trenchtown_Days_Birth_of_a_Legend.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}


//Rock

public function Rock(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rock/Rock.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function A_Beautiful_Lie(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rock/A_Beautiful_Lie.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function Nevermind(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rock/Nevermind.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function The_End_Is_Where_We_Begin(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rock/The_End_Is_Where_We_Begin.view.php",
        "template" => "views/common/template.php"
    ];
    $this->genererPage($data_page);
}

public function The_Razor_Edge(){
    $data_page = [
        "page_description" => "Description de la page d'accueil",
        "page_title" => "Titre de la page d'accueil",
        "view" => "views/Visiteur/Rock/The_Razor_Edge.view.php",
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