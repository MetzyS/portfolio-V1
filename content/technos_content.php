<?php
include 'common/breadcrumb.php';
?>
<div class="technos-container">
    <div class="left-menu-container">
        <ul class="left-menu">
            <li></li>
            <li class="menu-separator"></li>
            <li class="left-menu-item"><a href="#git">Git & GitHub</a></li>
            <li class="menu-separator"></li>
            <li class="left-menu-item"><a href="#bootstrap">Bootstrap</a></li>
            <li class="menu-separator"></li>
            <li class="left-menu-item"><a href="#laravel">Laravel</a></li>
            <li class="menu-separator"></li>
        </ul>
    </div>
    <div class="right-content">
        <div class="technos-title-box">
            <h2>veilles technologiques
            </h2>
            <span class="projects-skills" id="git">Git & GitHub:</span>
        </div>
        <div class="text-container">
            <div class="technos-icon-container"><i class="icon-big git-icon"></i> <i class="icon-big github-icon"></i></div>
            <p class="technos-text"><?= $t_gitp1 ?>
            </p>
            <p><?= $t_gitp2 ?>
            </p>
            <p><strong><?= $t_gitp3 ?></strong></p>
            <p><?= $t_gitp4 ?>
            <div class="pre-container">
                <span class="code-title">clone</span>
                <div class="pre-style">
                    <p><span><span>$ git</span><span class="code-line-argument"> clone </span>[repo]</span></p>
                    <p><span class="code-comment"><?= $t_cloneCom ?></span></p>
                    <p><span class="code-comment"><?= $t_example ?></span></p>
                    <p><span><span>$ git</span><span class="code-line-argument"> clone </span><span class="code-lines-italic">https://github.com/MetzyS/mediaPlayer.git</span></span></p>
                </div>
            </div>
            <div class="pre-container">
                <span class="code-title">add</span>
                <div class="pre-style">
                    <p><span><span>$ git</span><span class="code-line-argument"> add </span>[<?= $t_file ?>]</span></p>
                    <p><span class="code-comment"><?= $t_addCom ?></span></p>
                    <p><span class="code-comment"><?= $t_example ?></span></p>
                    <p><span><span>$ git</span><span class="code-line-argument"> add </span><span class="code-lines-italic">file.txt</span></span></p>
                </div>
            </div>
            <div class="pre-container">
                <span class="code-title">commit</span>
                <div class="pre-style">
                    <p><span><span>$ git</span><span class="code-line-argument"> commit </span><span class="code-line-sub-argument">-m "[message]"</span></span></p>
                    <p><span class="code-comment"><?= $t_commitCom ?></span></p>
                    <p><span class="code-comment"><?= $t_example ?></span></p>
                    <p><span><span>$ git</span><span class="code-line-argument"> commit </span></span><span class="code-line-sub-argument"><?= $t_commitArg ?></span></span></p>
                </div>
            </div>
            <div class="pre-container">
                <span class="code-title">push</span>
                <div class="pre-style">
                    <p><span><span>$ git</span><span class="code-line-argument"> push </span><span>[<?= $t_gitBranch ?>]</span></span></p>
                    <p><span class="code-comment"><?= $t_pushCom ?></span></p>
                    <p><span class="code-comment"><?= $t_example ?></span></p>
                    <p><span><span>$ git</span><span class="code-line-argument"> push </span></span><span>origin master</span></span></p>
                </div>
            </div>
            <div class="pre-container">
                <span class="code-title">pull</span>
                <div class="pre-style">
                    <p><span><span>$ git</span><span class="code-line-argument"> pull </span><span>[<?= $t_gitBranch ?>]</span></span></p>
                    <p><span class="code-comment"><?= $t_pullCom ?></span></p>
                    <p><span class="code-comment"><?= $t_example ?></span></p>
                    <p><span><span>$ git</span><span class="code-line-argument"> pull </span></span><span>origin master</span></span></p>
                </div>
            </div>
            <div><a href="https://git-scm.com/" class="source">https://git-scm.com/ </a><a href="https://github.com/" class="source">https://github.com/</a></div>
        </div>
        <div class="separation"></div>
        <div class="technos-title-box">
            <span class="projects-skills" id="bootstrap">Bootstrap:</span>
        </div>
        <div class="text-container">
            <div class="technos-icon-container"><i class="icon-big bootstrap-icons"></i></div>
            <p class="technos-text"><?= $t_boot1 ?>
            </p>
            <p><?= $t_boot2 ?></p>
            <p><?= $t_boot3  ?></p>
            <a href="https://getbootstrap.com/" class="source">https://getbootstrap.com/</a>
        </div>
    </div>
</div>