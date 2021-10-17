<?php

class GuestBookUser
{
    /**
     * @var int $userId
     */
    private $userId;

    /**
     * @param string $name ;
     */
    public $name;

    /**
     * @param string $comment ;
     */
    public $text;

    /**
     * @param string $imgURL ;
     */
    public $imgURL;

    /**
     * @param string $email
     */
    public $email;


    /**
     * @param int $userId
     * @param string $comment
     * @throws Exception викидає екзепшн, якщо юзера не знайдено в таблиці users
     */
    public function comment(int $userId, string $comment): void
    {
        // знайти юзера по його id з таблиці users
        // записати в таблицю comments коментар
    }


    /**
     * @param int $userId
     * @param string $name
     * @param string $name
     * @throws Exception викидає екзепшн, якщо юзера не знайдено в таблиці users
     */
    public function sendMailToUser(int $userId, string $name, string $email)
    {
// надіслати юзеру месседж, для верифікації допису

    }


    /**
     * @param int $userId
     * @throws Exception викидає екзепшн, якщо юзера не знайдено в таблиці users Ви не маєте прав на перегляд цієї сторінки
     */

    public function readAllguestbook(int $userId)
    {
// знайти юзера по його id з таблиці users
// показити всі записи у гостьовій книзі

    }

}
