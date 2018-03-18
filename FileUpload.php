<?php
include('session.php');
if(isset($_POST['upload']))
{
	echo $login_session;
	$ext = substr($_FILES['fileToUpload']['name'], strpos($_FILES['fileToUpload']['name'],'.'), strlen($_FILES['fileToUpload']['name'])-1);     
    $imageName = "$login_session".$ext;
    $normalDestination = "photo/".$imageName;
    		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $normalDestination))
    		{
			echo "success";
		}
		else
		{
			echo "not";
		}
}	
?>	
