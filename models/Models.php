<?php

class Models
{
    public function new($data)
    {
        $name = $data['name'];
        $image = $data['image'];
        $length = $data['length'];
        $width = $data['width'];
        $weight = $data['weight'];
        $airdraft = $data['airdraft'];
        $draft = $data['draft'];
        $maxpk = $data['maxpk'];
        $maxpers = $data['maxpers'];
        $cec = $data['cec'];

        $sql = "INSERT INTO models (name, image, length , width, weight, airdraft, draft, maxpk, maxpers, cec)
                VALUES ('$name','$image','$length', '$width', '$weight', 
                        '$airdraft', '$draft', '$maxpk', '$maxpers', '$cec')";
        $created = executeSql($sql);

        if ($created) {
            return true;
        }

        return false;
    }

    public function edit($data)
    {
        $id = $data['id'];
        $length = $data['length'];
        $width = $data['width'];
        $weight = $data['weight'];
        $airdraft = $data['airdraft'];
        $draft = $data['draft'];
        $maxpk = $data['maxpk'];
        $maxpers = $data['maxpers'];
        $cec = $data['cec'];

        $sql = "UPDATE models        
SET length = '$length', width = '$width', weight = '$weight', airdraft = '$airdraft', 
    draft = '$draft', maxpk = '$maxpk', maxpers = '$maxpers', cec = '$cec'
                WHERE id = '$id'";
        $edited = executeSql($sql);

        if ($edited) {
            return true;
        }
        return false;
    }
}
