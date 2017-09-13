<?php
$this->title='Quản lí hình ảnh';
//$baseUrl= Yii::$app->urlManager->baseUrl; //như này sẽ ra kq: /yiidemo/backend/web 
$baseUrl= str_replace('/backend/web','',Yii::$app->urlManager->baseUrl); // /yiidemo  
echo $baseUrl;
?>
<div class="file-index">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $this->title; ?></h3>
	</div>
	<div class="panel-body">
		<iframe src="<?php echo $baseUrl ?>/file/dialog.php" style="width: 100%; height: 500px;"></iframe>
	</div>
</div>
