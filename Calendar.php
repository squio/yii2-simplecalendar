<?php

namespace squio\widgets\simplecalendar;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use donatj\SimpleCalendar;

use squio\widgets\simplecalendar\CalendarAsset;

class Calendar extends Widget
{
    public $events = [];
    public $startOfWeek;
    public $date;

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

        if ($this->startOfWeek) {
            $calendar->setStartOfWeek($this->startOfWeek);
        }
        if ($this->date) {
            $calendar->setDate($this->date);
        }

        foreach ($this->events as $evtlist) {
        	if (count($evtlist) === 3) {
        		$calendar->addDailyHtml($evtlist[0], $evtlist[1], $evtlist[2]);
        	} else {
	        	$calendar->addDailyHtml($evtlist[0], $evtlist[1]);
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
