<?php
class Mahasiswa {
    public $firstname, $lastname, $phone_number, $address;

    function __construct($firstname, $lastname, $phone_number, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone_number = $phone_number;
        $this->address = $address;
    }

    function getData() {
        return [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone_number' => $this->phone_number,
            'address' => $this->address
        ];
    }
}
