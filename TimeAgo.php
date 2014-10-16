<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\timeago;

use Yii;
use yii\helpers\Html;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

/**
 *
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class TimeAgo extends Widget
{

    public $options = ['class' => 'timeago'];
    public $timestamp;

    public function init()
    {
        TimeAgoAsset::register($this->getView());
        $this->getView()->registerJs("jQuery('.{$this->options['class']}').timeago();", 4, 'timeago');
    }

    public function run()
    {
        if ($this->timestamp) {
            echo Html::tag('time', Yii::$app->formatter->asDatetime($this->timestamp), ArrayHelper::merge($this->options, ['datetime' => $this->timestamp]));
        }
    }

}
