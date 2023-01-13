<?php
$result=mail("test@test.ru","Анкета сайта","сообщение(тело письма)");
if ($result) {
	echo "<p> Cообщение отправлено </p>";
}
else {
	echo"<p> не отправлено </p>";
}

?>