<?php
     function prConnect()
    {
        $lConn = new PDO('mysql:host=localhost;dbname=db_proyecto', 'root', '');
        $GLOBALS['gConn'] = $lConn;
    } //prConnect

    function prDisconnect()
    {
        $lConn = $GLOBALS['gConn'];
        $lConn = null;
    } //prDisconnect

    function insertarUsuario($nombre_usuario, $nombres, $apaterno, $amaterno,
    $password)
    {
        $lCode = -1;
        
        $lConn = $GLOBALS['gConn'];
        if ($lConn) {
            $lSQL = queryInsert;
            $lQuery = $lConn->prepare($lSQL);
            $lQuery->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);   
            $lQuery->bindParam(':nombres', $nombres, PDO::PARAM_STR); 
            $lQuery->bindParam(':apaterno', $apaterno, PDO::PARAM_STR);   
            $lQuery->bindParam(':amaterno', $amaterno, PDO::PARAM_INT);
            $lQuery->bindParam(':password', $password, PDO::PARAM_STR);
            $lQuery->execute();
            $fTAR_ID = $lConn->lastInsertId(); 
            $lCode = $lQuery->errorCode();
        }
        
        return $lCode;
    } // fnInsTarea 
    
    
?>