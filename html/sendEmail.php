<?php

$toemail = ' contact@villa-graslin.fr';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = 'Mime-Version: 1.0'."\r\n"; //header
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '. $name .' <'.$email.'>'."\r\n\r\n";


$msg="
<html>
  <head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
  <meta charset=\"utf-8\">
  </head>
    <body>
      <center>
     
        <table width=\"640\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

        	<tr width=\"640\" height=\"42\">
        		<td width=\"57\" height=\"42\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"42\"></td>
        		<td width=\"57\" height=\"42\"></td>
        	</tr>

        	<tr width=\"640\" height=\"75\">
        		<td width=\"57\" height=\"75\"></td>
        		<td width=\"526\" height=\"75\">
        			<p><em><font color=\"#9fe855\" face=\"Arial\" style=\"font-size:15px\">Contact site Villa Graslin</font><em></p>
        		</td>
        		<td width=\"57\" height=\"75\"></td>
        	</tr>

        	<tr width=\"640\" height=\"67\">
        		<td width=\"57\" height=\"67\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"67\" valign=\"center\">
        			<font face=\"Arial\" style=\"font-size:13pt; line-height:11pt; color:#4E515A;\"><b><em>Message de " . ucfirst($name) . " re&ccdil;u via votre site :</em></b></font>
        		</td>
        		<td width=\"57\" height=\"67\"></td>
        	</tr>

        	<tr width=\"640\" >
        		<td width=\"57\"></td>
        		<td width=\"526\" colspan=\"2\">
        			<p><font face=\"Arial\" style=\"font-size:11pt; line-height:12pt\" color=\"#66666\">" . stripslashes($message) . "</font><p>
        			<p><font face=\"Arial\" style=\"font-size:11pt; line-height:11pt\" color=\"#4E515A\">Lui r&eactue;pondre: " . $email . "</font><p>
    				<font size=\"1\">&nbsp;</font>
        		</td>
        		<td width=\"57\"></td>
        	</tr>

        	<tr width=\"640\" height=\"37\">
        		<td width=\"57\" height=\"37\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"37\">
        			<a href=\"#\" target=\"_blank\" style=\"font-size:13pt; text-decoration: none !important;\"><font color=\"#666666\" face=\"Arial\" style=\"font-size:13pt; text-decoration: none !important;\"><em>www.villa-graslin.fr<em></font></a>
        		</td>
        		<td width=\"57\" height=\"37\"></td>
        	</tr>

        	<tr width=\"640\" height=\"90\">
        		<td width=\"57\" height=\"90\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"90\">
        			<p><font face=\"Arial\" style=\"font-size:11pt; line-height:15pt\" color=\"#99999\">Nom Prenom<br/>
					3 Rue d'Alger<br/>
					44000 Nantes<br/>
					France</font></p>
        		</td>
        		<td width=\"57\" height=\"90\"></td>
        	</tr>

        	<tr width=\"640\" height=\"37\">
        		<td width=\"57\" height=\"37\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"37\">
        			<p><font face=\"Arial\" style=\"font-size:11pt; line-height:15pt\" color=\"#99999\">&nbsp;</font></p>
        		</td>
        		<td width=\"57\" height=\"37\"></td>
        	</tr>

        	<tr width=\"640\" height=\"42\">
        		<td width=\"57\" height=\"42\"></td>
        		<td width=\"526\" colspan=\"2\" height=\"42\"></td>
        		<td width=\"57\" height=\"42\"></td>
        	</tr>


        </table>

    </body>
</html>"; 


if(mail($toemail, 'Contact site Villa Graslin', $msg,  $headers)) {
echo 'Your email was sent successfully.';
} else {
echo 'There was a problem sending your email.';
}

?>