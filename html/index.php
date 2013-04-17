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
                  "cheiguei" => array(
                        "route"           => "cheiguei",
                        "cover"           => array(
                                                "large"  => "cheiguei2.jpg",
                                                "medium" => "cheiguei1.jpg",
                                                "small"  => "cheiguei3.jpg",
                                                ),
                        "tags"            => "web responsive integration",
                        "url"             => "www.chegueiparis.com",
                        "url_safe"        => "www.chegueiparis.com",
                        "name"            => "Cheguei Paris",
                        "date"            => "Février 2013",
                        "type"            => array("Intégration responsive", "Développement front-end"),
                        "gestion"         => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "gestion2"        => array("url" => "http://www.thequest.fr/", "name" => "The Quest"),
                        "design"          => array("url" => "http://www.todologue.com/", "name" => "Bénédicte Coudreau"),
                        "copy1"           => "<p>Chei Guei Paris est un site moderne, au style épuré mais raffiné. J'ai pu y réaliser quelques développements spécifiques nécessaires pour accommoder les problématiques d'un site responsive et d'une mise en page précise demandée par le client.</p>
                                              <p>J'étais l'intégrateur web et le développeur front-end pour ce projet. L'ensemble de la réalisation graphique a été réalisée par Bénédicte Coudreau. Le développement back-end et la gestion de projet technique est au credit de Perpetual Motion Machine. La direction commerciale revient à The Quest.</p>",
                        "image1"          => array(
                                                "large"  => "cheiguei-full2.png",
                                                "medium" => "cheiguei-full1.png",
                                                "small"  => "cheiguei-full3.png",
                                                ),
                        "copy2"           => array(
                                                "title" => "Développement spécifique",
                                                "text"  => "<p>La page d'accueil de CheGuei Paris utilise un carousel. Seulement, celui-ci ne devait pas fonctionner sur les écrans mobiles : à la place, chacune des diapositive devait se réordonner sur une même colonne. La menoeuve n'étant pas réalisable de façon optimal seulement au travers du CSS, c'est un plugin jQuery développé pour l'occasion qui s'en charge.</p>",
                                                ),
                        "image2"          => array(
                                                1 => array("large"  => "cheiguei-showcase2.png",
                                                            "medium" => "cheiguei-showcase1.png",
                                                            "small"  => "cheiguei-showcase3.png",
                                                            ),
                                                ),
                  ),
                  "foley" => array(
                        "route"           => "foley",
                        "cover"           => array(
                                                "large"  => "foley2.jpg",
                                                "medium" => "foley1.jpg",
                                                "small"  => "foley3.jpg",
                                                ),
                        "tags"            => "web responsive integration",
                        "url"             => "www.morning-by-foley.com",
                        "url_safe"        => "www.morning-by-foley.com",
                        "name"            => "Morning By Foley",
                        "date"            => "Janvier 2013",
                        "type"            => array("Intégration responsive", "Blog Wordpress"),
                        "gestion"         => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "design"          => array("url" => "http://www.morning-by-foley.com/", "name" => "Foley"),
                        "copy1"           => "<p>Ce site responsive est à la base une refonte du visuel et des contenus de l'entreprise. Le webdesign simple et clair répond aux demandes du client, et l'utilisation du framework Foundation ont fait de ce site vitrine un projet efficace et économique.</p>
                                              <p>La gestion de projet et le logo sont au crédit de Speederlan SIII. L'intégration responsive, le webdesign et la rédaction web furent à ma charge.</p>",
                        "image1"          => array(
                                                "large"  => "foley-full2.png",
                                                "medium" => "foley-full1.png",
                                                "small"  => "foley-full3.png",
                                                ),
                  ),
                  "villagraslin" => array(
                        "route"           => "villagraslin",
                        "cover"           => array(
                                                "large"  => "graslin2.jpg",
                                                "medium" => "graslin1.jpg",
                                                "small"  => "graslin3.jpg",
                                                ),
                        "tags"            => "web responsive integration webdesign redaction",
                        "url"             => "www.villa-graslin.fr",
                        "url_safe"        => "www.villa-graslin.fr",
                        "name"            => "Villa Graslin",
                        "date"            => "Janvier 2013",
                        "type"            => array("Intégration responsive", "Webdesign"),
                        "gestion"         => array("url" => "http://www.speederlan.eu/", "name" => "Speederlan"),
                        "design"          => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "design2"         => array("url" => "http://www.speederlan.eu/", "name" => "Speederlan"),
                        "copy1"           => "<p>Ce site responsive est à la base une refonte du visuel et des contenus de l'entreprise. Le webdesign simple et clair répond aux demandes du client, et l'utilisation du framework Foundation ont fait de ce site vitrine un projet efficace et économique.</p>
                                              <p>La gestion de projet et le logo sont au crédit de Speederlan SIII. L'intégration responsive, le webdesign et la rédaction web furent à ma charge.</p>",
                        "image1"          => array(
                                                "large"  => "graslin-full2.png",
                                                "medium" => "graslin-full1.png",
                                                "small"  => "graslin-full3.png",
                                                ),
                        "copy2"           => array(
                                                "title" => "Proposition graphique initiale",
                                                "text"  => "<p>Le brief graphique original de Villa Graslin était extrêmement libre. Ma proposition reposait sur un aspect \"plein écran\" inspiré par la mode actuelle et les interfaces type \"metro\" (windows 8, Xbox...). Le logo et le code couleurs étaient alors les seuls éléments imposés. La production finale se sera inspiré de quelques éléments de cette première maquette pour coller parfaitement aux besoins du client.</p>",
                                                ),
                        "image2"          => array(
                                                1 => array("large"  => "graslin-showcase2.jpg",
                                                            "medium" => "graslin-showcase1.jpg",
                                                            "small"  => "graslin-showcase3.jpg",
                                                            ),
                                                2 => array("large"  => "graslin-showcase2b.jpg",
                                                            "medium" => "graslin-showcase1b.jpg",
                                                            "small"  => "graslin-showcase3b.jpg",
                                                            ),
                                                ),
                        "copy3"           => "<p>Cette intégration bénéficiait d'une carte interactive Google Maps entièrement personnalisée pour correspondre au code couleur imposé. Une autre partie du dévéloppement spécifique final se retrouve dans le formulaire de contact, utilisant Ajax.</p>",
                  ),
                  "protectas" => array(
                        "route"           => "protectas",
                        "cover"           => array(
                                                "large"  => "protectas2.jpg",
                                                "medium" => "protectas1.jpg",
                                                "small"  => "protectas3.jpg",
                                                ),
                        "tags"            => "web responsive integration webdesign redaction",
                        "url"             => "www.protectas.fr",
                        "url_safe"        => "www.protectas.fr",
                        "name"            => "Protectas",
                        "date"            => "Octobre 2012",
                        "type"            => array("Intégration responsive", "Rédaction", "Webdesign"),
                        "gestion"         => array("url" => "http://www.speederlan.eu/", "name" => "Speederlan"),
                        "design"          => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "copy1"           => "<p>Ce site responsive est à la base une refonte du visuel et des contenus de l'entreprise. Le webdesign simple et clair répond aux demandes du client, et l'utilisation du framework Foundation ont fait de ce site vitrine un projet efficace et économique.</p>
                                              <p>La gestion de projet et le logo sont au crédit de Speederlan SIII. L'intégration responsive, le webdesign et la rédaction web furent à ma charge.</p>",
                        "image1"          => array(
                                                "large"  => "protectas-full2.png",
                                                "medium" => "protectas-full1.png",
                                                "small"  => "protectas-full3.png",
                                                ),
                  ),
                  "mywebbox" => array(
                        "route"           => "mywebbox",
                        "cover"           => array(
                                                "large"  => "webbox2.jpg",
                                                "medium" => "webbox1.jpg",
                                                "small"  => "webbox3.jpg",
                                                ),
                        "tags"            => "web responsive integration redaction",
                        "url"             => "www.mywebbox.fr",
                        "url_safe"        => "www.mywebbox.fr",
                        "name"            => "My web box",
                        "date"            => "Février 2013",
                        "type"            => array("Intégration responsive", "SEO"),
                        "gestion"         => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "design"          => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "copy1"           => "<p>Une nouvelle agence officiant sur tout l'Ouest, SIII cherchait à compléter l'intégration de son site web responsive, ainsi qu'un rédacteur web pour ses contenus. Cette expérience m'a apporté l'opportunité de travailler sur une structure PHP sur-mesure.</p>
                                              <p>La gestion de projet et la direction artistique, ainsi que le développement back-end reviennent à l'agence SIII. Mon travail est concentré sur l'intégration et la rédaction web.</p>",
                        "image1"          => array(
                                                "large"  => "mywebbox-full2.png",
                                                "medium" => "mywebbox-full1.png",
                                                "small"  => "mywebbox-full3.png",
                                                ),
                  ),
                  "speederlan" => array(
                        "route"           => "speederlan",
                        "cover"           => array(
                                                "large"  => "speederlan2.jpg",
                                                "medium" => "speederlan1.jpg",
                                                "small"  => "speederlan3.jpg",
                                                ),
                        "tags"            => "web responsive integration redaction",
                        "url"             => "www.speederlan.eu",
                        "url_safe"        => "www.speederlan.eu",
                        "name"            => "Speederlan",
                        "date"            => "Octobre 2012",
                        "type"            => array("Intégration responsive", "Rédaction"),
                        "gestion"         => array("url" => "http://www.speederlan.eu/", "name" => "Speederlan"),
                        "design"          => array("url" => "http://www.speederlan.eu/", "name" => "Speederlan"),
                        "copy1"           => "<p>Une nouvelle agence officiant sur tout l'Ouest, SIII cherchait à compléter l'intégration de son site web responsive, ainsi qu'un rédacteur web pour ses contenus. Cette expérience m'a apporté l'opportunité de travailler sur une structure PHP sur-mesure.</p>
                                              <p>La gestion de projet et la direction artistique, ainsi que le développement back-end reviennent à l'agence SIII. Mon travail est concentré sur l'intégration et la rédaction web.</p>",
                        "image1"          => array(
                                                "large"  => "speederlan-full2.png",
                                                "medium" => "speederlan-full1.png",
                                                "small"  => "speederlan-full3.png",
                                                ),
                  ),
                  "mktnews" => array(
                        "route"           => "mktnews",
                        "cover"           => array(
                                                "large"  => "mkt2.jpg",
                                                "medium" => "mkt1.jpg",
                                                "small"  => "mkt3.jpg",
                                                ),
                        "tags"            => "web responsive integration webdesign",
                        "url"             => "www.benrajalu.net/MKTNews/index.html",
                        "url_safe"        => "www.benrajalu.net/MKTNews/",
                        "name"            => "MKT News",
                        "date"            => "Octobre 2012",
                        "type"            => array("Intégration responsive", "Webdesign"),
                        "gestion"         => array("url" => "http://www.mktlines.com/", "name" => "MKT Lines"),
                        "design"          => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "copy1"           => "<p>Une newsletter responsive, MKT News était un prototype pour l'agence MKT Lines. Partant du principe que les abonnée reçoivent leurs emails sur divers supports, il semblait pertinent de leur proposer un outil qu'il s'y adapte.</p>
                                              <p>La direction artistique est celle de MKT Lines puisque ce site reprend les codes de leur site principal. Le concept et l'intégration web responsive sont à mon crédit.</p>",
                        "image1"          => array(
                                                "large"  => "mkt-full2.png",
                                                "medium" => "mkt-full1.png",
                                                "small"  => "mkt-full3.png",
                                                ),
                  ),
                  "jenfu" => array(
                        "route"           => "jenfu",
                        "cover"           => array(
                                                "large"  => "jenfu2.jpg",
                                                "medium" => "jenfu1.jpg",
                                                "small"  => "jenfu3.jpg",
                                                ),
                        "tags"            => "web integration",
                        "url"             => "www.jenfu.co.uk",
                        "url_safe"        => "www.jenfu.co.uk",
                        "name"            => "Jen Fu",
                        "date"            => "Juin 2012",
                        "type"            => array("Intégration"),
                        "gestion"         => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "design"          => array("url" => "http://www.jenfu.co.uk/", "name" => "Jen Fu"),
                        "copy1"           => "<p>Jen Fu est une directrice artistique basée à Londres. Je venais de compléter mon portfolio lorsqu'elle m'a demandé de travailler sur le sien. Très décidée sur l'aspect visuel de son site, elle m'a laissé réaliser l'intégralité du travail technique nécéssaire pour y parvenir. Le site bénéficie également d'une pointe de reponsive pour les tablettes.</p>
                                              <p>La direction artistique et le webdesign ont donc été réalisés par Jen Fu elle-même, tandis que je me suis chargé de l'intégration web et du développement php basique de son portfolio.</p>",
                        "image1"          => array(
                                                "large"  => "jenfu-full2.png",
                                                "medium" => "jenfu-full1.png",
                                                "small"  => "jenfu-full3.png",
                                                ),
                  ),
                  "lightscream" => array(
                        "route"           => "lightscream",
                        "cover"           => array(
                                                "large"  => "lightscream2.jpg",
                                                "medium" => "lightscream1.jpg",
                                                "small"  => "lightscream3.jpg",
                                                ),
                        "tags"            => "web integration webdesign redaction developpement",
                        "url"             => "www.lightscream.com",
                        "url_safe"        => "www.lightscream.com",
                        "name"            => "Light Scream",
                        "date"            => "Décembre 2011",
                        "type"            => array("Intégration", "Webdesign", "Développement", "Rédaction"),
                        "gestion"         => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "design"          => array("url" => "http://www.benrajalu.net/", "name" => "Benoit Rajalu"),
                        "design2"         => array("url" => "http://www.cie-tg.ch/", "name" => "Tamara Gvozdenovic"),
                        "copy1"           => "<p>Je travaille en tant que bénévole pour la compagnie Tamara Gvozdenovic depuis 2010. En cours de formation, j'ai pu réaliser ce site dynamique pour l'une des pièces de la chorégraphe. Ce projet m'a permis d'apréhender les problématiques de développement back-end, l'intégration, la création d'un site mobile ainsi que le webdesign. C'est donc un projet très complet, réalisé en autonomie.</p>
                                              <p>La direction artistique revient cependant à la compagnie Tamara Gvozdenovic. J'ai réalisé le développement web, l'intégration, la rédaction des contenus et le webdesign.</p>",
                        "image1"          => array(
                                                "large"  => "lightscream-full2.png",
                                                "medium" => "lightscream-full1.png",
                                                "small"  => "lightscream-full3.png",
                                                ),
                        "copy2"           => array(
                                                "title" => "Site mobile",
                                                "text"  => "<p>Parfois, le responsive design ne suffit pas, ou n'est pas pertinant. Ici, il était surtout un peu tôt pour l'utiliser correctement. C'est donc grâce à un script de détection de l'appareil visiteur que les utilisateurs d'appareils mobiles se verront proposé une version mobile du site .</p>
                                                            <p>Depuis le back-office sur-mesure, l'administrateur peut controller à la fois le site \"standard\" et ce second support, très simplement.</p>",
                                                ),
                        "image2"          => array(
                                                1 => array("large"  => "lightscream-showcase2.png",
                                                            "medium" => "lightscream-showcase1.png",
                                                            "small"  => "lightscream-showcase3.png",
                                                            ),
                                                ),
                  ),
                  "pmm" => array(
                        "route"           => "pmm",
                        "cover"           => array(
                                                "large"  => "pmm2.jpg",
                                                "medium" => "pmm1.jpg",
                                                "small"  => "pmm3.jpg",
                                                ),
                        "tags"            => "web integration",
                        "url"             => "www.perpetualmotionmachine.fr",
                        "url_safe"        => "www.perpetualmotionmachine.fr",
                        "name"            => "Perpetual Motion Machine",
                        "date"            => "Janvier 2012",
                        "type"            => array("Intégration"),
                        "gestion"         => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "design"          => array("url" => "http://www.perpetualmotionmachine.fr/", "name" => "Perpetual Motion Machine"),
                        "copy1"           => "<p>Au début de ma coopération avec l'agence Perpetual Motion Machine, l'équipe m'a laissé participer à l'intégration de leur site vitrine. L'utilisation des sprites, le debuggage et les tests de compatibilité fûrent au coeur de mon travail, sans oublier quelques tâches d'intégration.</p>
                                              <p>La direction artistique, la gestion de projet et la rédaction web sont toutes au crédit de l'agence. Mon travail s'est limité donc à l'intégration.</p>",
                        "image1"          => array(
                                                "large"  => "pmm-full2.png",
                                                "medium" => "pmm-full1.png",
                                                "small"  => "pmm-full3.png",
                                                ),
                  ),
                  "kindle" => array(
                        "route"           => "kindle",
                        "cover"           => array(
                                                "large"  => "kindle2.jpg",
                                                "medium" => "kindle1.jpg",
                                                "small"  => "kindle3.jpg",
                                                ),
                        "tags"            => "web integration redaction developpement",
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
                        "route"           => "henrimichel",
                        "cover"           => array(
                                                "large"  => "henrimichel2.jpg",
                                                "medium" => "henrimichel1.jpg",
                                                "small"  => "henrimichel3.jpg",
                                                ),
                        "tags"            => "web integration",
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
                        "route"           => "optimiis",
                        "cover"           => array(
                                                "large"  => "optimiis2.jpg",
                                                "medium" => "optimiis1.jpg",
                                                "small"  => "optimiis3.jpg",
                                                ),
                        "tags"            => "web integration",
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
                        "route"           => "aln",
                        "cover"           => array(
                                                "large"  => "aln2.jpg",
                                                "medium" => "aln1.jpg",
                                                "small"  => "aln3.jpg",
                                                ),
                        "tags"            => "print redaction",
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
                        "route"           => "tamgvoz",
                        "cover"           => array(
                                                "large"  => "tamgvoz2.jpg",
                                                "medium" => "tamgvoz1.jpg",
                                                "small"  => "tamgvoz3.jpg",
                                                ),
                        "tags"            => "print redaction",
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
