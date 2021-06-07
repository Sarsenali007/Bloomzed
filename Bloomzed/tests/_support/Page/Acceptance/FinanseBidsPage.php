<?php
namespace Page\Acceptance;


class FinanseBidsPage
{
     /**
     * Страница c покупками
     */
    public static $Url = 'finance/bids';

    /**
     * Селектор итоговой суммы заказа
     */
    public static $TitleFinanse = '#main-content-block > div > div.panel-heading.ui-draggable-handle > h3';

    /** 
    *  Селектр блока "
    */
    public static $BlocksFinanse = '#DataTables_Table_0_wrapper > div.table-responsive > table > tbody > tr';

}
