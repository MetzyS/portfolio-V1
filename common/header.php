<header>
    <div class="waves-top"></div>
    <div class="waves-container">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave-top" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave-top" x="48" y="0" fill="rgba(219, 233, 255, 0.1)" />
                <use xlink:href="#gentle-wave-top" x="48" y="3" fill="rgba(130, 168, 228, 0.3)" />
                <use xlink:href="#gentle-wave-top" x="48" y="5" fill="rgba(130, 168, 228, 0.1)" />
                <use xlink:href="#gentle-wave-top" x="48" y="7" fill="rgba(219, 233, 255, 1)" />
            </g>
        </svg>
    </div>
    <nav>
        <div class="burger-drop hidden">
            <ul><?php if ($page !== 'home') {
                    echo '<li><a href="?page=home" class="drop-item">Accueil</a></li>';
                }
                ?>
                <li><a href="?page=projets" class="drop-item"><?= $h_projects ?></a></li>
                <!-- en cours de dev-->
                <!-- <li><a href="#" class="drop-item" id="menu-technos"><= $h_technos ?><span class="expand-menu-icon"></span></a></li> -->
                <!-- <li class="drop-animation hidden submenu" id="submenu"><a href="?page=technos" class="drop-item"><= $h_technosAll ?></a></li>
                <li class="drop-animation hidden submenu" id="submenu"><a href="?page=technos#git" class="drop-item">Git & GitHub</a></li>
                <li class="drop-animation hidden submenu" id="submenu"><a href="?page=technos#bootstrap" class="drop-item">Bootstrap</a></li> -->
                <li><a href="?page=cv" class="drop-item"><?= $h_CV ?></a></li>
                <li><a href="?page=contact" class="drop-item"><?= $h_contact ?></a></li>
                <li>
                    <div class="waves-container2">
                        <svg class="waves2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                            <defs>
                                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                            </defs>
                            <g class="parallax">
                                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(219, 233, 255, 0.1)" />
                                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(130, 168, 228, 0.3)" />
                                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(130, 168, 228, 0.1)" />
                                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(219, 233, 255, 1)" />
                            </g>
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-container">
            <div class="header-burger">
                <div class="header-burger-icon"></div>
            </div>
            <div class="header-menu-desktop-container">
                <ul class="header-menu-desktop-list">
                    <li class="header-menu-desktop-item"><a href="?page=home" class="drop-item-desktop-a"><?= $h_home ?></a></li>
                    <li class="header-menu-desktop-item"><a href="?page=projets" class="drop-item-desktop-a"><?= $h_projects ?></a></li>
                    <!-- en cours de dev-->
                    <!-- <li class="header-menu-desktop-item technos-list"><a href="?page=technos" class="drop-item-desktop-a" id="drop-item-desktop-a-technos"><= $h_technos ?></a> -->
                    <!-- <ul class="header-desktop-submenu-list" id="submenu-list-desktop">
                            <li class="header-menu-desktop-item"><a href="?page=technos" class="drop-item-desktop"><= $h_technosAll ?></a>
                            </li>
                            <li class="header-menu-desktop-item"><a href="?page=technos#git" class="drop-item-desktop">Git & Github</a>
                            </li>
                            <li class="header-menu-desktop-item"><a href="?page=technos#bootstrap" class="drop-item-desktop">Bootstrap</a>
                            </li>
                        </ul> -->
                    <!-- </li> -->
                    <li class="header-menu-desktop-item"><a href="?page=cv" class="drop-item-desktop-a"><?= $h_CV ?></a></li>
                    <li class="header-menu-desktop-item"><a href="?page=contact" class="drop-item-desktop-a"><?= $h_contact ?></a></li>
                </ul>
            </div>
            <div class="header-lang">
                <ul class="lang-list">
                    <li class="lang-list-item" data-lang=<?= $lang ?>><a href="<?= $langLink_1 ?>" class="<?= $h_flag1 ?>"></a><a href="<?= $langLink_1 ?>"><?= $h_langString_1 ?></a>
                        <ul class="lang-list-submenu">
                            <li class="lang-list-link"><a href="<?= $langLink_2 ?>" class="<?= $h_flag2 ?>"></a><a href="<?= $langLink_2 ?>"><span class="text-lang"><?= $h_langString_2 ?></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>