<?php 
    $code = $_GET["code"];
    
    if (!isset($_GET["code"])) { header('Location: ./index.php'); exit();};
    
    $client_id = "8atuid9ffsdrpa9v4s79u498o";
    $client_secret = "14i34r9of82v25elil763q1geo5l9bnlfq3ki3b5pmbgk20reedh";
    $redirect_uri = "https://www.eaabdura.awsps.myinstance.com/login.php";
    
    $client = base64_encode("$client_id:$client_secret");
    
    $url = "https://auth.eaabdura.awsps.myinstance.com/oauth2/token?";
    $data = array(
       'grant_type' => 'authorization_code',
       'client_id' => $client_id,
       'client_secret' => $client_secret,
       'code' => $code,
       'redirect_uri' => $redirect_uri);
    
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Content-Type: application/x-www-form-urlencoded",
       "Authorization: Basic $client",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $data = "grant_type=authorization_code&client_id=$client_id&client_secret=$client_secret&code=$code&redirect_uri=$redirect_uri";
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    
    $url="https://auth.eaabdura.awsps.myinstance.com/oauth2/userInfo";
    
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Authorization: Bearer $response->access_token");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    
    session_start();
    $_SESSION["userInfo"] = $response;
    
    header('Location: ./testhomepage.php');
    exit();