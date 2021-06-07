<?php
namespace Page\Acceptance;

/**
 * Страница клиенты
*/
class CustomersPage
{

    /*
    URL страницы клиенты
    */
    public static $URL = 'customers';
    
    /**
     * селектор для panel-title, где текст "Клиенты"
     */
    public static $TitleCustomer = "#main-content-block > div > div.panel-heading.ui-draggable-handle > h3";    

    /** 
    *  Селектр блока "
    */
    public static $BlocksCustomers = '#DataTables_Table_0_wrapper > div.table-responsive > table > tbody > tr';
}
