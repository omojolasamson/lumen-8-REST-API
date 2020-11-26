<?php
    $url = 'http://localhost:8000/api/v1/users/index';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    curl_close($curl);

    //echo $data;

    $decodeUsers = json_decode($data, true);
    foreach($decodeUsers as $user){

        echo '<h1>User '. $user['id'] . '</h1>';
        echo '<span>first name: '.$user['first_name']. ', last name: '. $user['last_name'] . ', email: ' . $user['email_address'] . '</span>';

    }

?>
