<?php   
      
       session_start(); // utilisation activée des variables de session
      
       //lien avec un autre php pour, en l'occurence, la BDD        
             
       // Création d'un tableau de variable pour gérer les titres de pages
       
       $tab_title=array("index"=>"Intégrateur web à Rennes, Nantes",
                        "projets"=>"Intégrateur web et developpeur front-end",
                        "bio"=>"CV - Intégrateur web dans l'Ouest de la France",
                        "cheiguei"=>"Cheguei Paris - Intégration responsive",
                        "foley"=>"Morning by Foley - Intégration responsive sur CMS Wordpress",
                        "villagraslin"=>"Villa Graslin - Intégration responsive",
                        "protectas"=>"Protectas - Intégration responsive, webdesign et rédaction web",
                        "mywebbox"=>"My Web Box - Intégration responsive et une pincée de SEO",
                        "speederlan"=>"Speederlan SIII - Intégration web responsive et rédaction pour le web",
                        "mktnews"=>"MKT News - Démo d'intégration responsive pour MKT Lines",
                        "jenfu"=>"Jen Fu - Intégration d'un portfolio",
                        "lightscream"=>"Light Scream - Site administrable avec version mobile",
                        "kindle"=>"Demo Kindle - Intégration et webdesign pour une démo technique",
                        "pmm"=>"Perpetual Motion Machine - Intégration d'un site vitrine",
                        "henrimichel"=>"Henri Michel - Intégration web pour MKT Lines",
                        "optimiis"=>"Optmiis - Intégration web pour MKT Lines",
                        "aln"=>"Arts London News - Rédaction, journalisme et édition web pour l'Université des Arts de Londres",
                        "tamgvoz"=>"Compagnie Tamara Gvozdenovic - Rédaction, édition et stratégie de communication",
                        "404"=>"Cette page n'existe pas !");
       $tab_description=array("index"=>"Benoit Rajalu est un Intégrateur web et developpeur front-end. Vous travaillez à Nantes ou à Rennes ? Faisons connaissance !",
                        "projets"=>"L'intégration et le développement front-end de ces projets ont été réalisés par les mains curieuses et parsemée de sucre de Benoit Rajalu",
                        "bio"=>"Voici la liste des ingrédients nécéssaire à la fabrication de Benoit Rajalu. Résultats non-garantis.",
                        "cheiguei"=>"Ce site responsive a été intégré par Benoit Rajalu. Mais toute la gloire revient à The Quest et PMM", 
                        "foley"=>"L'intégration responsive de ce site sous Wordpress a été réalisée par Benoit Rajalu, pour Perpetual Motion Machine. Le goût, en revanche, est celui de Foley",
                        "villagraslin"=>"Un site vitrine responsive, construit au pixel près selon les requêtes du client.", 
                        "protectas"=>"L'agence Speederlan m'a confié le webdesign, l'intégration et la rédaction web de ce site vitrine responsive pour le groupe Protectas",
                        "mywebbox"=>"My Web Box est un projet ambitieux de Perpetual Motion Machine. Pour l'instant, c'est une vitrine responsive avec une vraie réflexion SEO",
                        "speederlan"=>"L'agence Speederlan SIII m'a demandé de réaliser l'intégration de son site dynamique, ainsi que de prendre en charge la rédaction de ses contenus",
                        "mktnews"=>"Pendant un stage réalisé à l'agence MKT Lines, à Rennes, j'ai pu proposer cette démo de newsletter responsive",
                        "jenfu"=>"L'intégration du portfolio de Jen Fu est de mon fait. Toute la direction artistique était déjà en place, il n'y a donc que l'exécution qui me revienne",
                        "lightscream"=>"Webdesign, rédaction, développement back et intégration : un projet entièrement réalisé par mes petits doigts débutants.",
                        "pmm"=>"Pour nos premières passes d'arme ensemble, l'équipe de PMM m'a confié quelque tâches d'intégration sur leur site vitrine",
                        "kindle"=>"L'occasion de faire mes premières dents sur les animation en javascript, et un peu de photographie pour le web",
                        "henrimichel"=>"L'intégration d'un site réalisé par MKT Lines lors de mon stage à leurs côtés",
                        "optimiis"=>"L'intégration et un petit peu de développement javascript pour MKT Lines, lors d'un stage à leurs cotés",
                        "aln"=>"La joie des études de journalisme à Londres, et deux ans d'écrits, de mises en pages et d'éditions réalisés pour le journal de l'université",
                        "tamgvoz"=>"Mes travaux de communication et de relation presse, pour le compte d'une jeune compagnie de danse contemporaine",
                        "404"=>"Oups. Cette page n'existe pas. Un lutin est sûrement en cause.");
                    
       $setPages=array("index", "projets", "bio");
       $setProjects=array("cheiguei", "foley", "villagraslin", "protectas", "mywebbox", "speederlan", "mktnews", "jenfu", "lightscream", "pmm", "kindle", "henrimichel", "optimiis", "aln", "tamgvoz");
       
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
       elseif(isset($_GET['pr']))
       {
            if(in_array($_GET['pr'], $setProjects)){
                  $content="projects/" . $_GET['pr'] . ".html"; 
                  $title=$tab_title[$_GET['pr']];
                  $description=$tab_description[$_GET['pr']];
                  $path="../";
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
       

       if(!isset($_GET['p']) && !isset($_GET['pr']))
       {
                  $content="index" . ".html"; 
                  $title=$tab_title["index"];
                  $description=$tab_description["index"];
       }
      
      // FIN DE LA REDIRECTION GÉNÉRALE POUR LES PAGES
       include("template.html"); 
?> 
