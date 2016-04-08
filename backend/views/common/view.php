<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$controller = $this->context;
$menuInfos = $controller->menuInfos;
$this->title = $menuInfos['menuTitle'];
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-edit"></i><?= $menuInfos['menuBreadCrumb']; ?></h2>
                <div class="box-icon"></div>
            </div>
            <div class="box-content">
                <?= DetailView::widget($detailViewParams); ?>
            </div>
        </div>
    </div>
</div>
