<?php 
require("connexionbdd.php");
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
</nav>      <div id="wrap">

      <section id="gallery-fluid-carousel-3" class="pt-100 pb-75 text-center light">
          <div class="container-fluid no-side-pad">
            <div class="row">
                <div class="col-md-3"><h2 style="margin-left: 140px">Titles</h2></div>
                <div class="col-md-6"><h2 style="margin-right: 40px">Posts</h2></div>
                <div class="col-md-3"><h2 style="margin-right: 150px">Posted by</h2></div>                                
            </div>
            <?php

                $req = $dbh->query("SELECT * FROM articles, confirmuser WHERE articles.id_utilisateur = confirmuser.id_utilisateur");
                $tweets = $req->fetchAll();

                foreach($tweets as $tweet){
                    echo '<div class="container">';
                    echo '<section class="row">';
                    echo '<div class="col-md-3">';
                    echo '<div style="border: 5px solid black; border-radius: 15px; margin-top: 10px; background-color: blue; color: white">';
                    
                    echo $tweet['titre'];
                    echo "</div>";                         
                    echo '</div>';               
                    echo '<div class="col-md-5" style="margin-left: 30px">';
                    echo '<div style="border: 5px solid black; border-radius: 15px; margin-top: 10px; background-color: red; color: white">';
                    
                    echo $tweet['texte'];
                    echo "</div>";
                    echo "</div>";
                    echo '<div class="col-md-3" style="margin-left: 50px">'; 
                    echo '<div style="border: 5px solid black; border-radius: 15px; margin-top: 10px; background-color: orange; color: white">';
                    
                    echo $tweet['pseudo'];
                    echo "</div>";                    
                    echo '</div>';                    
                    echo '</section>';
                    echo '</div>';
                }

                /* Afficher tous les postes de dhivina avec son email comme référence
                $bah = $dbh->query("SELECT * FROM articles, confirmuser WHERE articles.id_utilisateur = confirmuser.id_utilisateur AND confirmuser.pseudo = \"dhivina\"");
                $bro = $bah->fetchAll();

                foreach($bro as $b){
                    echo $b['texte'];
                    echo "<br>";
                    echo $b['email'];
                } */
                ?> 
            
                </div>
                <div class="bg"></div>

      </section><section id="gallery-list-2col-2--0" class="pt-125 pb-125 light">
          <div class="container">
            <div class="col-md-12">
                <h2>IMAGES FROM DESKTOP</h2>
                <?php 
                $req = $dbh->query('SELECT * FROM desktoppic');
                $dpics = $req->fetchAll();

                foreach($dpics as $dpic){
                    $chemin = 'images/'.$dpic['desktoppic'];
                    echo '<img src="'.$chemin.'" style="width:25%; height:25%">';
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                ?>
            </div> 
            <div class="col-md-12">
                <br><br>                
                <h2>URL IMAGES</h2>
                <?php 
                $req = $dbh->query('SELECT * FROM urlpic');
                $urlpics = $req->fetchAll();

                foreach($urlpics as $urlpic){
                    echo '<img src="'.$urlpic['urlpic'].'" style="width:25%; height:25%">';
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                ?>

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
              </div>
          <div class="bg"></div>
      </section>    
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