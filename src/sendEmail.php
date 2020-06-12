<?php
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('e5e5139f978ba026e49f2400243ce1e1-8b34de1b-8f7db45f');
$domain = "sandbox32f79c72d86d49849a871ef74ae936cf.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox32f79c72d86d49849a871ef74ae936cf.mailgun.org>',
		  'to'      => 'Justin Yeung <yeungj1602@gmail.com>',
		  'subject' => 'Hello Justin Yeung',
		  'text'    => 'Congratulations Justin Yeung, you just sent an email with Mailgun!  You are truly awesome! '));

// You can see a record of this email in your logs: https://app.mailgun.com/app/logs.

// You can send up to 300 emails/day from this sandbox server.
// Next, you should add your own domain so you can send 10000 emails/month for free.
?>