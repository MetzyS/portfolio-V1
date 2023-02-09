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
    <div class="flex margin-b-30">
        <div class="cv-photo"></div>
        <div class="cv-profile">
            <div class="flex flex-title-c"><i class="cv-section-icon icon-pen-black"></i><span class="cv-section-title"><?= $cv_profile ?></span></div>
            <p class="flex-title-c"><?= $m_aboutTextShort ?> </p>
        </div>
    </div>
    <div class=" cv-inner-container">
        <div class="cv-left">
            <div class="cv-exp">
                <span class="cv-section-title">Experience</span>
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
                <span class="cv-section-title">Formations</span>
                <div class="flex margin-b-30  cv-s-t">
                    <div class="cv-date">
                        <span>2022</span><br><span>2023</span>
                    </div>
                    <div>
                        <p><span class="cv-exp-title"><?= $cv_dev ?></span></p>
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
                        <span>2018</span><br><span>2019</span>
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
                        <p><span class="cv-exp-d"><?= $cv_bts?></span></p>
                        <p><span class="cv-exp-d"><?= $cv_llcer?></span></p>
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
            <div class="cv-qualities">
                <span class="cv-section-title"><?= $cv_qualities ?></span>
                <div class="margin-b-30 bar grid-s  cv-s-t">
                    <div class="cv-date">
                        <span><?= $cv_independant ?></span>
                    </div>
                    <div>
                        <p><span class="cv-progress-bar" id="cv-1"></span></p>
                    </div>
                </div>
                <div class="margin-b-30 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_organized ?></span>
                    </div>
                    <div>
                        <p><span class="cv-progress-bar" id="cv-2"></span></p>
                    </div>
                </div>
                <div class="margin-b-30 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_dynamic ?></span>
                    </div>
                    <div>
                        <p><span class="cv-progress-bar" id="cv-3"></span></p>
                    </div>
                </div>
                <div class="margin-b-50 bar grid-s">
                    <div class="cv-date">
                        <span><?= $cv_creative ?></span>
                    </div>
                    <div>
                        <p><span class="cv-progress-bar" id="cv-4"></span></p>
                    </div>
                </div>
            </div>


            <div class="cv-hobbies">
                <span class="cv-section-title"><?= $cv_hobbies ?></span>
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