<div class="modal-back hidden">
    <span class="modal img-ludo" id="modal"></span>
</div>
<?php
include 'common/breadcrumb.php';
?>
<div class="projects-container">
    <div class="title-box">
        <h2><?= $p_myProjects ?>
        </h2>
        <span class="projects-skills"><?= $p_webDev ?></span>
    </div>
    <div class="projects">
        <div class="project-box">
            <a href="https://metzys.net/tp-include/index.php" class="project-title">
                <h4><?= $p_thirdProjectTitle ?></h4>
            </a>
            <span class="project-details"><?= $p_thirdProjectDetails ?></span>
            <span class="project-details"><?= $p_thirdProjectTech ?></span>
            <a href="https://metzys.net/projet-cloud/public/" class="project project-image img-cloud"></a>
        </div>
        <div class="project-box">
            <a href="https://metzys.net/projet-player/index.html" class="project-title">
                <h4><?= $p_secondProjectTitle ?></h4>
            </a>
            <span class="project-details"><?= $p_secondProjectDetails ?></span>
            <span class="project-details"><?= $p_secondProjectTech ?></span>
            <a href="https://metzys.net/projet-player/index.html" class=" project project-image img-wmp"></a>
        </div>
        <div class="project-box">
            <a href="http://www.metzys.net/projet-pelote/index.html" class="project-title">
                <h4><?= $p_firstProjectTitle ?></h4>
            </a>
            <span class="project-details"><?= $p_firstProjectDetails ?></span>
            <span class="project-details"><?= $p_firstProjectTech ?></span>
            <a href="http://www.metzys.net/projet-pelote/index.html" class="project project-image img-pelote"></a>
        </div>
        <div class="project-box">
            <a href="https://metzys.net/projet-cms/" class="project-title">
                <h4><?= $p_fourthProjectTitle ?></h4>
            </a>
            <span class="project-details"><?= $p_fourthProjectDetails ?></span>
            <span class="project-details"><?= $p_fourthProjectTech ?></span>
            <a href="https://metzys.net/projet-cms/" class="project project-image img-cms"></a>
        </div>
    </div>
    <p class="cloud-text"><?= $p_cloudDetails ?></p>
    <div class="sep"></div>
    <div class="title-box-design">
        <div class="projects-skills">
            <span class="projects-skills"><? $g_graphismTitle ?></span>
        </div>
    </div>
    <span class="projects-skills"><?= $p_communication ?></span>
</div>

<div class="slider-container">
    <div class="slider-description">
        <h4 class="slide-description"><?= $slider_firstSlideTitle ?></h4>
        <span class="project-details slide-description-details"><?= $slider_firstSlideTitle ?></span>
    </div>
    <button class="close-button hidden">Fermer</button>
    <div class=" slider">
        <div class="controls-wrapper">
            <a class="control-button prev" id="prev">&lt;</a>
            <a class="control-button next" id="next">&gt;</a>
        </div>
        <div class="slides-wrapper">
            <ul class="slides">
                <li class="slide img-ludo" id="pop"></li>
            </ul>
        </div>
    </div>
    <div class="autoplay">
        <label for="autoplay"><?= $p_autoPlay ?></label>
        <input type="checkbox" name="autoplay" id="autoplay">
    </div>
</div>