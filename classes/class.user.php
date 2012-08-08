<?php
class User
{
    $id = 0;
    $firstname = '';
    $lastname = '';
    $nickname = '';
    $email = '';

    function __construct( $id, $firstname, $lastname, $nickname, $email )
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
        $this->email = $email;
    }

    function __destruct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
?>
