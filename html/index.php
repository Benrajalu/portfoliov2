<?php   
      
       session_start(); // utilisation activée des variables de session
      
       //lien avec un autre php pour, en l'occurence, la BDD        
             
       // Création d'un tableau de variable pour gérer les titres de pages
       
       $tab_title=array("index"=>"Intégrateur web à Rennes, Nantes",
                        "projets"=>"Intégrateur web et developpeur front-end",
                        "404"=>"Cette page n'existe pas !");
       $tab_description=array("index"=>"Benoit Rajalu est un Intégrateur web et developpeur front-end. Vous travaillez à Nantes ou à Rennes ? Faisons connaissance !",
                        "projets"=>"L'intégration et le développement front-end de ces projets ont été réalisés par les mains curieuses et parsemée de sucre de Benoit Rajalu",
                        "404"=>"Oups. Cette page n'existe pas. Un lutin est sûrement en cause.");
                    
       $setPages=array("index", "projets", "bio", "carte");
       
       if(isset($_GET['p']) && !preg_match("/\//i", $_GET['p']))
       {
            if(in_array($_GET['p'], $setPages)){
                  $content=$_GET['p'] . ".html"; 
                  $title=$tab_title[$_GET['p']];
                  $description=$tab_description[$_GET['p']];
            } 
            else{
                   header('HTTP/1.0 404 Not Found');
                   header("Location: 404.html");
            }                                  
       }
       else{
                  $_GET['p']="index";
                  $content="index.html";
                  $title=$tab_title["index"];
                  $description=$tab_description["index"];
       }
       

       if(!isset($_GET['p']))
       {
                  $content="index" . ".html"; 
                  $title=$tab_title["index"];
                  $description=$tab_description["index"];
       }
      
      // FIN DE LA REDIRECTION GÉNÉRALE POUR LES PAGES
       include("template.html"); 
?> 
