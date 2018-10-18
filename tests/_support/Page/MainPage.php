<?php //location: tests/_support/Page/MainPage.php
namespace Page;

/** Главная страница */

class MainPage
{
    // include url of current page
    public static $URL = '/';

    public static $elements = array(
        'раздел Афиша' => "//*[@id='wd-wrapper-_afisha']",
        'гиперссылка Афиша' => "//*[@data-statlog='afisha.title.link']",
        'иконка Погода' => "//*[@class='weather__icon weather__icon_ovc']|//*[@class='weather__icon weather__icon_skc_d']",
    );

    public static function getElement($name){
        return self::$elements[$name];
    }

}