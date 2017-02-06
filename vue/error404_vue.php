<div id='cadre_404'>
    <img src="../assets/img/img_404.png" alt="img_404">
    <p>Ouuuups! la page n&prime;existe pas.</p>
    <?php if(isset($_REQUEST['access'])) {
        $access = $_REQUEST['access'];
        if($access == 'Salarié') {
    ?>
        <a href="../control/index.php?pageType=accueil&access=Salarié">revenir &agrave; la page d&prime;accueil</a>
    <?php
        } if($access == 'Administrateur') {      
    ?>
        <a href="../control/index.php?pageType=accueil&access=Administrateur">revenir &agrave; la page d&prime;accueil</a>
    <?php
        } if($access == 'Gestionnaire') {      
    ?>
        <a href="../control/index.php?pageType=accueil&access=Gestionnaire">revenir &agrave; la page d&prime;accueil</a>
    <?php
        }
        }
    ?>
   
</div>
