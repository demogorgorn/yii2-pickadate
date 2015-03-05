yii2-pickadate
=====================
Yii2 wrapper for the mobile-friendly, responsive, and lightweight jQuery date & time input picker "Pickadate" (http://amsul.ca/pickadate.js).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist demogorgorn/yii2-pickadate "*"
```

or add

```
"demogorgorn/yii2-pickadate": "*"
```

to the require section of your `composer.json` file.


How to use
----------

On your view file.

```php

<?= \demogorgorn\pickadate\Pickadate::widget([
        'id' => 'startDateInput',
        'name' => 'startDateInput',
        'clientOptions' => [
            'monthsFull' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            'weekdaysShort' => ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
            'today' => 'сегодня',
            'clear' => 'очистить',
            'close' => 'закрыть',
            'format' => 'dd.mm.yyyy',
            'labelMonthNext' => 'Следующий месяц',
            'labelMonthPrev' => 'Предыдущий месяц',
            'labelMonthSelect' => 'Выберите месяц',
            'labelYearSelect' => 'Выберите год',
            'selectMonths' => true,
            'selectYears' => true,
        ]
    ]) ?>

```

For detailed information about all supported options visit http://amsul.ca/pickadate.js
