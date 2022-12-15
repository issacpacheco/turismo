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

    $datos = array("expiration_date" => strtotime($desencriptar($fch_exp)),
                   "amount" => array("amount"   => intval(str_replace(".","", $desencriptar($total))),
                                     "currency_code" => "MXN"),
                   "description" => $desencriptar($descrip),
                   "max_num_times_can_be_paid"  => 1,
                   "collect_customer_notes" => false,
                   "amount_constraints" => array("conformance" => "fixed",
                                                 "maximum_amount" => array("amount" => intval(str_replace(".","", $desencriptar($total))),
                                                                           "currency_code" => "MXN"),
                                                 "minimum_amount" => array("amount" => intval(str_replace(".","", $desencriptar($total))),
                                                                           "currency_code" => "MXN")
                                                )
                  );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://live.api.holacash.mx/v2/payment_link");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Api-Client-Key: pub_live_2wT5g54n.EWdUiXZq86EYYdMs1XgzJZUG1vxp1X8W',
                                                'Content-Type: application/json')); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));
    
    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    $respuesta_token = json_decode($server_output);
    curl_close ($ch);

    if($respuesta_token->status == "failure"){
        $datos = array("respuesta" => "2", "mensaje" =>$respuesta_token->additional_details[0]->data->expiration_date[0]->message);
        echo json_encode($datos);
        exit();
    }else if($respuesta_token->status == "active"){
        $datos = array("respuesta" => "1", "url" =>$respuesta_token->url);
        echo json_encode($datos);
        exit();
    }else{
        $datos = array("respuesta" => "-1");
        echo json_encode($datos);
        exit();
    }


?>