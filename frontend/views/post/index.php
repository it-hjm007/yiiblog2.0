<?php
use frontend\widgets\post\PostWidget;
use yii\base\Widget;
use frontend\widgets\hot\HotWidget;
?>
<div class="row">
	<div class="col-lg-9">
		<?=PostWidget::widget(['limit'=>1])?>
	</div>
	<div class="col-lg-3">
		<!--热门浏览-->
		<?=HotWidget::widget()?>
	</div>
</div>