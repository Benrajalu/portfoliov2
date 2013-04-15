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
       
       $proj_array=array(
                  "kindle" => array(
                        "url"             => "www.benrajalu.net/kindle/index.html",
                        "url_safe"        => "www.benrajalu.net/kindle/",
                        "name"            => "Demo Kindle",
                        "date"            => "Février 2012",
                        "type"            => array("Intégration", "Webdesign", "Développement front-end"),
                        "gestion"         => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "design"          => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "copy1"           => "<p>Un projet personnel m'ayant permis de développer mes compétences en javascript et jQuery. L'objectif était de présenter un site graphiquement cohérent qui saurait engager l'utilisateur de part son interactivité.</p>
                                              <p>J'ai donc réalisé le développement spécifique, l'intégration, la charte graphique et la photographie.</p>",
                        "image1"          => array(
                                                "large"  => "kindle-full2.png",
                                                "medium" => "kindle-full1.png",
                                                "small"  => "kindle-full3.png",
                                                ),
                        "copy2"           => array(
                                                "title" => "Animation",
                                                "text"  => "<p>Un projet personnel m'ayant permis de développer mes compétences en javascript et jQuery. L'objectif était de présenter un site graphiquement cohérent qui saurait engager l'utilisateur de part son interactivité.</p>
                                                            <p>J'ai donc réalisé le développement spécifique, l'intégration, la charte graphique et la photographie.</p>",
                                                ),
                        "image2"          => array(
                                                1 => array("large"  => "kinde-showcase2.jpg",
                                                            "medium" => "kinde-showcase1.jpg",
                                                            "small"  => "kinde-showcase3.jpg",
                                                            ),
                                                2 => array("large"  => "kinde-showcase2b.jpg",
                                                            "medium" => "kinde-showcase1b.jpg",
                                                            "small"  => "kinde-showcase3b.jpg",
                                                            ),
                                                ),
                  ),
                  "henrimichel" => array(
                        "url"             => "www.henrimichel.fr",
                        "url_safe"        => "www.henrimichel.fr",
                        "name"            => "Henri Michel",
                        "date"            => "Mars 2012",
                        "type"            => array("Intégration"),
                        "gestion"         => array("url" => "http://www.mktlines.com/", "name" => "MKT Lines"),
                        "design"          => array("url" => "http://www.graphisweet.com/", "name" => "GraphiSweet"),
                        "copy1"           => "<p>Lors d'un stage au sein de l'agence MKT Lines à Rennes, j'ai pu excercer mes premières intégrations à partir d'une maquette Photoshop fournie. Ce site est donc issu de l'unes de ces intégration.</p>
                                              <p>La gestion de projet, le développement dynamique et la SEO ont été assurés par l'agence MKT Line. Le webdesign, par l'agence GraphiSweet. Je me suis chargé de l'intégration.</p>",
                        "image1"          => array(
                                                "large"  => "henrimichel-full2.png",
                                                "medium" => "henrimichel-full1.png",
                                                "small"  => "henrimichel-full3.png",
                                                ),
                  ),
                  "optimiis" => array(
                        "url"             => "www.optimiis.fr",
                        "url_safe"        => "www.optimiis.fr",
                        "name"            => "Optimiis",
                        "date"            => "Octobre 2012",
                        "type"            => array("Intégration"),
                        "gestion"         => array("url" => "http://www.mktlines.com/", "name" => "MKT Lines"),
                        "design"          => array("url" => "http://www.graphisweet.com/", "name" => "GraphiSweet"),
                        "copy1"           => "<p>Second site réalisé sous la direction de l'agence MKT Lines. Là encore, le développement back-end et tout le webdesign m'ont été fournis. Cependant, ce projet m'a permis de proposer quelques solutions spécifiques pour le front-end, nottement au niveau du menu secondaire animé en page d'accueil.</p>
                                              <p>La gestion de projet, le graphisme et le développement back-end font été réalisés par les agences MKT Lines et GraphiSweet. J'étais chargé du développement front-end et de l'intégration.</p>",
                        "image1"          => array(
                                                "large"  => "optimiis-full2.png",
                                                "medium" => "optimiis-full1.png",
                                                "small"  => "optimiis-full3.png",
                                                ),
                  ),
                  "aln" => array(
                        "url"             => "www.artslondonnews.co.uk/search?q=Benoit+Rajalu",
                        "url_safe"        => "www.artslondonnews.co.uk",
                        "name"            => "Arts London News",
                        "date"            => "2008 -2010",
                        "type"            => array("Print & Web", "Rédaction", "Édition"),
                        "author"          => array("link" => "www.benrajalu.net", "name" => "Benoit Rajalu"),
                        "copy1"           => "<p>Arts London News est le journal de l'université des Arts de Londres. Écrit et édité par les étudiants en journalisme, ce journal s'adresse à l'ensemble des étudiants et du personnel de l'une des plus grandes Universités d'Europe. Afin de maximiser l'intéret formateur, les étudiants en journalisme y assument des rôles très proches de ceux qu'ils seront amenés à endosser en entreprise.</p>
                                              <p>Ma première mission à Arts London News était en tant que rédacteur d'articles de type \"features\" et de news. Au sein d'une petite équipe, j'ai pu proposer et rédiger différents articles de fond sur des thèmes imposés. J'ai ensuité été nommé rédacteur en chef pour artslondon­news.co.uk, un rôle qui m'a ammené à gérer une équipe de 20 personnes ainsi qu'à prendre en charge le contenu d'un site d'information continue.</p>
                                              <p>Selon mon poste, j'ai été amené à réaliser différents articles et news. J'ai conçu des vidéos. J'ai pu créer des maquettes et des mises en pages. Dans le cadre de mon travail de rédacteur en chef, j'ai participé à la formation de mes collègues. Certains de mes travaux sont disponibles en ligne sur Arts London News.</p>"
                  ),
                  "tamgvoz" => array(
                        "url"             => "www.cie-tg.ch",
                        "url_safe"        => "www.cie-tg.ch",
                        "name"            => "Compagnie Tamara Gvozdenovic",
                        "date"            => "2009 -2013",
                        "type"            => array("Print & Web", "Rédaction", "Édition"),
                        "author"          => array("link" => "www.benrajalu.net", "name" => "Benoit Rajalu"),
                        "copy1"           => "<p>La jeune compagnie Tamara Gvozdenovic est une ambitieuse formation de danse contemporaine. Dans le cadre de sa création et du début de son activité, j'ai été amené à proposer et à concevoir la stratégie marketing de cet association, ainsi que les élements de communications qui en découlent. En collaboration constante avec Tamara, chorégraphe et créatrice de la compagnie, j'assume au gré des demandes le rôle de chargé de communication pour cette compagnie.</p>
                              <p>Selon les demandes de la compagnie, je peux être amené à réaliser divers supports. La nature de l'activité de l'association rend cette mission largement ponctuelle, et focalisée sur l'information des divers individus succeptibles de faire vivre la compagnie : public, presse, théâtres, institutions... En ce sens, la majeure partie des travaux réalisés sont des documents appropriés à une diffusion presse.</p>
                              <p>Après la conception d'une stratégie marketing durable, la compagnie m'a chargé de produire différents supports favorisant son fonctionnement et à son developpement. J'ai été ammené à rédiger divers dossiers de presse en Anglais et en Français, ainsi que des communiqués de presse. Dernièrement, j'ai developpé et publié un <a href=\"projets/lightscream.html\">site</a> pour l'une des pièces de la compagnie.</p>"
                  ),
            );


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
                  $project = $_GET["pr"];
                  $content="projet-detail.html"; 
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
