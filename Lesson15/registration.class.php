<?php

class Registration
{

    private $name;
    private $email;
    private $password;
    private $confirmPassword;

    public function __construct(Array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->confirmPassword = $data['confirmPassword'];
    }

    public function passwordMatch()
    {

        return $this->password == $this->confirmPassword;
    }

    public function validate()
    {
        return !empty($this->name) && !empty($this->email) && !empty($this->password) && !empty($this->confirmPassword) && $this->passwordMatch();
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}

?>