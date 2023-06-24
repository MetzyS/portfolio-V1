<?php

if ($lang == 'fr') {
    // Header
    $h_home = 'Accueil';
    $h_projects = 'Projets';
    $h_technos = 'Technos';
    $h_technosAll = 'Toutes les veilles';
    $h_CV = 'CV';
    $h_contact = 'Contact';
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
    $m_aboutText = "Ancien directeur d'ACM avec plusieurs années d'expérience dans le monde de l'animation. J'ai décidé de me reconvertir dans le développement web en 2022, en raison de ma passion pour l'informatique, le code et les jeux vidéo.";
    $m_aboutTextShort = "Passionné, en quête perpétuelle d'apprentissage et de développement de mes compétences, je suis animé par une volonté de relever de nouveaux défis et de contribuer à des projets innovants.<br>
Ma créativité et ma sociabilité font de moi un collaborateur dynamique et engagé.";
    $m_skillsTitle = 'competences';
    $m_webDev = 'Développement Web';
    $m_skillsDesignTitle = 'maquetter';
    $m_skillsDesignDetail = 'interface statique & dynamique';
    $m_skillsCmsTitle = 'cms';
    $m_skillsFrameWorksTitle = 'frameworks';
    $m_skillsVersioning = 'versionnage';
    $m_skillsDatabaseTitle = 'BDD';
    $m_PDO = 'Accès aux données';
    $m_AI = 'Intelligence Artificielle';
    $m_skillsAIProgramming = 'Programmation';
    $m_AIVisualization = 'Visualisation et traîtement des données';
    $m_AIDeepLearning = 'Deep learning';
    $m_linksTitle = 'Liens';

    // Home - Games
    $g_ticTacToc = 'Morpion';
    $g_JS = ' - JavaScript';

    // Projects
    $p_myProjects = 'mes projets';
    $p_webDev = 'Developpement Web:';
    $p_communication = 'Communication:';
    $p_firstProjectTitle = 'Pelote et Rebelote';
    $p_firstProjectDetails = 'Site web Statique (responsive)';
    $p_secondProjectTitle = 'Walkman Media Player';
    $p_secondProjectDetails = 'Application web Dynamique (JS)';
    $p_thirdProjectTitle = 'Cloud d&#39;entreprise*';
    $p_thirdProjectDetails = 'Application Web Dynamique (PHP)';
    $p_cloudDetails = '* Espace de partage, d&#39;archivage et de gestion de fichiers crée pour une entreprise, from scratch. Si vous souhaitez tester le site et avoir un aperçu du code, veuillez me contacter!';
    $p_fourthProjectTitle = 'Blog de Matt';
    $p_fourthProjectDetails = 'Blog WordPress';
    $p_fifthProjectTitle = 'L&#39;Univers du Téléphone';
    $p_fifthProjectDetails = 'Site Web Dynamique (PHP)';
    $slider_firstSlideTitle = 'Ludothèque Familles Rurales';
    $slider_firstSlideSubtitle = 'Première de couverture projet pédagogique';
    $p_autoPlay = 'Défilement automatique';

    // Graphism
    $g_graphismTitle = 'Graphisme/Design:';

    // Technos
    $t_research = "veilles technologiques";
    // Git
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

    // Contact
    $c_title = "Contact";
    $c_subTitle = "Contactez-moi via le formulaire ci-dessous";
    $c_name = 'Votre nom';
    $c_mail = 'Votre mail';
    $c_subject = 'Sujet';
    $c_message = 'Votre message';
    $c_submit = 'Envoyer';
    $c_confirmMsg = "Votre mail à bien été envoyé.";
    $c_errorMsg = "Erreur survenue lors de l'envoi du mail";

    // CV
    $cv_profile = "Profil";
    $cv_experience = "Experience";
    $cv_exp0 = "Stage Développeur Web";
    $cv_exp0_details = "- Création d'un cloud privé from scratch";
    $cv_exp0_details2 = "- Création d'un site vitrine";
    $cv_exp1 = "Directeur ALSH/ALP";
    $cv_exp2 = "Directeur adjoint ALSH";
    $cv_exp3 = "Animateur ALSH/ALP";
    $cv_exp4 = "Animateur ALSH/ALP";

    $cv_skills_web = 'Compétences Web';
    $cv_web_first = "Maquettage";
    $cv_web_second = "Intégration";
    $cv_web_third = "Frameworks";
    $cv_web_fourth = "BDD";
    $cv_web_fifth = "Dynamique";
    $cv_web_sixth = "Framework";

    $cv_skills_ds = 'Compétences Data';
    $cv_skills_ds_ia = 'AI';
    $cv_ia_first = "Development";
    $cv_ia_second = "Visualization<br>& Processing";
    $cv_ia_third = "Deep learning";
    $cv_ia_fourth = "Database";
    $cv_ia_fifth = "Dynamic";
    $cv_ia_sixth = "Framework";

    $cv_qualities = "Qualités";
    $cv_q_first = "Créativité";
    $cv_q_second = "Esprit d'équipe";
    $cv_q_third = "Adaptation";
    $cv_q_fourth = "Empathie";
    $cv_q_fifth = "Problem solving";

    $cv_hobbies = "Intérêts";

    $cv_dev_cda = "Concepteur développeur d'applications";
    $cv_ibm = "Académie IBM Montpellier";
    $cv_ia = 'Spécialité Intelligence Artificielle';
    $cv_bacp3 = "Bac +3";
    $cv_dev_dwwm = "Développeur Web / Web Mobile";
    $cv_bacp2 = "Bac +2";
    $cv_rep = "Réparations micro-électronique";
    $cv_bafd = "BAFD";
    $cv_bafa = "BAFA QUALIF: Surveillant Baignade";
    $cv_psc1 = "PSC1 / Formations DDCS";
    $cv_univ = "Niveau Universitaire";
    $cv_bac = "Baccalauréat";

    $cv_paulva = "Université Paul Valery / Jean Moulin Béziers";
    $cv_bts = "1ère année BTS M.U.C";
    $cv_psy = "L1 Psychologie";
    $cv_llcer = "L1 LLCER";
    $cv_spebac = "Sciences & Technologies de la Gestion";
};








if ($lang == 'en') {
    // Header
    $h_home = 'Home';
    $h_projects = 'Projects';
    $h_technos = 'Technos';
    $h_technosAll = 'All Researches';
    $h_CV = 'Resume';
    $h_contact = 'Contact';
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
    $m_aboutText = 'Former head of Communities Centers with many years of experience. I decided to switch to web development in 2022, driven by my passion for computers, coding and video games.';
    $m_aboutTextShort = "Passionate and always eager to learn and develop my skills, I'm driven by a desire to tackle new challenges and contribute to innovative projects.<br>My creativity and sociability make me a dynamic and dedicated collaborator.";
    $m_skillsTitle = 'skills';
    $m_webDev = 'Web Development';
    $m_skillsDesignTitle = 'design';
    $m_skillsDesignDetail = 'static & dynamic';
    $m_skillsCmsTitle = 'cms';
    $m_skillsFrameWorksTitle = 'frameworks';
    $m_skillsVersioning = 'versioning';
    $m_skillsDatabaseTitle = 'Database';
    $m_PDO = 'PDO';
    $m_AI = 'Artificial Intelligence';
    $m_skillsAIProgramming = 'Programming';
    $m_AIVisualization = 'Data visualization and processing';
    $m_AIDeepLearning = 'Deep learning';
    $m_linksTitle = 'Links';

    //Home - Games
    $g_ticTacToc = 'TicTacToe';
    $g_JS = ' - JavaScript';

    // Projects
    $p_myProjects = 'my projects';
    $p_webDev = 'Web Dev:';
    $p_communication = 'Communication:';
    $p_firstProjectTitle = 'Pelote et Rebelote';
    $p_firstProjectDetails = 'Static Website (responsive)';
    $p_secondProjectTitle = 'Walkman Media Player';
    $p_secondProjectDetails = 'Dynamic Web Application (JS)';
    $p_thirdProjectTitle = 'Cloud Storage*';
    $p_thirdProjectDetails = 'Dynamic Web Application (PHP)';
    $p_fourthProjectTitle = "Matt's Blog";
    $p_fourthProjectDetails = 'WordPress Blog';
    $p_fifthProjectTitle = 'L&#39;Univers du Téléphone';
    $p_fifthProjectDetails = 'Dynamic Website (PHP)';
    $p_cloudDetails = '* Platform for sharing, archiving and managing files. Created from scratch for a company. If you wish to test the web app and have a preview of the code, feel free to contact me!';
    $slider_firstSlideTitle = 'Toy Library (Familles Rurales)';
    $slider_firstSlideSubtitle = 'Cover page for the Educational Project';
    $p_autoPlay = 'Auto play';

    // Graphism
    $g_graphismTitle = 'Graphism/Design:';

    // Technos
    $t_research = "small researches";
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

    // Contact
    $c_title = "Contact";
    $c_subTitle = "Contact me through this form";
    $c_name = 'Name';
    $c_mail = 'Email';
    $c_subject = 'Subject';
    $c_message = 'Your message';
    $c_submit = 'Submit';
    $c_confirmMsg = "Your email was sent successfuly.";
    $c_errorMsg = "Error while sending your email";

    // CV
    $cv_profile = "Profile";
    $cv_experience = "Experience";
    $cv_exp0 = "Intership Web Developer";
    $cv_exp0_details = "- Created a private cloud from scratch";
    $cv_exp0_details2 = "- Created a showcase website";
    $cv_exp1 = "Community Center Director";
    $cv_exp2 = "Community Center Assistant Director";
    $cv_exp3 = "Community Center Staff";
    $cv_exp4 = "Community Center Staff";

    $cv_skills_web = 'Skills Web';
    $cv_web_first = "Design";
    $cv_web_second = "Development";
    $cv_web_third = "Frameworks";
    $cv_web_fourth = "Database";
    $cv_web_fifth = "Dynamic";
    $cv_web_sixth = "Framework";

    $cv_skills_ds = 'Skills Data Science';
    $cv_skills_ds_ia = 'AI';
    $cv_ia_first = "Development";
    $cv_ia_second = "Visualization<br>& Processing";
    $cv_ia_third = "Deep learning";
    $cv_ia_fourth = "Database";
    $cv_ia_fifth = "Dynamic";
    $cv_ia_sixth = "Framework";

    $cv_qualities = "Soft-skills";
    $cv_q_first = "Creativity";
    $cv_q_second = "Teamwork";
    $cv_q_third = "Adaptability";
    $cv_q_fourth = "Empathy";
    $cv_q_fifth = "Problem solving";

    $cv_hobbies = "Hobbies";

    $cv_dev_cda = "Software developer";
    $cv_ibm = "IBM Academy Montpellier";
    $cv_ia = 'Specialization in Artificial Intelligence';
    $cv_bacp3 = "Bachelor's degree";
    $cv_dev_dwwm = "Web Developper / Mobile Web";
    $cv_bacp2 = "Associate's degree";
    $cv_rep = "Micro-electronic repairs";
    $cv_bafd = "BAFD";
    $cv_bafa = "BAFA QUALIF: Lifeguard";
    $cv_psc1 = "PSC1 / DDCS Formations";
    $cv_univ = "University level";
    $cv_bac = "Bachelor degree";

    $cv_paulva = "University Paul Valery / Jean Moulin Béziers";
    $cv_bts = "1st year BTEC/Associate Degree";
    $cv_psy = "L1 Psychology";
    $cv_llcer = "L1 Literature, language, foreign civilizations";
    $cv_spebac = "Management Sciences and Technologies";
};


$firstProjectStack = '<div class="project-stack">
                <span class="stack-detail stack-html">HTML</span>
                <span class="stack-detail stack-css">CSS</span>
            </div>';

$secondProjectStack = '<div class="project-stack">
                <span class="stack-detail stack-js">JS</span>
                <span class="stack-detail stack-html">HTML</span>
                <span class="stack-detail stack-css">CSS</span>
            </div>';

$thirdProjectStack = '<div class="project-stack"> <span class="stack-detail stack-php">PHP</span>
                <span class="stack-detail stack-sql">SQL</span>
                <span class="stack-detail stack-js">JS</span>
                <span class="stack-detail stack-html">HTML</span>
                <span class="stack-detail stack-css">CSS</span>
            </div>';

$fourthProjectStack = '<div class="project-stack"> <span class="stack-detail stack-php">PHP</span>
                <span class="stack-detail stack-sql">SQL</span>
                <span class="stack-detail stack-css">CSS</span>
            </div>';

$fifthProjectStack =
    '<div class="project-stack"> <span class="stack-detail stack-php">PHP</span>
                <span class="stack-detail stack-sql">SQL</span>
                <span class="stack-detail stack-js">JS</span>
                <span class="stack-detail stack-html">HTML</span>
                <span class="stack-detail stack-css">CSS</span>
            </div>';
