<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ini_set("display_errors", 0);

    require_once('./php/SQL.php');
    require_once('./php/incDB.php');
    $lRes= '';

    prConnect();

    $lAction = $_REQUEST['action'];

    if ($lAction == 'act_getversion') {
        $lVer = "1.0.0";
        $lRes= array('res' => 1, 'ver' => $lVer);
    }  else
    
  if($lAction == 'act_insertarusuario') {
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $nombres = $_REQUEST['nombres'];
    $apaterno = $_REQUEST['apaterno'];
    $amaterno = $_REQUEST['amaterno'];
    $password = $_REQUEST['password'];

    if($nombre_usuario != ''){
      if($password != ''){
        $lCode = insertarUsuario($nombre_usuario, $nombres, $apaterno, $amaterno, $password, $id);
        if($lCode == 00000){
          $lRes = array('res' => 1, 'id' => $id);
        } else {
          $lRes = array('res' => 0, 'code' => $lCode);
        }
          

      } else{
        $lRes= array('res' => -2, 'param' => 'password');
      }
    } else{
      $lRes= array('res' => -2, 'param' => 'nombre_usuario');
    }
    }

    prDisconnect();

    echo json_encode($lRes);

    /*switch(json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - Sin errores';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Excedido tamaño máximo de la pila';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Desbordamiento de buffer o los modos no coinciden';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Encontrado carácter de control no esperado';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Error de sintaxis, JSON mal formado';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Caracteres UTF-8 malformados, posiblemente codificados de forma incorrecta';
        break;
        default:
            echo ' - Error desconocido';
        break;
    }*/
?>
