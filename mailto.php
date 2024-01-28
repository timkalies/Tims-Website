<?php

if($_POST["message"]) {

mail("kontakt@timkalies.de", "Kontakt",

$_POST["insert your message here"]. "From: an@email.address");

}

?>