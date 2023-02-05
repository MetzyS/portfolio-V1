<?php

if ($lang == 'fr') {
    // Header
    $h_home = 'Acceuil';
    $h_projects = 'Projets';
    $h_technos = 'Technos';
    $h_technosAll = 'Toutes les veilles';
    $h_CV = 'CV';
    $h_flag1 = 'flag fr-flag';
    $h_flag2 = 'flag en-flag';
    $langLink_1 = 'pref/lang-fr.php?page=' . $page;
    $langLink_2 = 'pref/lang-en.php?page=' . $page;
    $h_langString_1 = 'FR';
    $h_langString_2 = 'EN';

    // Code Game
    $codeGame_title = "Devine le langage de programmation utilisé ci-dessous :";

    // Footer
    $f_copyrights = 'Copyright © 2023 MetzyS tous droits réservés.';

    // Home
    $m_quote = 'rien n&#39;est plus permanent qu&#39;une solution temporaire';
    $m_author = 'Probablement un Web Dev..';
    $m_aboutTitle = 'qui suis-je ?';
    $m_aboutText = 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem en français';
    $m_skillsTitle = 'competences';
    $m_skillsDesignTitle = 'maquetter';
    $m_skillsDesignDetail = 'interface statique & dynamique';
    $m_skillsCmsTitle = 'cms';
    $m_skillsFrameWorksTitle = 'frameworks';
    $m_skillsDatabaseTitle = 'BDD';
    $m_PDO = 'Acces aux données';
    $m_linksTitle = 'Liens';

    // Projects
    $p_myProjects = 'mes projets';
    $p_webDev = 'Developpement Web:';
    $p_firstProjectTitle = 'Pelote et Rebelote';
    $p_firstProjectDetails = 'Site web Statique (responsive)';
    $p_firstProjectTech = 'Langages utilisés: HTML, CSS';
    $p_secondProjectTitle = 'Walkman Media Player';
    $p_secondProjectDetails = 'Application web Dynamique (JS)';
    $p_secondProjectTech = 'Langages utilisés: HTML, CSS, JS';
    $p_thirdProjectTitle = 'GRETA Badminton';
    $p_thirdProjectDetails = 'Dynamic Web Application (PHP)';
    $p_thirdProjectTech = 'Langages utilisés: HTML, CSS, JS, PHP';
    $p_fourthProjectTitle = 'Blog de Matt';
    $p_fourthProjectDetails = 'Blog CMS';
    $p_fourthProjectTech = 'Langages utilisés: CSS, WordPress';

    // Graphism
    $g_graphismTitle = 'Graphisme/Design:';

    // Technos
    $t_gitp1 = 'Git est un système de contrôle de version distribué pour le suivi des modifications dans les fichiers de code. Il permet aux développeurs de garder une trace de chaque modification et de collaborer sur des projets de manière efficace.
                Git est largement utilisé en raison de ses nombreuses fonctionnalités, telles que la gestion des branches, les révisions rapides et faciles, la capacité à travailler en ligne ou hors ligne, la sécurité de vos données grâce à un stockage réparti sur plusieurs ordinateurs, etc.';

    $t_gitp2 = "Il est open-source et peut être utilisé gratuitement. De plus, il est compatible avec de nombreux systèmes d'exploitation et a une communauté active de contributeurs, ce qui signifie que les bugs sont rapidement corrigés et que les nouvelles fonctionnalités sont ajoutées régulièrement.";
    $t_gitp3 = 'En résumé, Git est un outil incontournable pour les développeurs, car il offre une grande flexibilité et une collaboration en temps réel, ce qui accélère considérablement le processus de développement.';
    $t_gitp4 = 'Voici un florilège des commandes les plus utilisées:';
    $t_cloneCom = '// Clone un repository vers votre machine locale.';
    $t_example = '// Exemple';
    $t_file = 'fichier';
    $t_addCom = "// Ajoute un fichier à l'espace de staging, préparant le fichier pour être commit.";
    $t_gitBranch = 'branche';
    $t_commitCom = '// Commit les changements avec un message qui servira a décrire les modifications.';
    $t_commitArg = '-m "Correction du bug d&#39;affichage X"';
    $t_pushCom = '// Envoie les modifications commises au repository.';
    $t_pullCom = '// Récupère les dernières modifications du repository.';
    //// bootstrap
    $t_boot1 = "Bootstrap est un framework CSS open-source utilisé pour le développement d'applications web. Il est très populaire car il fournit une série d'outils pré-conçus pour une mise en forme rapide et cohérente de sites web, économisant ainsi du temps et de l'effort de codage.";
    $t_boot2 = "La fonctionnalité la plus intéressante offerte par Bootstrap est son système de grid.";
    $t_boot3 = "En effet, Bootstrap fournit un grid flexible pour organiser le contenu en colonnes et en lignes. Pour l'implémenter, vous pouvez utiliser les classes CSS telles que <span class=" . 'color-bootstrap' . ">'container'</span>, <span class=" . 'color-bootstrap' . ">'row'</span> et <span class=" . 'color-bootstrap' . ">'col'</span>.";
};








if ($lang == 'en') {
    // Header
    $h_home = 'Home';
    $h_projects = 'Projects';
    $h_technos = 'Technos';
    $h_technosAll = 'All Researches';
    $h_CV = 'Resume';
    $h_flag1 = 'flag en-flag';
    $h_flag2 = 'flag fr-flag';
    $langLink_1 = 'pref/lang-en.php?page=' . $page;
    $langLink_2 = 'pref/lang-fr.php?page=' . $page;
    $h_langString_1 = 'EN';
    $h_langString_2 = 'FR';

    // Code Game
    $codeGame_title = "Guess the coding language :";

    // Footer
    $f_copyrights = 'Copyright © 2023 MetzyS all rights reserved.';

    // Home
    $m_quote = 'nothing is more permanent than a temporary solution';
    $m_author = 'Some Web Dev.. probably';
    $m_aboutTitle = 'about me';
    $m_aboutText = 'Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem in english';
    $m_skillsTitle = 'skills';
    $m_skillsDesignTitle = 'design';
    $m_skillsDesignDetail = 'static & dynamic';
    $m_skillsCmsTitle = 'cms';
    $m_skillsFrameWorksTitle = 'frameworks';
    $m_skillsDatabaseTitle = 'Database';
    $m_PDO = 'PDO';
    $m_linksTitle = 'Links';

    // Projects
    $p_myProjects = 'my projects';
    $p_webDev = 'Web Dev:';
    $p_firstProjectTitle = 'Pelote et Rebelote';
    $p_firstProjectDetails = 'Static Website (responsive)';
    $p_firstProjectTech = 'Languages used: HTML, CSS';
    $p_secondProjectTitle = 'Walkman Media Player';
    $p_secondProjectDetails = 'Dynamic Web Application (JS)';
    $p_secondProjectTech = 'Languages used: HTML, CSS, JS';
    $p_thirdProjectTitle = 'GRETA Badminton';
    $p_thirdProjectDetails = 'Dynamic Web Application (PHP)';
    $p_thirdProjectTech = 'Languages used: HTML, CSS, JS, PHP';
    $p_fourthProjectTitle = "Matt's Blog";
    $p_fourthProjectDetails = 'CMS Blog';
    $p_fourthProjectTech = 'Languages used: CSS, WordPress';

    // Graphism
    $g_graphismTitle = 'Graphism/Design:';

    // Technos
    //// git
    $t_gitp1 = 'Git is a distributed version control system for tracking changes in code files. It allows developers to keep track of each modification and collaborate on projects efficiently. Git is widely used due to its many features, such as branch management, fast and easy revisions, the ability to work online or offline, the security of your data through storage distributed across multiple computers, etc.';
    $t_gitp2 = 'It is open-source and can be used for free. Additionally, it is compatible with many operating systems and has an active community of contributors, meaning that bugs are quickly fixed and new features are regularly added.';
    $t_gitp3 = "In summary, Git is an essential tool for developers as it offers great flexibility and real-time collaboration, greatly accelerating the development process.";
    $t_gitp4 = "Here is a selection of the most commonly used commands:";
    $t_cloneCom = '// Clone a repository to your local machine.';
    $t_example = '// Example';
    $t_file = 'file';
    $t_addCom = "// Adds a file to the staging area, preparing the file to be committed.";
    $t_gitBranch = 'branch';
    $t_commitCom = '// Commit the changes with a message that describes the modifications.';
    $t_commitArg = '-m "Fixed display bug X';
    $t_pushCom = "// Sends the committed changes to the repository.";
    $t_pullCom = "// Retrieves the latest changes from the repository.";
    //// bootstrap
    $t_boot1 = "Bootstrap is an open-source CSS framework used for web development. It's very popular because it provides a set of pre-designed tools for quick and consistent web formatting, saving time and coding effort.";
    $t_boot2 = "The most interesting feature offered by Bootstrap is its grid system.";
    $t_boot3 = "Indeed, Bootstrap provides a flexible grid for organizing content into columns and rows. To implement it, you can use CSS classes such as <span class=" . 'color-bootstrap' . "> 'container'</span>, <span class=" . 'color-bootstrap' . ">'row'</span>, and <span class=" . 'color-bootstrap' . ">'col'</span>.";
};


// POUR CHANGER LE TEXTE DU SLIDER EN JS => CREER UNE CLASSE OU UN DATA ATTRIBUT PHP EN RELATION AVEC
// $_SESSION['lang'] POUR POUVOIR CHOPPER L'INFO EN JS ET DANS LE JS FAIRE UN IF/ELSE DE CETTE CLASSE
// ET CHANGER LE/LES TEXTES DANS LES TABLEAUX CONTENANT DU TEXTE SELON LA LANGUE.