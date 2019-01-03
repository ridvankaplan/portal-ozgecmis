<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
$this->title = 'Özgeçmiş';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
//Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
//echo $this->render('index');
//Portlet::end();
?>

<div class="site-index">
	 
		<h1>Yönlendirme!!!</h1>
		<br/>
        <p><a class="btn btn-lg btn-success" href="/ozgecmis/kullanici/">Kayıtlı Özgeçmiş Listele</a>
		
</div>