<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['datedenaissance']) and isset($_POST['numerodetelephone']) and isset($_POST['adresse']) and isset($_POST['salaire']) and isset($_POST['heuredetravail']) and isset($_POST['datedetravail'])){
$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datedenaissance'],$_POST['numerodetelephone'],$_POST['adresse'],$_POST['salaire'],$_POST['heuredetravail'],$_POST['datedetravail']);
$livreur1C=new livreurC();
$livreur1C->ajouterLivreur($livreur1);
}else{
	echo "vérifier les champs";
}
//*/

?>



<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - Statistique</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
     <script type="text/javascript" src="myjs.js"></script>
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>S'il vous plaît, attendez...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Chercher</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Fermer</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Gestion de Livraison </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                   
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lamia Marzouki</div>
                    <div class="email">lamiamarzoukibekri@yahoo.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Navigation principale</li>
                    <li >
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Mise En page</span>
                        </a>
                    </li>
                    <li>
                        <a href="Statistique.html">
                            <i class="material-icons">text_fields</i>
                            <span>Statistique</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion produit.html">
                            <i class="material-icons">layers</i>
                            <span>Gestion de produits</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="gestion livraison.html" >
                            <i class="material-icons">widgets</i>
                            <span>Gestion de livraison</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="gestion client.html" >
                            <i class="material-icons">swap_calls</i>
                            <span>Gestion de Client</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion blog.html" >
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="SAV.html" >
                            <i class="material-icons">view_list</i>
                            <span>Service Apres vente</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion pub.html" >
                            <i class="material-icons">perm_media</i>
                            <span>Gestion de Pub</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    
                </section>

    
<form method="POST" >
    <br><br><br><br>
    
                        <table class="tablexx">
    <tr><td>cin</td></p><td><input type="tel" name="cin" pattern=".{8,8}" required id="cin"></td></tr>
    <tr><td>nom</td></p><td><input type="text" name="nom" required id="nom"></td></tr>
    <tr><td>prenom</td><td><input type="text" name="prenom" required id="prenom"></td></tr>
    <tr><td>date de naissance</td></p><td><input type="text" name="datedenaissance" required id="datedenaissance"></td></tr>
    <tr><td>numero de telephone</td><td><input type="text" name="numerodetelephone" pattern=".{8,8}" required id="numerodetelephone"></td></tr>
    <tr><td>adresse</td></p><td><input type="text" name="adresse" required id="adresse"></td></tr>
    <tr><td>salaire</td><td><input type="text" name="salaire" required id="salaire"></td></tr>
    <tr><td>heure de travail</td></p><td><input type="text" name="heuredetravail" required id="heuredetravail"></td></tr>
    <tr><td>date de travail</td><td><input type="text" name="datedetravail" required id="datedetravail"></td></tr>
  </table>
  <label class="validerxx" class="valider3x">
    <input type="submit" name="button" value="ajouter" class="validerxx" onclick="return verifa()" >
</label>

  <a class="validerxx" href="gestionlivraison.php">retour</a>
</form>
<div class="body">
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>

    </section>

    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script src="controlesaisie.js"></script>
</body>
</html>
<