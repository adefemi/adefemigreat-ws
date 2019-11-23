<?php 
    $query = parse_str($_SERVER['QUERY_STRING'], $query_arry);
    $page = 1;
    if($query_arry["page"] != NULL){
        $page = $query_arry["page"];
    }

    // get projects data
    $ch = curl_init($GLOBALS["gallery_api"]."/list/?page=".$page);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data_project = curl_exec($ch);
    curl_close($ch);

    $page_error = json_decode($data_project, true)["detail"];

    $decoded_gallery_data = json_decode($data_project, true);
    $decoded_galleries = json_decode($data_project, true)["results"];
?>

<!DOCTYPE html>
<html
        lang="en"
>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Galleries</title>
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