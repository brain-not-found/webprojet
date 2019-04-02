<?PHP
include "../core/carteC.php";
include "../core/clientCF.php";

$carte1C=new carteC();
$listecartes=$carte1C->affichercartes();
$client1C=new clientC();
$listeclients=$client1C->afficherclients();


//var_dump($listeclients->fetchAll());
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - client</title>
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
    <link href="css1/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css1/themes/all-themes.css" rel="stylesheet" />
    <script type="text/javascript" src="myjs1.js"></script>
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
                <a class="navbar-brand" href="index.html">Gestion De Client</a>
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
                    <li>
                        <a href="gestion livraison.html" >
                            <i class="material-icons">widgets</i>
                            <span>Gestion de livraison</span>
                        </a>
                       
                    </li>
                   
                    <li class="active">
                        <a href="gestion client.html">
                            <i class="material-icons">swap_calls</i>
                            <span>Gestion des Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion blog.html">
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
         <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestion de Client</h2>
            </div>


            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Consulter les Clients :
                            </h2>
                            
                        </div>
                         <form name="f">
                        <table id="t01">
                       
   <tr>
<td>username</td>
<td>mail</td>
<td>password</td>
<td>tel</td>
<td>age</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	</form>
	</td>
	<td><a href="modifierclient.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
  
        </table>
</form>

          </div>
                    
         </div>



            <!-- #END# Headings -->
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Les demandes :</h2>
                        </div>
                        <div class="body">
                            <table id="t01">
     <tr>
        <th>type de demande</th>
        <th>UserName</th>
        <th>First Name</th> 
        <th>Last Name</th>
        <th>Numero de TEL</th>
        <th>Age</th> 
        <th>Photo</th>
    </tr>
    <tr>
         <td> .... </td>
         <td> ... </td>
         <td> ... </td>
         <td> ... </td>
         <td> ...</td>
         <td> ... </td>
         <td> ...</td>
    </tr>

    </table>
       <div class="label">
                     <label ><input type="button" name="Ajouter" value="Ajouter" class="button"></label>
                     <label ><input type="button" name="Upgrade" value="Upgrade" class="button"></label>
                     <label ><input type="button" name="Supprimer" value="Supprime" class="button"></label>
       </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Ajouter une carte de fidèlité :
                            </h2>
                            
                        </div>
                         <form name="f" method="POST" action="ajoutcarte.php">
                        <table id="t01">
                       
    <tr><td>Nom d'utulisateur</td></p><td><input type="text" name="username"></td></tr>
        <tr><td>E-mail</td></p><td><input type="email" name="mail" placeholder="Exemple@yyy.xxx"></td></tr>

    <tr><td>Type</td></p><td><input list="browsers" name="type">
<datalist id="browsers">
  <option value="Bronze">
  <option value="Silver">
  <option value="Gold">
</datalist></td></tr>
    <te><td>Nom</td><td><input type="text" name="nom"></td></tr>
    <tr><td>Prenom</td></p><td><input type="text" name="prenom"></td></tr>
    <te><td>Numero de telephone</td><td><input type="number" name="tel"></td></tr>
    <tr><td>Age</td></p><td><input type="date" name="age"></td></tr>
    	
  </table>
             <label class="label2"><input type="submit" name="Ajouter"  onclick="test();" value="Crée un Carte" class="button"></label>
             </form>
                        </div>
                    
            </div>

<!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Consulter les cartes des fidèlités :
                            </h2>
                            
                        </div>
                         <form name="f">
                        <table id="t01">
                       
    <tr>
         <td>username</td>
         <td>mail</td>
         <td>type</td>
         <td>nom</td>
         <td>prenom</td>
         <td>tel</td>
         <td>age</td>
         <td>supprimer</td>
         <td>modifier</td>
</tr>
<?PHP
foreach($listecartes as $row){
    ?>
    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['age']; ?></td>
    <td><form method="POST" action="supprimercarte.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
    </form>
    </td>
    <td><a href="modifiercarte.php?username=<?PHP echo $row['username']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}
?>
  
        </table>
</form>

          </div>
                    
         </div>



            <!-- #END# Headings -->
            <!-- Text Styles -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UPGRADE :
                            </h2>
                        </div>
                        <figure class="figure"><img src="images/goldclient.png" alt="gold  client"  width="150" height="150" class="img"><figcaption><input type="radio" value="reponse_1" name="choix1"> Gold Client  </figcaption></figure>
                        <figure class="figure"><img src="images/silverclient.png" alt="gold  client"  width="150" height="150" class="img"><figcaption><input type="radio" value="reponse_2" name="choix2"> Silver Client </figcaption></figure>
                        <figure class="figure"><img src="images/bronzeclient.png" alt="gold  client"  width="150" height="150" class="img"><figcaption><input type="radio" value="reponse_3" name="choix3"> Bronze Client  </figcaption></figure>
                                             <label class="label3"  ><input type="button" name="Upgrade" value="Upgrade" class="button"></label>


                    </div>
                </div>
            </div>
            <!-- #END# Text Styles -->
           
            
        </div>
    </section>
    
            

            <!-- Widgets -->
            
                <!-- #END# Answered Tickets -->
            
                <!-- Task Info -->
               
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
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
</body>

</html>

