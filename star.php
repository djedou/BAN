<!DOCTYPE html>
<!--     
    @monjo ~@~
  -->
<html>
<head>
  <title>Trombinoscope</title>
  <style type="text/css">
  		html{
  			height: 100%;
  			width: 100%;
  		}
  		body{
  			height: 100%;
  			width: 100%;
  		}
		
      header {
        width: 100%;
        height: 15%;
        POSITION: fixed;
        top: 0;
        z-index: 2;
        background-color: #282727;
      }
  
      #suivant {
        display: inline-block;
        border-radius: 5px;
        color: white;
        width: 10%;
        height: 100%;
        background-color: #010299;
        text-align: center;
        float: right;
        margin-left: 2%;
        display: none;
      }

      #precedent {
        display: inline-block;
        border-radius: 5px;
        color: white;
        padding: 2%;
        margin-top: 10%;
        font-size: 50px;
        background-color: #444242;
        text-align: center;
        float: left;
      }
		  .trombi-star-contenair-lettrage{
		  	display: inline-block;
		  	width: 24.9%;
		  	height: 253px;
		  	color: white;
		  }
		  .trombi-star-contenair{
		  	background-size: cover;
		  	display: inline-block;
		  	width: 24.9%;
		  	height: 253px;
		  	color: white;margin-left: -4px;
    background-position: center center;
		  }
		  .trombi-nom-star{
		  	width: 100%;
		  	text-align: left;
		  	padding-top: 2.5%;
        font-size:3em;
        margin-top:0;
        margin-left:10px;
		  }
      .trombi-nom-minister{
        width: 290px;
        text-align: center;
        background-color: #010299;
        border:2px solid#010299;
        color: white;
        margin-top:0;
        margin-bottom: 0;
        border-top-left-radius: 30px;
        font-size:5em;
      }
		  #contenair-articles{
              width: 100%;
              margin-top: 20%;
              margin-left: auto;
              margin-right: auto;
            }



    span.psw {
        float: right;
        padding-top: 16px;
    }
    
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 10%;
    }
    
    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 1.5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        min-height: 84%;
        width: 90%; /* Could be more or less, depending on screen size */
    }
    
    /* The Close Button (x) */
    .close {
        position: absolute;
        font-weight: bold;
        right: 25px;
        top: 18%;
        color: red;
        font-size: 80px;
        font-weight: bold;
        margin-right:  4%;
    }
    
    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }
    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }
    
    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }
        
    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }

    .trombi-star-contenair-modal{
        width: 805px;
        height:885px;
      border:2px solid black;
      border-radius: 40px;
      background-size: cover;
      margin-left: auto;
      margin-right: auto;
      margin-top: 25%;
    background-position: center center;
    }

          .background{
            /*background-image: url(img/logoicc.png);*/
            background-color: #000;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            filter: blur(5px);
          }
          #bgvid{
            border: 2px solid red;
            margin-top: -30%;
            margin-left: -15%;
            height: 120%;
            -webkit-filter: blur(20px);
            -moz-filter: blur(20px) ;
            -o-filter: blur(20px) ;
            -ms-filter: blur(20px) ;
            filter: blur(100px);
          }
          .contenu{
            width: 100%;
            height: 100%;
            position: fixed;
            overflow-y: scroll;
            z-index: 3;
            top: 0;
            left: 0;
            padding-top: 5%;
            color: #fff;
            background-color: rgb(47 47 47 / 80%);
            animation: marquee 0.24s linear;
          }

</style>

</head>

<body>


            <div class="background"  onclick="document.getElementById('contenu').style.display='block';">
                <video autoplay loop muted  id="bgvid">
                  <source src="img/logorotation.mp4" type="video/mp4">
                </video>
            </div>
          <div class="contenu">

	<header>
     <a href="../index.php" class="panel"><div id="suivant">Acceuil</div> </a>
     <a href="index.php" class="panel"><div id="precedent">Précédent</div></a>
  </header>


        <div id="contenair-articles" >

            <?php
            /*---------------------------------------------------------------*/
            /*                                                                                    
            */
            /*---------------------------------------------------------------*/
            
                
                $d = dir("C:/xampp/htdocs/ban/images/trombinoscope/star");// Mettre le chemin du répertoire à lister
                $cheminPhotos='/ban/images/trombinoscope/star/';// chemin relatif du répertoire à lister
                $prenomPrecedent='1'; //variable tampon qui contient le precedent prénom
                //echo "Pointeur: ".$d->handle."<br>\n"; 
                //echo "Chemin: ".$d->path."<br>\n"; 
                while($entry = $d->read()) 
                  {           
                    if($entry != '.' && $entry != '..' )// éviter les "fichiers" cachés
                      { 
                        list($prenom,$nom/*,$ministere*/) = preg_split("/[_]+/", $entry); //reitire les "_"  ex: nom_prenom.jpg => nom prenom.jpg
                        list($nom,$extension) = preg_split("/[.JPG]+/", $nom ); //reitre les ".jpg"  ex: prenom.jpg => prenom
                        $lienPhoto=$cheminPhotos.$entry;// lien de la photo
                        $minuscule=strtolower($prenomPrecedent[0]);
                        $majusctule=strtoupper($prenomPrecedent[0]);
                        if ($prenomPrecedent=='1' ||$minuscule!= $prenom[0] & $majusctule!= $prenom[0] ) {//ordere alphabétique flemme d'expliquer plus que ça
                          echo "
                              <div class='trombi-star-contenair-lettrage' >
                               <h1 style='font-size: 10em; float: right;'>".strtoupper($prenom[0])."</h1>
                              </div>
                              ";
                        }

                        echo "
                              <div id=".$nom.$prenom." class='trombi-star-contenair' onclick=document.getElementById('".$entry."').style.display='block'; style='background-image: url(".$lienPhoto.");' ></div>

                              <div id=".$entry." class='modal'>
                                 <span  onclick=document.getElementById('".$entry."').style.display='none' class='close' title='Close Modal'>&times;</span>
                             "; 
                             $prenom=strtolower($prenom);
                             $prenom[0]=strtoupper($prenom[0]);
                             $nom=strtolower($nom);
                             $nom[0]=strtoupper($nom[0]);
                        echo "      
                                <div id='trombi-star-contenair-modal' class='trombi-star-contenair-modal' class='modal-content animate' style='background-image: url(".$lienPhoto.");' >
                                  <h1 class='trombi-nom-minister'>S.T.A.R</h1>
                                  <h1 class='trombi-nom-star'>".$prenom."<br>".$nom."</h1>
                                </div>
                               </div>
                            ";
                        $prenomPrecedent=$prenom; 
                      }
                  } 
            
                $d->close();
            
            ?>
        </div>


    </div>

</body>
</html>