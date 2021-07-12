<?php

	// Tworzymy zmienną dla imienia i nazwiska
	$name = $_POST['name'];

	// Tworzymy zmienną dla adresu email
	$email = $_POST['email'];

	// Tworzymy zmienną dla wiadomości
	$message = $_POST['message'];

	// Podajesz adres email z którego ma być wysłana wiadomość
	$from = "Moja strona - portfolio";

	// Podajesz adres email na który chcesz otrzymać wiadomość
	$to = "jacekmaciejak@poczta.fm";

	// Podajesz tytuł jaki ma mieć ta wiadomość email
	$title = `Wiadomość z mojej strony od $email`;

// Przygotowujesz treść wiadomości
$message  ="";
$message .= "Imie i nazwisko: " . $name . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Wiadomość: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomości
$headline = "";
$headline .= "Od:" . $from . " \n";
$headline .= "Content-Type:text/plain;charset=utf-8";


// Wysyłamy wiadomość
$success = mail($to, $title, $message, $headline);

// Przekierowywujemy na potwierdzenie
if ($success){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=confirm.php\">";
}
else{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
?>