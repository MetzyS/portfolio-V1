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
    $langLink_1 = 'pref/lang-fr.php';
    $langLink_2 = 'pref/lang-en.php';
    $h_langString_1 = 'FR';
    $h_langString_2 = 'EN';

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

}
if ($lang == 'en') {
    // Header
    $h_home = 'Home';
    $h_projects = 'Projects';
    $h_technos = 'Technos';
    $h_technosAll = 'All Researches';
    $h_CV = 'Resume';
    $h_flag1 = 'flag en-flag';
    $h_flag2 = 'flag fr-flag';
    $langLink_1 = 'pref/lang-en.php';
    $langLink_2 = 'pref/lang-fr.php';
    $h_langString_1 = 'EN';
    $h_langString_2 = 'FR';

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
}


// POUR CHANGER LE TEXTE DU SLIDER EN JS => CREER UNE CLASSE OU UN DATA ATTRIBUT PHP EN RELATION AVEC
// $_SESSION['lang'] POUR POUVOIR CHOPPER L'INFO EN JS ET DANS LE JS FAIRE UN IF/ELSE DE CETTE CLASSE
// ET CHANGER LE/LES TEXTES DANS LES TABLEAUX CONTENANT DU TEXTE SELON LA LANGUE.