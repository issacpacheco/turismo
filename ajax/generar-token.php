<?php
    include("../class/funciones.php");

    error_reporting(0);
    $tarjeta = $_POST['numero_tarjeta'];
    $titular = $_POST['nombre_titular'];
    $mesexp  = $_POST['mes_vencimiento'];
    $aniexp  = $_POST['anio_vencimiento'];
    $cvv     = $_POST['cvv'];
    $total   = $_POST['total_pago'];
    $descrip = $_POST['descripcion'];
    $fch_exp = $_POST['fch_exp'];
    $correo  = $_POST['correo'];

    $datos = array("credential" => array("payment_method" => array("method" => "credit_or_debit_card"), 
                                     "credit_or_debit_card" => array("card_number" => $tarjeta,
                                                    "expiration_month" => $mesexp,
                                                    "expiration_year" => "20".$aniexp,
                                                    "card_validation_code" => $cvv)),
                 "consumer_details" => array("contact" => array("email" => $correo),
                                             "name" => array("first_name" => $titular)));

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://sandbox.api.holacash.mx/v2/tokenization/payment_token");
	curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Api-Client-Key: pub_sandbox_FIFCTLCq.CDs9U2xOnySk3Kx7REXyF3KcOK1B1mM9',
                                                'X-Cash-Anti-Fraud-Metadata: ewogICAgImlwX2FkZHJlc3MiOiIxMjMuMTIzLjEyMy4xMjMiLAogICAgImRldmljZV9pZCIgOiAiMTIzNDU2IiwKICAgICJ1c2VyX3RpbWV6b25lIiA6IiswMzozNCIsCiAgICAidXJsX2RvbWFpbl9uYW1lIiA6ImhvbGFjYXNoLm14IiwKICAgICJicm93c2VyX3ZlcnNpb24iIDoiMTIzIiwKICAgICJicm93c2VyX25hbWUiIDoiTW96aWxsYSIsCiAgICAiYnJvd3Nlcl90aW1lem9uZSIgOiJQU1QiLAogICAgInNjcmVlbl9yZXNvbHV0aW9uX3dpZHRoIiA6IjEyMyIsCiAgICAic2NyZWVuX3Jlc29sdXRpb25faGVpZ2h0IiA6IjEyMyIsCiAgICAid2luZG93X3Bvc2l0aW9uX3giIDoiMTIzIiwKICAgICJ3aW5kb3dfcG9zaXRpb25feSIgOiIxMjMiLAogICAgImNvbG9yX2RlcHRoIiA6IjEyMyIKfQ====',
                                                'Content-Type: application/json')); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));
	
	// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec($ch);
	$respuesta_token = json_decode($server_output);
	curl_close ($ch);

    if($respuesta_token->status == "failure"){
        $datos = array("respuesta" => "2", "mensaje" =>$respuesta_token->message);
        echo json_encode($datos);
        exit();
    }

    // print_r($respuesta);
    $datoscargo = array("description" => $desencriptar($descrip),
                         "amount_details" => array("amount" => intval(str_replace(".","", $desencriptar($total))), 
                                                   "currency_code" => "MXN"),
                         "payment_detail" => array("credentials" => array("payment_method" => array("method" => "pay_with_holacash_payment_token"),
                                                                          "holacash_payment_token" => array("payment_token" => $respuesta_token->token_details->token))),
                         "processing_instructions" => array("auto_capture" => true));

    

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://sandbox.api.holacash.mx/v2/transaction/charge");
	curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Api-Client-Key: pub_sandbox_FIFCTLCq.CDs9U2xOnySk3Kx7REXyF3KcOK1B1mM9',
                                                'X-Cash-Anti-Fraud-Metadata: ewogICAgImlwX2FkZHJlc3MiOiIxMjMuMTIzLjEyMy4xMjMiLAogICAgImRldmljZV9pZCIgOiAiMTIzNDU2IiwKICAgICJ1c2VyX3RpbWV6b25lIiA6IiswMzozNCIsCiAgICAidXJsX2RvbWFpbl9uYW1lIiA6ImhvbGFjYXNoLm14IiwKICAgICJicm93c2VyX3ZlcnNpb24iIDoiMTIzIiwKICAgICJicm93c2VyX25hbWUiIDoiTW96aWxsYSIsCiAgICAiYnJvd3Nlcl90aW1lem9uZSIgOiJQU1QiLAogICAgInNjcmVlbl9yZXNvbHV0aW9uX3dpZHRoIiA6IjEyMyIsCiAgICAic2NyZWVuX3Jlc29sdXRpb25faGVpZ2h0IiA6IjEyMyIsCiAgICAid2luZG93X3Bvc2l0aW9uX3giIDoiMTIzIiwKICAgICJ3aW5kb3dfcG9zaXRpb25feSIgOiIxMjMiLAogICAgImNvbG9yX2RlcHRoIiA6IjEyMyIKfQ====',
                                                'Content-Type: application/json')); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datoscargo));
	
	// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec($ch);
	$respuesta_pago = json_decode($server_output);
	curl_close ($ch);

    // print_r($respuesta_pago->status_details->status);

    if($respuesta_pago->status_details->status == "success"){
        $datos = array("respuesta" => "1");
        echo json_encode($datos);
        exit();
    }else if($respuesta_pago->status == "failure"){
        // echo "2";
        $datos = array("respuesta" => "2", "mensaje" => $respuesta_pago->message);
        echo json_encode($datos);
        exit();
    }else{
        // echo "-1";
        $datos = array("respuesta" => "-1");
        echo json_encode($datos);
        exit();
    }
?>