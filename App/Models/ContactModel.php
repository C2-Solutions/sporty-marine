<?php

class Contact
{
    public static function new($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $message = $data['message'];
        $date = mysqlDate();

        $sql = "INSERT INTO contact_inquiries (name, email, phone, message)
                VALUES ('$name', '$email', '$phone', '$message')";
        $created = executeSql($sql);

        if ($created) {
            return true;
        }

        return false;
    }
}
