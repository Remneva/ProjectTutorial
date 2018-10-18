<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */

//Подключает gherkin context для phpStorm (!!!)
namespace Behat\Behat\Context {
    interface Context
    {
    }
}

namespace {

    use Codeception\PHPUnit\Constraint\Page;

    class AcceptanceTester extends \Codeception\Actor implements \Behat\Behat\Context\Context
    {
        use _generated\AcceptanceTesterActions;

        /**
         * Define custom actions here
         */

        /**
         * @When пользователь находится на странице :page
         */
        public function step_beingOnMainPage($page)
        {
            // Инициализируется нужный pageObject
            $this->currentPage = $this->pages[$page];
            $curPage = $this->currentPage;
            $this->amOnPage($curPage::$URL);
        }


        /**
         * @Then на странице присутствует :element
         */
        public function step_seeElement($element)
        {
            $this->waitForElementVisible($this->getPageElement($element));
            $this->seeElement($this->getPageElement($element));
        }

        /**
         * @Then пользователь нажимает на :button
         */
        public function step_clickOnButton($button)
        {
            $this->click($this->getPageElement($button));
        }

        /**
         * @Then вводит в поле :field текст :text
         */
        public function step_fillField($field, $text)
        {
            $this->fillField($this->getPageElement($field), $text);
        }

        /**
         * @Then пользователь удаляет текст в поле :field
         */
        public function step_deleteText($field)
        {
            $this->clearField($this->getPageElement($field));
        }

        /**
         * @Then нажал на клавиатуре ENTER
         */
        public function step_keyboardButton()
        {
            $this->pressKey('//input',WebDriverKeys::ENTER);
        }

        private $currentPage;
        private $pages = array(
            "Главная страница" => "\Page\MainPage",
            "Афиша" => "\Page\AfishaPage",
            "Афиша - Результаты поиска" => "\Page\AfishaResult"
        );

        /**
         * @When пользователь перешел на страницу :page
         */
        public function step_beingOn($page)
        {
            // Инициализируется нужный pageObject БЕЗ проверки урла
            $this->currentPage = $this->pages[$page];

        }

        private function getPageElement($elementName)
        {
            //Берет нужный элемент по его имени с нужной страницы
            $curPage = $this->currentPage;
            return $curPage::getElement($elementName);
        }

    }
}
