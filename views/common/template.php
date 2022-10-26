<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page permettant de gérer les erreurs">
        <title>Les Champs de Vinyles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <link href="<?= URL ?>public/CSS/main.css" rel="stylesheet" />
        <script type="text/javascript" src="public/JavaScript/music.js"></script>
        <?php if(!empty($page_css)) : ?>
            <link href="<?php URL ?>public/CSS/<? $page_css ?>" rel="stylesheet"/>
        <?php endif; ?>
        
        <?php require_once("./views/common/header.php"); ?>
        <div class="container">
            <?php if(!empty($_SESSION['alert'])) {
                foreach($_SESSION['alert'] as $alert){
                    echo "<div class='alert ".$alert['type']."' role='alert'>".$alert['message']."</div>";
                }
            }
            unset($_SESSION['alert']);
        ?>
        </div>
        </section>

        <section class="container-fluid" style = "margin:0%; padding:0%;" >
            <?= $page_content; ?>
        </section>

        <?php require_once("./views/common/footer.php"); ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
