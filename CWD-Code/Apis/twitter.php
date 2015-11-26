<?php
    require "twitteroauth/autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;

    session_start();
    include("twitteroauth/src/TwitterOauth.php");

    $apikey="FXtRYedLkkh6iFvBU24VcmbYg";
    $apisecret="CLJGTu8l2rAfF9XlGsGrhSxMUVSUWDcNbd914ReSNx07nmt1Vs";
    $accesstoken="3136064683-dUWF7TQpArgT0tWXh72nD4prEkChRdECz8ZSB5w";
    $accesssecret="vFUAehLAtLDJkyqVMQai6eOM1Y0M3cKSzZQbzJP0Ibyo3";

    $connection = new TwitterOauth($apikey, $apisecret, $accesstoken, $accesssecret);
    //print_r($connection);
    //$content = $connection->get("account/verify_credentials");
    //print_r($content);

    //$statues = $connection->post("statuses/update", array("status" => "hello world"));

    $statues = $connection->get("statuses/home_timeline", array("count" => 25, "exclude_replies" => true));
    echo json_encode(print_r($statues));

    foreach($statues as $status)
        {
            echo $status->text;
            echo "<br/>";
        }

?>