<?php
    if (isset($_POST['fullname'])) {
    }

    if (isset($_POST['fullname'])) {
        $content = '
        <p><b>Name: </b>'. $_POST['fullname'] .'<br><br></p>
		<p><b>Phone: </b>'. $_POST['tel'] .'<br><br></p>
        <p><b>Email: </b>'. $_POST['email'] .'<br><br></p>
        <p><b>Message: </b>'. $_POST['message'] .'<br><br></p>';
        
        $header = "From: ". $_POST['email'] ."\nReply-To:". $_POST['email'] ."\n";
        $header .= "Mime-Version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\r\n";
        $subject = "Message from website";
        
        if( mail ("ptech@onepeterson.com", $subject, $content, $header )){
            header('Location:index.php');
        }

        else{
            echo "<h1>Error al enviar el mail</h1>";
        }
    }

?>
