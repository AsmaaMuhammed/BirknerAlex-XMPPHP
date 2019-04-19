<?php
require_once './vendor/autoload.php';

//$XMPP = new \BirknerAlex\XMPPHP\XMPP('talk.google.com', 5222, 'asmmohhasanien@gmail.com', 'pass','xmpphp');//, 'gmail.com');
$XMPP = new \BirknerAlex\XMPPHP\XMPP('127.0.0.1', 5222, 'admin@example.com', 'asmaa123@fci','xmpphp');

$XMPP->connect();
$XMPP->processUntil('session_start', 10);
$XMPP->presence();
$x = $XMPP->message('user1@example.com', 'Hello, how are you?', 'chat');
echo 'Connected';
sleep(40);
$XMPP->disconnect();
echo 'Disconnected';
echo $x; //# of bytes of sended msg
?>