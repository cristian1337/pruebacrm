<?php

class pruebaController
{

  public function __construct() 
  {
		$sessionName = $this->login();

    $url = 'https://develop1.datacrm.la/jdimate/pruebatecnica/webservice.php?operation=query&sessionName='.$sessionName.'&query=select%20*%20from%20Contacts%3B';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    echo($response);
	}

  public function obtenerkey()
  {
    $url = 'https://develop1.datacrm.la/jdimate/pruebatecnica/webservice.php?operation=getchallenge&username=prueba';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    $res = json_decode($response);
    return $res->result->token;
  }

  public function login()
  {
    $token = $this->obtenerkey();
    $accesskey = md5($token.'2IPfpYL3SxRRjLWx');
    $url = 'https://develop1.datacrm.la/jdimate/pruebatecnica/webservice.php';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 'operation=login&username=prueba&accessKey='.$accesskey);
    $response = curl_exec($curl);
    curl_close($curl);
    $res = json_decode($response);
    return $res->result->sessionName;
  }
}

$prueba = new pruebaController();

$prueba;
