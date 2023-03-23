<?php

require "../../../vendor/autoload.php";

use Surveyplus\App\Controllers\SurveyController;

session_start();

if(isset($_POST) && $_SERVER["REQUEST_METHOD"] == "POST")
{

    // debug_array($_POST);
    
    $surveys = new SurveyController();

    $name = isset($_POST['name']) ? clean_input($_POST['name']) : "";
    $description = isset($_POST['description']) ? clean_input($_POST['description']) : "";
    $visbility = isset($_POST['visibility']) ? clean_input($_POST["visibility"]) : 0;
    $expires_on = isset($_POST['expires_on']) ? clean_input($_POST["expires_on"]) : NULL;
    
    $user_id = $_SESSION["user_id"];

    // Check for empty fields
    if(empty($name) || empty($description) || empty($expires_on))
    {
        header("Location:" . DASHBOARD_URL . "/survey/create.php?error=emptyfield");
        exit(0);
    }

    // Check if published set date to now

    if($visbility == 1)
    {
        $published_date = date("Y-m-d H:i:s");

    }else{
        $published_date = NULL;
    }



    $data = [
        "name" => $name,
        "description" => $description,
        "published" => $visbility,
        "publishedOn" => $published_date,
        "expiresOn" => $expires_on,
        "user_id" => $user_id
    ];


    $save = $surveys->create($data);

    if(!$save)
    {
        header("Location:" . DASHBOARD_URL . "/survey/create.php?type=survey&error=savefailed");
        exit(0);
    }

    header("Location:" . DASHBOARD_URL . "/survey/create.php?type=survey&success=saved");
    exit(0);


}else{

    header("Location:" . DASHBOARD_URL . "/survey/create.php");
    exit(0);
}