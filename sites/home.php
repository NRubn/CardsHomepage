<?php
// Inhalt der home.php


function getcontent(){

}
?>
<link rel="stylesheet" type="text/css" href="resource/style/card-style.css">
<section>
<h1>Willkommen</h1>

<p>Wähle deine Karte.</p>

<?php
require_once 'config.php';
//echo CARDS;
require_once CARDS;
$cards = new Cards;

?>
<div class="card-deck">

<?php
	$logo = LOGO;
	/*
	$front = '<img style="width: 69%;" src="'.$logo.'">';
	$front .= '<h2>HOME</h2>';
	$back = '<p>Startseite</p>';
	echo $cards->render($front,$back,'','','home');*/
	
	$front = '<img style="width: 69%;" src="'.$logo.'">';
	$front .= '<h2>Portfolio</h2>';
	$back = "<h2>Comming Soon</h2>";
	echo $cards->render($front,$back,'','resource/img/logo/Portfolio.jpg','contact','portfolio');
	$front = '<img style="width: 69%;" src="'.$logo.'">';
	$front .= '<h2>Gambling</h2>';
	$back = "<p>To The Games</p>";
	echo $cards->render($front,$back,'','','game');
	$front = '<img style="width: 69%;" src="'.$logo.'">';
	$front .= '<h2>Chatroom</h2>';
	$back = '<p>To the Chat</p>';
	echo $cards->render($front,$back,'','','chatroom');
?>


<div class="card-container">
	<div class="card">
		<div class="card-front">
			<img style="width: 69%;" src="<?php echo LOGO ?>">
			<p>Coming Soon</p>
		</div>
		<div class="card-back">
			<b>Geduld</b>
			<p>Ist eine Tugend</p>
		</div>
	</div>
</div>

</div>
</section>

<style>

footer{
	background-color: black;
}

</style>