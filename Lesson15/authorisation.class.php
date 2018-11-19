/*ДОРАБОТАТЬ и РАЗОБРАТЬСЯ*/
<?php

class Authorisation
{

    private $name;
    private $email;


    public function __construct(Array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];

    }

    public function validate()
    {
        return !empty($this->name) && !empty($this->email) && !empty($this->password);
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




}

?>