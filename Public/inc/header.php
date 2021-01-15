<header>
    <section>
        <div class="lg-header">
            <a  href="?page=accueil"><img src="./images/imgHeader/lg-header.png" alt="accueil"></a>
        </div>
        <nav>
            <ul class="menuDesktop">
                <?php
                    if($_SESSION['Admin'] == true)
                    {
                        echo '<li><a href="?ad=gestionContact" title="administration">ADMIN</a></li>';
                    }
                ?>
                <li><a href="?page=accueil" title="Accueil">ACCUEIL</a></li>
                <li><a href="?page=tousLesArticles" title="Articles">ARTICLES</a></li>
                <li><a href="?page=faq" title="Foire aux question">F.A.Q.</a></li> 
                <li><a href="?page=contact" title="Contact">CONTACT</a></li>
                <li><a href="?page=connexion&disconnect=true" title="Se deconnecter">DÉCONNEXION</a></li>
            </ul>
            <div class="headerRs">
                <a href="#" title="groupe-messenger"><img src="./images/imgHeader/lg-messenger.png" alt="grp-messenger"></a>
                <a href="#" title="groupe-facebook"><img src="./images/imgHeader/lg-facebook.png" alt="grp-facebook"></a>
            </div>
            <span class="iconMenu" onclick="openNav()">&#9776;</span>
            <div id="myNav" class="overlay">
                <span class="closebtn" onclick="closeNav()">&times;</span>
                <ul class="overlay-content">
                    <?php
                    if($_SESSION['Admin'] == true)
                    {
                        echo '<li><a href="?ad=gestionContact" title="administration">ADMIN</a></li>';
                    }
                    ?>
                    <li><a href="?page=accueil" title="Accueil">ACCUEIL</a></li>
                    <li><a href="?page=tousLesArticles" title="Articles">ARTICLES</a></li>
                    <li><a href="?page=faq" title="Foire aux question">F.A.Q.</a></li> 
                    <li><a href="?page=contact" title="Contact">CONTACT</a></li>
                    <li><a href="?page=connexion&disconnect=true" title="Se deconnecter">DÉCONNEXION</a></li>
                    <div class="headerRsMobile">
                        <a href="#" title="groupe-messenger"><img src="./images/imgHeader/lg-messenger.png" alt="grp-messenger"></a>
                        <a href="#" title="groupe-facebook"><img src="./images/imgHeader/lg-facebook.png" alt="grp-facebook"></a>
                    </div>
                </ul>
            </div>
        </nav>
    </section>
</header>