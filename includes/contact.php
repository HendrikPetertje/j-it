<?php
$field_name = $_POST['cf_name'];
$field_phone = $_POST['cf_phone'];
$field_message = $_POST['cf_message'];

$mail_to = 'j-it@outlook.com';
$subject = 'Snelcontact ingevuld op uw site door '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Telefoon: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.'info@j-it.nl'."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Bedankt, er zal zo snel mogelijk contact met u opgenomen worden');
		window.history.back();
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Het versturen van uw bericht mislukte check uw gegevens en probeer het nog eens');
		window.history.back();
	</script>
<?php
}
?>