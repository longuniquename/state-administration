<?php
/**
 * @var $this IndexController
 * @var $error array
 */

$this->pageTitle = Yii::app()->name . ' - Error';
?>

<h1>Error <?php echo $code; ?></h1>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>