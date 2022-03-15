<?php
require_once APPROOT . '/libraries/php-activerecord/ActiveRecord.php';

class User extends ActiveRecord\Model
{
    public function addUser($username, $email, $password)
    {
        $user = User::create(array('username' => $username, 'email' => $email, 'password' => $password));
        return true;
    }
    public function checkUserExists($username, $email)
    {
        $user = User::find('all', array('conditions' => array('username=? OR email=?', $username, $email)));
        if (count($user) == 0) {
            return true;
        }
        return false;
    }
    public function loginUser($email, $password)
    {
        $user = User::find('one', array('conditions' => array('email=? AND password=?', $email, $password)));
        if (isset($user->email)) {
            return true;
        } else {
            return false;
        }
    }
}
