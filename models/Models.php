<?php

class Models
{
    public function new($data)
    {
        $name = $data['name'];
        $price = $data['price'];
        $length = $data['length'];
        $width = $data['width'];
        $weight = $data['weight'];
        $airdraft = $data['airdraft'];
        $draft = $data['draft'];
        $maxpk = $data['maxpk'];
        $maxpers = $data['maxpers'];
        $builtin = $data['builtin'];
        $cec = $data['cec'];
        $status = $data['status'];
        $availability = $data['availability'];
        $description = $data['description'];

        $sql = "INSERT INTO models 
                (name, price, length , width, weight, airdraft, draft, 
                 maxpk, maxpers, builtin, cec, status, availability, description)
                VALUES 
               ('$name', '$price', '$length', '$width', '$weight', '$airdraft',
                '$draft', '$maxpk', '$maxpers', '$builtin', '$cec', '$status', '$availability', '$description')";
        $created = executeSql($sql);

        if ($created) {
            return true;
        }

        return false;
    }

    public function edit($data)
    {
        $id = $data['id'];
        $price = $data['price'];
        $length = $data['length'];
        $width = $data['width'];
        $weight = $data['weight'];
        $airdraft = $data['airdraft'];
        $draft = $data['draft'];
        $maxpk = $data['maxpk'];
        $maxpers = $data['maxpers'];
        $builtin = $data['builtin'];
        $cec = $data['cec'];
        $status = $data['status'];
        $availability = $data['availability'];
        $description = $data['description'];

        $sql = "UPDATE models
        SET price = '$price',
            length = '$length', 
            width = '$width', 
            weight = '$weight', 
            airdraft = '$airdraft', 
            draft = '$draft', 
            maxpk = '$maxpk', 
            maxpers = '$maxpers', 
            builtin = '$builtin',
            cec = '$cec',
            status = '$status',
            availability = '$availability',
            description = '$description'
                WHERE id = '$id'";

        $edited = executeSql($sql);

        if ($edited) {
            return true;
        }
        return false;
    }
}
