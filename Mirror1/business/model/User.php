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
    
    /**
     * Data constructor for a user object, passing parameters for all properties
     *
     * @param int $passID
     * @param string $passUsername
     * @param string $passPassword
     * @param string $passEmail
     * @return void
     */
    function __construct($passID, $passUsername, $passPassword, $passEmail) {
        $this->id = $passID;
        $this->username = $passUsername;
        $this->password = $passPassword;
        $this->email = $passEmail;
    }
    
    // getters and setters
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

?>
