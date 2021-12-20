<?php

 /*
 * User.php
 * Kacey Morris
 * December 19, 2021
 * CST 451 Code Drop 1 - Login / Register / Home
 *
 * The user class defines the properties of a user object.
 *
 * This is my own work, as influenced by class time and videos.
 */

class User {
    // properties
    private $id;
    private $username;
    private $password;
    private $email;
    
    // constructor
    function __construct($passID, $passUsername, $passPassword, $passEmail) {
        $this->id = $passID;
        $this->username = $passUsername;
        $this->password = $passPassword;
        $this->email = $passEmail;
    }
    
    // getters and setters
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

?>
