
<!------------------------------Шапка------------------------------>
<body>
<header class="header">
    <div class="container cont-nav">
        <nav class="navigation">
            <a href="index.php" class="link logo logo-web">web<span class="logo logo-studio-top">studio</span></a>
            <ul class="menu list">
                <li class="menu-item">
                    <a class="menu-link link <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'current' : ''; ?>" href="/">Studio</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link link <?php echo ($_SERVER['REQUEST_URI'] == '/?url=portfolio') ? 'current' : ''; ?>" href="/?url=portfolio">Portfolio</a>
                </li>
              <!--/PhpstormProjects/new_directory/calculator.php-->
                <li class="menu-item">
                    <a class="menu-link link <?php echo ($_SERVER['PHP_SELF'] == ' ') ? 'current' : ''; ?>"  href="">Contacts</a>
                </li>
            </ul>
        </nav>
        <button type="button" class="mobile-btn-open js-open-menu">
            <svg class="btn-open-icon" width="32" height="22">
                <use href="/images/sprite.svg#menu-hamburger"></use>
            </svg>
        </button>
        <ul class="contact list">
            <li class="contact-item">
                <a class="contact-mail link" href="mailto:info@devstudio.com">info@devstudio.com</a>
            </li>
            <li class="contact-item">
                <a class="contact-phone link" href="tel:+110001111111">+11 (000) 111-11-11</a>
            </li>
        </ul>
    </div>
    <div class="mobile-menu js-menu-container">
        <div class="container">
            <button class="modal-btn js-close-menu">
                <svg class="btn-close-icon" width="8" height="8">
                    <use href="/images/sprite.svg#close-modal"></use>
                </svg>
            </button>
            <ul class="mobile-link list">
                <li class="menu-item">
                    <a class="menu-link link current" href="/">Studio</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link link" href="/?url=portfolio">Portfolio</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link link" href="">Contacts</a>
                </li>
            </ul>
            <div class="mobile-contacts-social">
                <ul class="list">
                    <li>
                        <a class="contact-phone link" href="tel:+110001111111">+11 (000) 111-11-11</a>
                    </li>
                    <li>
                        <a class="contact-mail link" href="mailto:info@devstudio.com">info@devstudio.com</a>
                    </li>
                </ul>
                <ul class="mobile-social-list list">
                    <li class="mobile-social-item">
                        <a href="" class="social-list-link">
                            <svg class="social-list-icon" width="24" height="24">
                                <use href="./images/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="mobile-social-item">
                        <a href="" class="social-list-link">
                            <svg class="social-list-icon" width="24" height="24">
                                <use href="./images/sprite.svg#twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="mobile-social-item">
                        <a href="" class="social-list-link">
                            <svg class="social-list-icon" width="24" height="24">
                                <use href="./images/sprite.svg#facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="mobile-social-item">
                        <a href="" class="social-list-link">
                            <svg class="social-list-icon" width="24" height="24">
                                <use href="./images/sprite.svg#linkedin"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>