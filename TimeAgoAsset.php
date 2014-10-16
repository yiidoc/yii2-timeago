<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\timeago;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class TimeAgoAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@bower/jquery-timeago';
    public $js = ['jquery.timeago.js'];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
