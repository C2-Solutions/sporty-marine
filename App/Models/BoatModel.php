<?php

class Boat
{
    public function new($data)
    {
        $type = $data['type'];
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
                (boattype, name,  price, lgth, width, weight, airdraft, draft,
                 maxpk, maxpers, builtin, cec, status, availability, description)
                VALUES
               ('$type', '$name', '$price', '$length', '$width', '$weight', '$airdraft',
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
            lgth = '$length',
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
    public function newType($data)
    {
        $type = $data['type'];

        $sql = "INSERT INTO boattype (type) VALUES ('$type')";
        $created = executeSql($sql);

        if ($created) {
            return true;
        }

        return false;
    }

    public function editType($data)
    {
        $id = $data['id'];
        $type = $data['type'];

        $sql = "UPDATE boattype SET type = '$type' WHERE id = '$id'";

        $edited = executeSql($sql);

        if ($edited) {
            return true;
        }

        return false;
    }
}
