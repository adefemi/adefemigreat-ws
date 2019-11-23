<?php 

    // get setting data
    $ch = curl_init($GLOBALS["user_api"]."/setting");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    // get skill data
    $ch = curl_init($GLOBALS["user_api"]."/skill-set/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data_skill = curl_exec($ch);
    curl_close($ch);

    // get projects data
    $ch = curl_init($GLOBALS["project_api"]."/list/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data_project = curl_exec($ch);
    curl_close($ch);

    $decoded_setting = json_decode($data, true)[0];
    $decoded_skills = json_decode($data_skill, true);
    $decoded_projects = array_slice(json_decode($data_project, true)["results"], 0, 2);
?>

<!DOCTYPE html>
<html
    lang="en"
>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to my website - adefemigreat says hello.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link id="link_control" rel="stylesheet" href="../assets/styles/mainStyle.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
</head>
<body>
	<div class="container-fluid">
        <?php include_once("components/header.php")?>
        <?php include_once("components/content.php")?>
	</div>
</body>
</html>