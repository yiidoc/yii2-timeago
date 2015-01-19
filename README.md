yii2-timeago
============

Timeago is a jQuery plugin that makes it easy to support automatically updating fuzzy timestamps. Forked from @rmm5t for Yii2 framework


## Installation

Either run
```
composer global require "fxp/composer-asset-plugin:1.0.0-beta4"
```

And add

```
"yiidoc/yii2-timeago": "dev-master",
```

## Usage

```
<?= \yii\timeago\TimeAgo::widget(['timestamp' => $model->published_at]); ?>
```


Now you can use the widget.
If you have time, I will write detailed instructions.
If you want to change or issue. please open the issue or create pull
Thanks for use.