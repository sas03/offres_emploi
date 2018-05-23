<?php
/**
 * Created by PhpStorm.
 * User: sumo stephane
 * Date: 17/05/2018
 * Time: 15:03
 */
?>

<?php 
require("connexionbdd.php");

if(isset($_POST['email']) and isset($_POST['password'])) {
//$reponse = $bdd->query('SELECT id FROM utilisateurs');
    $req = $dbh->prepare('SELECT * FROM confirmuser WHERE email = ? AND password = ?');
    $req->execute([$_POST['email'], sha1(md5($_POST['password']))]);

    $d = $req->fetch();


    if(isset($d['pseudo'])) {
      $_SESSION['user-connecte'] = $d['pseudo'];
      $_SESSION['id_user'] = $d['id_utilisateur'];
      echo "connexion réussie";
      if($_SESSION['user-connecte'] == "admin"){
        header('Location: confirmuser.php?pseudo='.$_SESSION['user-connecte']);
      }else{
        //$_SESSION['user-connecté'] = $d['id_user'];
        header('Location: user.php?pseudo='.$_SESSION['user-connecte']);
      }
    }
    else{
        echo "mauvais mot de passe ou mauvais identifiant";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>index</title>
		
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
		<script src="js/fonts.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/icons.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/aos.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/index.css" />
	</head>
    <body class="light-page">
<nav id="nav-logo-2row-share" class="navbar light">
    <div class="container">
        <div class="clearfix">
            <p class="navbar-text pull-left" style="">

                <?php if(isset($_SESSION['user-connecte']) and $_SESSION['user-connecte'] == 'admin'){?>
                    <a href="confirmuser.php?pseudo=<?php echo $_SESSION['user-connecte'] ?>" class="btn btn-sm btn-warning"><span style="">Page Admin</span></a> 
                <?php } ?>                
                <?php if(isset($_SESSION['user-connecte'])){
                    ?>                  
                    <a href="publier.php" class="btn btn-sm btn-primary"><span style="">Publier</span></a>
                    <a href="user.php?pseudo=<?php echo $_SESSION['user-connecte'] ?>" class="btn btn-sm btn-warning"><span>Profil - <?php echo $_SESSION['user-connecte'] ?></span></a>
                    <a href="deconnexion.php" class="btn btn-sm btn-primary"><span style="">Deconnexion</span></a>
                <?php } else { ?>
                    <a href="connexion.php" class="btn btn-sm btn-warning"><span style="">Connexion</span></a>
                    <a href="inscription.php" class="btn btn-sm btn-primary"><span style="">Inscription</span></a>
                <?php } ?>
            </p>     
            <ul class="share-list pull-right hidden-xs">
                    <li>
                        <a href="#" class="goodshare" data-type="fb"><i class="icon-facebook"></i><span>Share</span><span data-counter="fb"></span></a>
                    </li><li>
                        <a href="#" class="goodshare" data-type="tw"><i class="icon-twitter"></i><span>Tweet</span><span data-counter="tw"></span></a>
                    </li><li>
                        <a href="#" class="goodshare" data-type="gp"><i class="icon-google-plus"></i><span>Share</span><span data-counter="gp"></span></a>
                    </li><li>
                        <a href="#" class="goodshare" data-type="li"><i class="icon-linkedin"></i><span>Share</span><span data-counter="li"></span></a>
                    </li>
                </ul>
        </div>
        <hr class="mt-0 mb-0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <div class="navbar-brand"></div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="desktop.php"><span style="">Desktop Images</span></a></li>
                <li><a href="user.php"><span>Gallery</span></a></li>
                <li><a href="url.php"><span>URL Images</span></a></li>
            </ul>
        </div>
    </div>
    <div class="nav-bg light"></div>
</nav>		<div id="wrap">
			<section id="spec-inner-page" class="pb-125 pt-100 light">
    			<div class="container">
        			<div class="row">
            			<div class="col-md-9">
		                    <h2 class="mb-20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connecter-vous </font></font></font></font></font></font></font></font></h2>

	                        <form action="connexion.php" method="post" class="contact_form" id="contact-quartbg-form-text--3-form" novalidate="novalidate">
	                            <div class="form-group">
	                                <input type="text" class="form-control" placeholder="Adresse-email" name="email">
	                            </div>
	                            <div class="form-group">
	                                <input type="password" class="form-control" placeholder="Mot de Passe" name="password">
	                            </div>
	                            <button type="submit" data-loading-text="•••" data-complete-text="Completed!" data-reset-text="Try again later..." class="btn btn-block btn-primary"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se connecter</font></font></span></button>
	                        </form>    




                			<ul class="share-list mt-50">
                    			<li>
                        			<a href="#" class="goodshare" data-type="fb"><i class="icon-facebook"></i><span>Share</span><span data-counter="fb"></span></a>
                    			</li>
                    			<li>
                        			<a href="#" class="goodshare" data-type="tw"><i class="icon-twitter"></i><span>Tweet</span><span data-counter="tw"></span></a>
                    			</li>
                    			<li>
                        			<a href="#" class="goodshare" data-type="gp"><i class="icon-google-plus"></i><span>Share</span><span data-counter="gp"></span></a>
                    			</li>
                    			<li>
                        			<a href="#" class="goodshare" data-type="li"><i class="icon-linkedin"></i><span>Share</span><span data-counter="li"></span></a>
                    			</li>
                    			<li>
                        			<a href="#" class="goodshare" data-type="pt"><i class="icon-pinterest-p"></i><span>Share</span><span data-counter="pt"></span></a>
                    			</li>
                			</ul>
            			</div>
            			<div class="col-md-3">
                			<div class="widget">
                    			<h3 class=""><mark>Recent posts</mark></h3>
                    			<hr>

                    			<ul class="post-list">
                        			<li>
                            			<span><a href="#">Post1.</a></span>
                            			<ul class="list-inline post-desc">
                                			<li><small>Sumo Stephane</small></li>
                                			<li><small>10 Mai 2018</small></li>
                            			</ul>
                        			</li>
                        			<li>
                            			<span><a href="#">Post2.</a></span>
                            			<ul class="list-inline post-desc">
                                			<li><small>Mbani Dhivina</small></li>
                                			<li><small>10 Mai 2018</small></li>
                            			</ul>
                        			</li>
                        			<li>
                            			<span><a href="#">Post3</a></span>
                            			<ul class="list-inline post-desc">
                                			<li><small>Stanley Tissot</small></li>
                                			<li><small>09 Mai 2018</small></li>
                            			</ul>
                        			</li>
                    			</ul>

                			</div>
                			<div class="widget border-box padding-box">
                    			<p>Modern solutions, interesting elements, unique approach to details make this template recognizable and interesting.</p>
                			</div>

                			<div class="widget">
                    			<img class="screen" src="images/banner.png" srcset="images/banner@2x.png 2x" alt="banner">
                			</div>
            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>
			</section><section id="clients-line" class="pt-125 pb-125 dark text-center">
    			<div class="container">
        			<h2 class="mb-25"><span class="text-uppercase"><strong>Clients</strong></span></h2>
        			<h3 class="mb-75"><em>Partners &amp; Clients</em></h3>
        			<div class="row">
            			<div class="col-md-12">

                			<img class="screen" src="images/client-1-dark.png" srcset="images/client-1-dark@2x.png 2x" alt="Client">


                			<img class="screen" src="images/client-2-dark.png" srcset="images/client-2-dark@2x.png 2x" alt="Client">


                			<img class="screen" src="images/client-3-dark.png" srcset="images/client-3-dark@2x.png 2x" alt="Client">


                			<img class="screen" src="images/client-4-dark.png" srcset="images/client-4-dark@2x.png 2x" alt="Client">


                			<img class="screen" src="images/client-5-dark.png" srcset="images/client-5-dark@2x.png 2x" alt="Client">


                			<img class="screen" src="images/client-7-dark.png" srcset="images/client-7-dark@2x.png 2x" alt="Client">

            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>
			</section><footer id="footer-text-icon-social" class="pt-50 pb-50 light">
    			<div class="container">
        			<div class="row flex-md-vmiddle">
            			<div class="col-md-4">
                			<p style="color: white">© SSACORP. All rights reserved.</p>
            			</div>
            			<div class="col-md-4 text-center">
                			<a href="#" class="icon-chevron-up icon-size-l icon-color"><i></i></a>
            			</div>
            			<div class="col-md-4 text-md-right">
                			<ul class="social-list">
                    			<li>
                        			<a href="#"><i class="icon-twitter icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-facebook icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-linkedin icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-github-alt icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-google-plus icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-dribbble icon-size-m"></i></a>
                    			</li><li>
                        			<a href="#"><i class="icon-behance icon-size-m"></i></a>
                    			</li>
                			</ul>
            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>
			</footer>
		</div>
		<footer></footer>
		<div class="modal-container"></div>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCByts0vn5uAYat3aXEeK0yWL7txqfSMX8"></script>
		<script src="https://cdn.jsdelivr.net/jquery.goodshare.js/3.2.8/goodshare.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
