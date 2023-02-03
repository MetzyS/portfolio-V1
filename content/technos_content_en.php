<?php
include 'common/breadcrumb.php';
?>
<div class="projects-container">
    <div class="title-box">
        <h2>veilles technologiques
        </h2>
        <span class="projects-skills" id="git">Git & GitHub:</span>
    </div>
    <div class="text-container">
        <div class="technos-icon-container"><i class="icon-big git-icon"></i> <i class="icon-big github-icon"></i></div>
        <p class="technos-text">Git est un système de contrôle de version distribué pour le suivi des modifications dans les fichiers de code. Il permet aux développeurs de garder une trace de chaque modification et de collaborer sur des projets de manière efficace.
            Git est largement utilisé en raison de ses nombreuses fonctionnalités, telles que la gestion des branches, les révisions rapides et faciles, la capacité à travailler en ligne ou hors ligne, la sécurité de vos données grâce à un stockage réparti sur plusieurs ordinateurs, etc.
        </p>
        <p>Il est open-source et peut être utilisé gratuitement. De plus, il est compatible avec de nombreux systèmes d'exploitation et a une communauté active de contributeurs, ce qui signifie que les bugs sont rapidement corrigés et que les nouvelles fonctionnalités sont ajoutées régulièrement.
        </p>
        <p><strong>En résumé, Git est un outil incontournable pour les développeurs, car il offre une grande flexibilité et une collaboration en temps réel, ce qui accélère considérablement le processus de développement.</strong></p>
        <p>Voici un florilège des commandes les plus utilisées:
        <div class="pre-container">
            <span class="code-title">clone</span>
            <div class="pre-style">
                <p><span><span>$ git</span><span class="code-line-argument"> clone </span>[repo]</span></p>
                <p><span class="code-comment">// Clone un repository vers votre machine locale.</span></p>
                <p><span class="code-comment">// Exemple:</span></p>
                <p><span><span>$ git</span><span class="code-line-argument"> clone </span><span class="code-lines-italic">https://github.com/MetzyS/mediaPlayer.git</span></span></p>
            </div>
        </div>
        <div class="pre-container">
            <span class="code-title">add</span>
            <div class="pre-style">
                <p><span><span>$ git</span><span class="code-line-argument"> add </span>[fichier]</span></p>
                <p><span class="code-comment">// Ajoute un fichier à l'espace de staging, préparant le fichier pour être commit.</span></p>
                <p><span class="code-comment">// Exemple:</span></p>
                <p><span><span>$ git</span><span class="code-line-argument"> add </span><span class="code-lines-italic">file.txt</span></span></p>
            </div>
        </div>
        <div class="pre-container">
            <span class="code-title">commit</span>
            <div class="pre-style">
                <p><span><span>$ git</span><span class="code-line-argument"> commit </span><span class="code-line-sub-argument">-m "[message]"</span></span></p>
                <p><span class="code-comment">// Commit les changements avec un message qui servira a décrire les modifications.</span></p>
                <p><span class="code-comment">// Exemple:</span></p>
                <p><span><span>$ git</span><span class="code-line-argument"> commit </span></span><span class="code-line-sub-argument">-m "Correction du bug d'affichage X"</span></span></p>
            </div>
        </div>
        <div class="pre-container">
            <span class="code-title">push</span>
            <div class="pre-style">
                <p><span><span>$ git</span><span class="code-line-argument"> push </span><span>[branche]</span></span></p>
                <p><span class="code-comment">// Envoie les modifications commises au repository.</span></p>
                <p><span class="code-comment">// Exemple:</span></p>
                <p><span><span>$ git</span><span class="code-line-argument"> push </span></span><span>origin master</span></span></p>
            </div>
        </div>
        <div class="pre-container">
            <span class="code-title">pull</span>
            <div class="pre-style">
                <p><span><span>$ git</span><span class="code-line-argument"> pull </span><span>[branche]</span></span></p>
                <p><span class="code-comment">// Récupère les dernières modifications du repository.</span></p>
                <p><span class="code-comment">// Exemple:</span></p>
                <p><span><span>$ git</span><span class="code-line-argument"> pull </span></span><span>origin master</span></span></p>
            </div>
        </div>
        <div><a href="https://git-scm.com/" class="source">https://git-scm.com/ </a><a href="https://github.com/" class="source">https://github.com/</a></div>
    </div>
    <div class="separation"></div>
    <div class="title-box">
        <span class="projects-skills" id="bootstrap">Bootstrap:</span>
    </div>
    <div class="text-container">
        <div class="technos-icon-container"><i class="icon-big bootstrap-icons"></i></div>
        <p class="technos-text">Bootstrap est un framework CSS open-source utilisé pour le développement d'applications web. Il est très populaire car il fournit une série d'outils pré-conçus pour une mise en forme rapide et cohérente de sites web, économisant ainsi du temps et de l'effort de codage.
        </p>
        <p>La fonctionnalité la plus intéressante offerte par Bootstrap est son système de grid.</p>
        <p>En effet, Bootstrap fournit un grid flexible pour organiser le contenu en colonnes et en lignes. Pour l'implémenter, vous pouvez utiliser les classes CSS telles que "container", "row" et "col".</p>
        <a href="https://getbootstrap.com/" class="source">https://getbootstrap.com/</a>
    </div>
</div>
</div>