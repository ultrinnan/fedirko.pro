<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = 'Player prototype page';
?>
<section class="content">
	<audio controls>
		<source src="/music/AC-DC-Back-in-Black.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
<!--        todo: upload file, compress with FFMPEG, save and show in list-->
	</audio>
</section>
