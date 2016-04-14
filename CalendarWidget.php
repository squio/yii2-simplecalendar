<?php

namespace squio\widgets\simplecalendar;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use donatj\SimpleCalendar;

use CalendarAsset;

class SimpleCalendar extends Widget
{
    public $events = [];
    

    public function init()
    {
    	if (yii::$app->language) {
	        setlocale(LC_TIME, yii::$app->language);
	    }
        parent::init();
    }

    public function run()
    {
        $this->registerAssets();
        $calendar = new \donatj\SimpleCalendar();
        
        $calendar->setStartOfWeek('Monday');

        foreach ($this->events as $date => $evtlist) {
            foreach ($evtlist as $event) {
                $calendar->addDailyHtml($event, $date);
            }
        }

        return $calendar->show(false);

    }



    /**
     * Registers required assets and the executing code block with the view
     * @return void
     */
    protected function registerAssets()
    {
        CalendarAsset::register($this->getView());
    }

}
