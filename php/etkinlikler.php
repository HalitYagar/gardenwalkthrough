<?php

	$etkinlikler = array(
		'e1' => array(
			'url' => 'lib/images/e1.jpg' ,
			'context' => 'ilk etkinligimiz'
		),
		'e2' => array(
			'url' => 'lib/images/e2.jpg' ,
			'context'  => 'bir diger etkinligimiz'
		)
	);

	$text = json_encode($etkinlikler);

	//echo $text ;

	//$etkinlikler = json_decode($text);

	//echo  $etkinlikler[1]['url'];

	$p = fopen("etkinlikler.json", "w");


	fwrite($p , $text );


?>
