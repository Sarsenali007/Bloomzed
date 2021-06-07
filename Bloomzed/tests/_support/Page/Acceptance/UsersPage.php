<?php
namespace Page\Acceptance;

/**
 * Страница Сотрудники
*/
class UsersPage
{

    /**
     * URL страницы сотрудники
     */
    public static $URL = 'users';
    
    /** 
    *  Селектр panel-title, где текст "Панель управления"
    */
    public static $TitleUsers = '#main-content-block > div > div.panel-heading.ui-draggable-handle > h3';

    /** s
    *  Селектр блока "
    */
    public static $BlocksUsers = '#DataTables_Table_0_wrapper > div.table-responsive > table > tbody > tr';

}