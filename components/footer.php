<?php 

    // get setting data
    $ch = curl_init($GLOBALS["user_api"]."/setting");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $decoded_setting = json_decode($data, true)[0];
?>

<div class="margin-top-50 footer">
    <?php echo($decoded_setting["copyright"]) ?>
</div>