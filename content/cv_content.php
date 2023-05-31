<?php
include './common/breadcrumb.php';
?>
<div class="cv-outter-container">
    <div class="cv-top">
        <div class="cv-top-bar"></div>
        <div class="cv-title">
            <span class="cv-name">Adnène <span class="color-blue-accent">HAMZAOUI</span></span>
        </div>
    </div>
    <div class="cv-flex margin-b-30">
        <div class="cv-photo"></div>
        <div class="cv-profile">
            <div class="flex flex-title-c"><i class="cv-section-icon icon-pen-black"></i><span class="cv-section-title"><?= $cv_profile ?></span></div>
            <p class="flex-title-c"><?= $m_aboutTextShort ?> </p>
        </div>
    </div>
    <div class=" cv-inner-container">
        <div class="cv-left">
            <div class="cv-exp">
                <span class="cv-section-title color-blue-accent">Experience</span>
                <div class="flex margin-b-30 cv-s-t">
                    <div class="cv-date"><span>2023</span><br><span>2022</span></div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_exp0 ?></span></p>
                        <p><span class="cv-exp-d">L'Univers du Téléphone - Pézenas</span></p>
                        <p><span class="exp-details"><?= $cv_exp0_details ?></span></p>
                        <p><span class="exp-details"><?= $cv_exp0_details2 ?></span></p>
                    </div>
                </div>
                <div class="flex margin-b-30 cv-s-t">
                    <div class="cv-date"><span>2020</span><br><span>2018</span></div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_exp1 ?></span></p>
                        <p><span class="cv-exp-d">Familles Rurales - Saint Jean de Fos</span></p>
                    </div>
                </div>
                <div class="flex margin-b-30">
                    <div class="cv-date"><span>2018</span><br><span>2017</span></div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_exp2 ?></span></p>
                        <p><span class="cv-exp-d">Familles Rurales - Saint Jean de Fos</span></p>
                    </div>
                </div>
                <div class="flex margin-b-30">
                    <div class="cv-date"><span>2017</span><br><span>2016</span></div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_exp3 ?></span></p>
                        <p><span class="cv-exp-d">Familles Rurales - Saint Jean de Fos</span></p>
                    </div>
                </div>

                <div class="flex margin-b-50">
                    <div class="cv-date">
                        <span>2015</span><br><span>2014</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_exp4 ?></span></p>
                        <p><span class="cv-exp-d">Villamont - Servian</span></p>
                    </div>
                </div>
            </div>
            <div class="cv-formations">
                <span class="cv-section-title color-blue-accent">Formations</span>
                <div class="flex margin-b-30  cv-s-t">
                    <div class="cv-date">
                        <span>2024</span><br><span>2023</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_dev_cda ?></span></p>
                        <p><span class="cv-exp-title"><?= $cv_ia ?></span></p>
                        <p><span class="cv-exp-details"><?= $cv_bacp3 ?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_ibm ?></span></p>
                    </div>
                </div>

                <div class="flex margin-b-30  cv-s-t">
                    <div class="cv-date">
                        <span>2023</span><br><span>2022</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_dev_dwwm ?></span></p>
                        <p><span class="cv-exp-details"><?= $cv_bacp2 ?></span></p>
                        <p><span class="cv-exp-d">GRETA-CFA Montpellier</span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2022</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_rep ?></span></p>
                        <p><span class="cv-exp-d">Fixit Formations</span></p>
                        <p><span class="cv-exp-d">Montpellier-Baillargues</span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2019</span><br><span>2018</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_bafd ?></span></p>
                        <p><span class="cv-exp-d">Familles Rurales/CEMEA Occitanie</span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2016</span><br><span>2015</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_bafa ?></span></p>
                        <p><span class="cv-exp-d">CEMEA Occitanie</span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2015</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_psc1 ?></span></p>
                        <p><span class="cv-exp-d">Compagnie des nuits partagées</span></p>
                        <p><span class="cv-exp-d">Croix-rouge</span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2014</span><br><span>2012</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_univ ?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_paulva ?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_bts ?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_llcer ?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_psy ?></span></p>
                    </div>
                </div>

                <div class="flex margin-b-30">
                    <div class="cv-date">
                        <span>2011</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_bac ?></span></p>
                        <p><span class="cv-exp-d">Jean Moulin Béziers</span></p>
                        <p><span class="cv-exp-d"><?= $cv_spebac ?></span></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="cv-right">
            <!-- Skills Web -->
            <div class="cv-skills-web">
                <span class="cv-section-title color-blue-accent"><?= $cv_skills_web ?></span>
                <div class="margin-b-15 bar grid-s  cv-s-t">
                    <div class="cv-date">
                        <p class="cv-section-subtitle">Front-End</p>
                        <span><?= $cv_web_first ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-photoshop"></span><span class="cv-icon icon-figma"></span><span class="cv-icon icon-illustrator"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_web_second ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-html"></span><span class="cv-icon icon-css"></span><span class="cv-icon icon-js"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_web_third ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-bootstrap"></span><span class="cv-icon icon-tailwind"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s margin-t-30">
                    <div class="cv-date">
                        <p class="cv-section-subtitle">Back-End</p>
                        <span><?= $cv_web_fourth ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-mariadb"></span><span class="cv-icon icon-mysql"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_web_fifth ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-php"></span><span class="cv-icon icon-java"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_web_sixth ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-laravel"></span></span>
                    </div>
                </div>
            </div>
            <!-- Skills IA -->
            <div class="cv-skills-ia">
                <span class="cv-section-title color-blue-accent"><?= $cv_skills_ds ?></span>
                <div class="margin-b-15 bar grid-s  cv-s-t">
                    <div class="cv-date">
                        <p class="cv-section-subtitle"><?= $cv_skills_ds_ia ?></p>
                        <span><?= $cv_ia_first ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-python"></span><span class="cv-icon icon-flask"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_ia_second ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-pandas"></span><span class="cv-icon icon-matplotlib"></span></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_ia_third ?></span>
                        <span class="cv-icon-list"><span class="cv-icon icon-keras"></span></span>
                    </div>
                </div>
            </div>
            <!-- Soft skills -->
            <div class="cv-qualities">
                <span class="cv-section-title color-blue-accent"><?= $cv_qualities ?></span>
                <div class="margin-b-15 bar grid-s  cv-s-t">
                    <div class="cv-date">
                        <span><?= $cv_q_first ?></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_q_second ?></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_q_third ?></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_q_fourth ?></span>
                    </div>
                </div>
                <div class="margin-b-15 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_q_fifth ?></span>
                    </div>
                </div>
            </div>


            <div class="cv-hobbies">
                <span class="cv-section-title color-blue-accent"><?= $cv_hobbies ?></span>
                <div>
                    <div class="flex-icon cv-s-t">
                        <span class="cv-hobbies-icon cv-h-1"></span>
                        <span class="cv-hobbies-icon cv-h-2"></span>
                    </div>

                    <div class="flex-icon">
                        <span class="cv-hobbies-icon cv-h-3"></span>
                    </div>


                    <div class="flex-icon">
                        <span class="cv-hobbies-icon cv-h-4"></span>
                        <span class="cv-hobbies-icon cv-h-5"></span>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>