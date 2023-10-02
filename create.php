<?php

require_once "config.php";

    $name = $name = $type = $crop = "";
    $name_err = $type_err = $crop_err = "";

    if(empty($_SERVER["REQUEST_METHOD"] == "POST"){
        //validates name
        $input_name = trim($_POST["NAME"]);
        if (empty($input_name)){
            $name_err = "please enter a name";
        } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP,
            array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $name_err = "Please enter a valid name.";
        } else{
            $name = $input_name;
        }

        // Validate type
        $input_type = trim($_POST["type"]);
        if(empty($input_address)){
            $type_err = "Please enter a type.";
        } else{
            $type = $input_type;
        }

        // Validate crop
        $input_crop = trim($_POST["crop"]);
        if(empty($input_crop)){
            $crop_err = "Please enter an crop.";
        } else{
            $crop = $input_crop;
        }

        //checks for input error before seding to database
        if(empty($name_err) && empty($type_err) && empty($crop_err)){
        //prepares an insert statement
        $sql = "INSERT INTO datas (name,type,crop) VALUES (?,?,?)";
        }
    })

?>