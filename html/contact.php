<?php   
       session_start();  
     
 // GESTION DU FORMULAIRE
 
           
       if(isset($_GET['action'])) // nommé "action" par moi, c'est un attribu, comme p
         {
           switch($_GET['action']) // Switch permet de donner une liste de cas. On passe alors la query string des pages concernée par le 'action'
                  {
                  case "formulaire_vide": //le formulaire étant vide à l'ouverture, ouvrir la page contact en tant que action="formulaire_vide"
                       $form_action="formulaire_plein";

                  
                  break; // obligatoire pour séparer deux cas
                  
                        case "formulaire_plein":
                              
                              $form_action="formulaire_plein";
                              
                              $choix[$_POST['subject']]="selected=\"selected\"";
                            
                             if(!$_POST['name'])
                                {
                                $avertissement="Veuillez saisir votre nom";
                                $colorisation['nom']="class=\"couleur_champ\""; // Ajoute un id #couleur_champ, qu'il faudra if(isset) dans le html 
                                }
                          elseif(!$_POST['email'])
                                {
                                $avertissement="Veuillez saisir votre Email";
                                $colorisation['couriel']="class=\"couleur_champ\"";
                                }
                          elseif(!$_POST['subject'])
                                {
                                $avertissement="Veuillez choisir un sujet";
                                $colorisation="class=\"couleur_champ\"";
                                }
                          elseif(!$_POST['message'])
                                {
                                $avertissement="Veuillez saisir votre message";
                                $colorisation['content']="class=\"couleur_champ\"";
                                }
                            else
                               { 
                                $avertissement="Message reçu !";
                               
                                    $to = 'rajalubenoit@gmail.com';
                                    $from = stripslashes($_POST['name']);
                                    $expediteur = stripslashes($_POST['email']);    
                                    $message = $_POST['message'];
                                    $about = stripslashes($_POST['subject']);
                                                                                                               
                                    $subject = 'Contact via Portfolio'; //sujet
                                    $headers = 'Mime-Version: 1.0'."\r\n"; //header
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                    $headers .= 'From: '.strtoupper($from).' <'.$expediteur.'>'."\r\n\r\n";    
                                    $msg="
                                      <html>
                                      <head>
                                      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
                                      </head>
                                        <body>
                                          <center>
                                         
                                            <table height=595px width=498px border=0 cellspacing=0 cellpadding=0 bgcolor:white;>                                                
    
                                              <tr>
                                              <td width=48 height=81 bgcolor=black></td>
                                              <td title=\"Messagerie Light Scream\" bgcolor=gray width=402 height=81></td>
                                              <td title=\"Nouveau Message\" bgcolor=gray width=48 height=81></td>
                                              </tr>
                                              
                                              <tr>
                                              <td height=40px bgcolor=black width=48px></td>
                                              <td bgcolor=black height=40px width=402px color=#BDBDBD style=\"background-position:top center; background-repeat:no-repeat; background-image:url('http://buroscope.eu/csi/br/www/lightscream/letter/tranche05.png'); background-color:black; color:#BDBDBD;\"> <span style=\"padding-left:20px;\">Sujet : " . ucfirst($about) .  " </span> </td>
                                              <td bgcolor=black height=40px width=48px style=\"background-position:top center; background-repeat:no-repeat; border:none; margin:0; background-image:url('http://buroscope.eu/csi/br/www/lightscream/letter/tranche06.png');\"></td>
                                              </tr>
                                              
                                              <tr>
                                              <td bgcolor=black width=48px height=29px></td>
                                              <td bgcolor=black width=402px height=29px><span style=\"padding-left:20px; color:#BDBDBD;\">" . ucfirst($from) . " dit :</span></td>
                                              <td bgcolor=black width=48px height=29px style=\"background-position:top center; background-repeat:no-repeat; background-image:url('http://buroscope.eu/csi/br/www/lightscream/letter/tranche09.png')\"></td>
                                              </tr>
                                              
                                              <tr>
                                              <td bgcolor=black width=48px height=380px></td>
                                              <td bgcolor=#212121 width=402px height=380px style=\"vertical-align:top;\"><textarea name=\"mmms\" type=\"text\" style=\"padding:20px; color:#BDBDBD; background-color:#212121; width:80%; height:380px; border:none; resize:none;\" disabled=\"disabled\">" . stripslashes($message) . "</textarea></td>
                                              <td bgcolor=black width=48px height=380px style=\"background-position:top center; background-repeat:no-repeat; background-image:url(http://buroscope.eu/csi/br/www/lightscream/letter/tranche12.png); color:#BDBDBD;\"></td>
                                              </tr>
                                              
                                              <tr>
                                              <td height=40px bgcolor=black width=48px></td>
                                              <td height=40px width=402px bgcolor=black style=\"color:#BDBDBD;\"><span style=\"padding-left:20px; float:right;\">Lui répondre : " . $_POST['email'] . "</span></td>
                                              <td height=40px bgcolor=black width=48px></td>
                                              </tr>
                                        
                                              <tr>
                                              <td height=25px bgcolor=black width=48px></td>
                                              <td height=25px width=402px bgcolor=black style=\"background-position:top center; background-repeat:no-repeat; background-image:url(http://buroscope.eu/csi/br/www/lightscream/letter/tranche17.png); color:#BDBDBD;\"></td>
                                              <td height=25px bgcolor=black width=48px></td>
                                              </tr>
                                        
                                              </table>"; 
                                          
                                    
                                    mail($to, $subject, $msg, $headers);//fonction d'envoi de mail
                                   }              
                  break;
                  }
         } // fermeture du if  
         else
         {
         $form_action="formulaire_plein";
         }                
     
       include("contact.html"); //Pour que le php intégré au global.html soit lu, il faut que global soit lui-même lu dans du php, d'où cette intégration   
       // la page complète global.html arrive à la fin, puisque tout le reste des opé du haut a lieu dans cette page là. Logique. 
?> 
