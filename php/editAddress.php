<?php

/*DELIMITER $$
CREATE  PROCEDURE `editAddress` (IN `p_idAdress` INT, IN `p_direccionPais` VARCHAR(256), IN `p_direccionEstado` INT, IN `p_direccionMunicipio` INT, 
IN `p_direccionCP` INT, IN `direccionColonia` VARCHAR(256), IN `p_direccionCalle` VARCHAR(256),  IN `p_direccionNumeroInterior` INT, 
IN `p_direccionNumeroExterior` INT, IN `p_usuarioId` INT)  begin
update direccion set 
direccionPais = p_direccionPais, 
direccionEstado = p_direccionEstado, 
direccionMunicipio = p_direccionMunicipio, 
direccionCP = p_direccionCP, 
direccionColonia = direccionColonia,
direccionCalle = p_direccionCalle,
direccionNumeroInterior = p_direccionNumeroInterior,
direccionNumeroExterior = p_direccionNumeroExterior,
where direccionId = p_idAdress;
end$$*/

require_once '../api/config/database.php'; 

$_POST = json_decode(file_get_contents("php://input"), true);

$database = new Database();
$db = $database->getConnection();

////////////////////////////

print_r($_POST);

$pais = $_POST['pais'];
$estado =  $_POST['estado'];
$municipio = $_POST['municipio'];
$cp =  $_POST['cp'];
$colonia = $_POST['colonia'];
$calle =  $_POST['calle'];
$numeroE = $_POST['numeroE'];
$numeroI =  $_POST['numeroI'];
$editNumber =  $_POST['editNumber'];
$idUser =  $_POST['idUser'];


$call =  $db->prepare('CALL editAddress(:p_idAdress, :p_direccionPais, :p_direccionEstado, :p_direccionMunicipio, 
:p_direccionCP, :direccionColonia, :p_direccionCalle, :p_direccionNumeroInterior, 
:p_direccionNumeroExterior, :p_usuarioId)');

$call->bindParam(':p_idAdress', $editNumber, PDO::PARAM_INT); 
$call->bindParam(':p_direccionPais', $pais, PDO::PARAM_STR); 
$call->bindParam(':p_direccionEstado', $estado, PDO::PARAM_STR);
$call->bindParam(':p_direccionMunicipio', $municipio, PDO::PARAM_STR);
$call->bindParam(':p_direccionCP', $cp, PDO::PARAM_INT); 
$call->bindParam(':direccionColonia', $colonia, PDO::PARAM_STR);
$call->bindParam(':p_direccionCalle', $calle, PDO::PARAM_STR);
$call->bindParam(':p_direccionNumeroInterior', $numeroI, PDO::PARAM_INT); 
$call->bindParam(':p_direccionNumeroExterior', $numeroE, PDO::PARAM_INT); 
$call->bindParam(':p_usuarioId', $idUser, PDO::PARAM_INT); 



if($call->execute())
{ 
    echo "Hecho";
}
else
{
    echo "Error";
    http_response_code(404);
}


?>