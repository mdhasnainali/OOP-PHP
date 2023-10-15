<?php
class Customer{

    private $id;
    private $firstName;
    private $lastName;
    private $email;

    //Getter methods
    public function getId(){
        return $this->id;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    // Setter methods
    public function setId($id){
        $this->id = $id;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

?>
    

