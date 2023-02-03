<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include 'common/head.php';
?>

<body class="grid-container">
    <?php

    include 'common/header.php';
    if (!isset($page) || empty($page)) {
        $page = 'home';
    }
        switch ($page) {
            case 'home':
                include 'content/accueil_content.php';
                break;
            case 'cv':
                include 'content/cv_content.php';
                break;
            case 'contact':
                include 'content/contact_content.php';
                break;
            case 'projets':
                include 'content/projects_content.php';
                break;
            case 'technos':
                include 'content/technos_content.php';
                break;
            default:
                header('Location: content/404.php');
                die();
        }
        include 'common/footer.php';
        
    ?>
</body>
<script src="js/main.js"></script>

</html>