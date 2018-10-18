<?php //location: tests/_support/Page/AfishaPage.php
namespace Page;

/** Афиша */

class AfishaPage
{
    // include url of current page
    public static $URL = '/moscow?utm_source=yamain&utm_medium=yamain_afisha/';

    public static $elements = array(
        'строка Поиска' => '//*[@class="header2__main"]//input[@class="input__control"]',

    );

    public static function getElement($name){
        return self::$elements[$name];
    }

}
