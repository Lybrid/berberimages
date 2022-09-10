<?php
if($_POST['message']) {
    mail("booking@berberimages.com",
     "Form to email message", $_POST["message"], "From: an@email.address");
}
?>