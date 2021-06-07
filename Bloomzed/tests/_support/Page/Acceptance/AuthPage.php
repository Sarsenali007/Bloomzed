<?php
namespace Page\Acceptance;

/**
 * Класс для заполеннеи полей авторизации
*/
class AuthPage
{
        /**
     *  Урл страниы авторизация
     */
    public static $URL = "login";

        /**
     *  Селектр для поля Логин
     */
    public static $email = "#loginform-login";

        /**
     *  Селектр для поля Пароль
     */
    public static $Passwd = "#loginform-pass";
    
        /**
     *  Селектр для кнопки SigIn
     */
    public static $BtnLogIn = "#button-log-in";

}
