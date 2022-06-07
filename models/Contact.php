<?php

class Contact
{
    public function new($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $message = $data['message'];
        $date = mysqlDate();

        $sql = "INSERT INTO contact (name, email, phone, message, date) 
                VALUES ('$name', '$email', '$phone', '$message', '$date')";
        $created = executeSql($sql);

        if ($created) {
            return true;
        }

        return false;
    }
}
