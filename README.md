Yii2  Simple Calendar widget
======================

Wrapper around [donatj/SimpleCalendar](https://github.com/donatj/SimpleCalendar)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist squio/yii2-simplecalendar "*"
```

or add

```
"squio/yii2-simplecalendar": "*"
```

to the require section of your `composer.json` file.


Usage
-----

```
use squio\widgets\simplecalendar\Calendar;


$events = [
	["Test event", '2016-04-12'],
	["Three days", '2016-04-12', '2016-04-14'],
	["<b>Bold Event</b>", '2016-04-16'],
	["<span style=\"color:red\">Colorful week</span>", '2016-04-11', '2016-04-17'],
];

echo Calendar::widget(['events' => $events]);
```

To modify the starting day of the week (left most column):

```
<?= Calendar::widget(['startOfWeek' => 'Monday', 'events' => $events]); ?>
```

To modify the calendar's date:

```
<?= Calendar::widget(['date' => '2015-12-25', 'events' => $events]); ?>
```

Localization: SimpleCalendar uses yii::$app->language when set.
This only works if your language is a recognized [LC_TIME](https://secure.php.net/manual/en/function.setlocale.php) value.

See [donatj/SimpleCalendar](https://github.com/donatj/SimpleCalendar) for more information about usage.
