<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Navigation */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Navigations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navigation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Navigation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alias',
            'urltype:url',
            'display',
            'title',
            // 'color',
            // 'pagealias',
            // 'list_id',
            // 'tag',
            // 'url:url',
            // 'target',
            // 'navigationorder',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
