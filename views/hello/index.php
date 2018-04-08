<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<h1>hello world!</h1>
<h1><?=$hello_str; ?></h1>
<h1><?=$hello_arr[0];?></h1>

<h1><?=Html::encode($hello_script);?></h1>
<h1><?=HtmlPurifier::process($hello_script);?></h1>
<h1><?=$hello_script;?></h1>
