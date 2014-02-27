<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\timeago;

use yii\helpers\Html;
use yii\widgets\InputWidget;
use yii\base\Formatter;
use yii\helpers\ArrayHelper;

/**
 * 
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class TimeAgo extends InputWidget
{

    public $options = ['class' => 'timeago'];
    public $timestamp;

    public function init()
    {
        TimeAgoAsset::register($this->getView());
        $this->getView()->registerJs('jQuery(".timeago").timeago();', 4, 'timeago');
    }

    public function run()
    {
        if ($this->timestamp) {
            $formatter = new Formatter;
            echo Html::tag('time', $formatter->asDatetime($this->timestamp), ArrayHelper::merge($this->options, ['datetime' => $this->timestamp]));
        }
    }

}