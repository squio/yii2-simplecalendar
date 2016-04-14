Yii2  SimpleCalendar widget 
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
use squio\widgets\simplecalendar;

echo SimpleCalendar::widget([options]);
```