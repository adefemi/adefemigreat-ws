<?php 

    // get setting data
    $ch = curl_init($GLOBALS["user_api"]."/setting");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $decoded_setting = json_decode($data, true)[0];
?>

<a href="<?php echo($decoded_setting["facebook"]) ?>"><i data-feather="facebook"></i></a>
<a href="<?php echo($decoded_setting["twitter"]) ?>"><i data-feather="twitter"></i></a>
<a href="<?php echo($decoded_setting["github"]) ?>"><i data-feather="github"></i></a>
<a href="<?php echo($decoded_setting["linked_in"]) ?>"><i data-feather="linkedin"></i></a>