<?php
namespace Test\Acceptance;

use Page\Acceptance\AuthPage;
use Page\Acceptance\CustomersPage;
use Page\Acceptance\FinanseBidsPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\TransactionsPage;
use Page\Acceptance\UsersPage;

class PagesCest
{    
    /**
    * Класс для првоерки добавление в MyWishList
    **/

    public const PRODUCT_NMB = 2;

    /**
     * Функция для авторизации
     */
    protected function login(\AcceptanceTester $I){
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(AuthPage::$email);
        $I->fillField(AuthPage::$email,"zhunisbek.s@bloomzed.com");
        $I->fillField(AuthPage::$Passwd,"qwerty1");
        $I->wait(3);
        $I->click(AuthPage::$BtnLogIn);
    }

    /*
     Функция для выхода из аккаунта и очистка списка
    
    protected function logout(\AcceptanceTester $I){
        $I->amOnPage(ListPage::$URL);
        $I->click(ListPage::$Clear);
        $I->acceptPopup();
        $I->click(ListPage::$logout);
    }
    */

    /**
     * @before login
    */
    public function CheckLoadPagesCest (\AcceptanceTester $I){
    //    $I->amOnPage(MainPage::$URL);
        $I->waitForElementVisible(MainPage::$TitleMain);
        
        $I->amOnPage(CustomersPage::$URL);
        $I->waitForElementVisible(CustomersPage::$TitleCustomer);
        $I->seeNumberOfElements(CustomersPage::$BlocksCustomers, 10);

        $I->amOnPage(FinanseBidsPage::$Url);
        $I->waitForElementVisible(FinanseBidsPage::$TitleFinanse);
        $I->seeNumberOfElements(FinanseBidsPage::$BlocksFinanse, 10);

        $I->amOnPage(TransactionsPage::$URL);
        $I->waitForElementVisible(TransactionsPage::$TitleUsers);
        $I->seeNumberOfElements(TransactionsPage::$BlocksTransaction, 10);

        $I->amOnPage(UsersPage::$URL);
        $I->waitForElementVisible(UsersPage::$TitleUsers);
        $I->seeNumberOfElements(UsersPage::$BlocksUsers, 10);
        
    }
}