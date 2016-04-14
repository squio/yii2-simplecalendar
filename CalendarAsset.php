<?php

namespace squio\widgets\simplecalendar;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the css/js files for the [[SimpleCalendar]] widget.
 */
class CalendarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/squio/yii2-widgets/simplecalendar/assets';
    public $js = [
    ];
    public $css = [
        'calendar.css'
    ];
    public $depends = [
    ];
}
