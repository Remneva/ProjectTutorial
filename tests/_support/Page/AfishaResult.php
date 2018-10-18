<?php //location: tests/_support/Page/AfishaResult.php
namespace Page;

/** Афиша - Результаты поиска*/

class AfishaResult
{
    // include url of current page
    public static $URL = '/moscow?utm_source=yamain&utm_medium=yamain_afisha&search-text=/';

    public static $elements = array(
        'События в ближайшие дни' => '//*[text()="События в ближайшие дни"]',
        'строка Поиска' => '//*[@class="header2__main"]//input[@class="input__control"]',
    );

    public static function getElement($name){
        return self::$elements[$name];
    }

}