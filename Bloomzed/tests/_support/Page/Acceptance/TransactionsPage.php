<?php
namespace Page\Acceptance;

/**
 * Страница транзакции
 */
class TransactionsPage
{
    /**
     * URL страницы транзакции
     */
    public static $URL = 'users';
    
    /** 
    *  Селектр panel-title, где текст "Транзакции"
    */
    public static $TitleUsers = '#main-content-block > div > div.panel-heading.ui-draggable-handle > h3';

    /** 
    *  Селектр блока "
    */
    public static $BlocksTransaction = '#DataTables_Table_0_wrapper > div.table-responsive > table > tbody > tr';

}
