<?php

/*                        <h6>Localidad</h6>
    	<input name="pais" id="pais" type="text" placeholder="País" required readonly value="México">
        <select style="margin-bottom: 5%" name="estado" id="estado" id="estado" required onchange="getval(this);">
            <option>Selecciona tu estado</option>
        </select>
        <select style="margin-bottom: 5%" id="municipio" name="municipio" required>
            <option>Selecciona tu municipio</option>
        </select>
        <input name="cp" id="cp" type="text" placeholder="Código Postal" required />
    <h6>Dirección</h6>
        <input name="colonia" id="colonia" type="text" placeholder="Colonia" required />
    	<input name="calle" id="calle" type="text" placeholder="Calle" required />
        <input name="numeroE" id="numeroE" type="text" placeholder="Número Exterior" required />
        <input name="numeroI" id="numeroI" type="text" placeholder="Número Interior" /> 
    	<button type="submit" class="btn btn-default">Agregar dirección</button>

        DELIMITER $$
CREATE  PROCEDURE `setAddress` (IN `p_direccionPais` VARCHAR(256), IN `p_direccionEstado` INT, IN `p_direccionMunicipio` INT, IN `p_direccionCP` INT, IN `direccionColonia` VARCHAR(256), IN `p_direccionCalle` VARCHAR(256),  IN `p_direccionNumeroInterior` INT, IN `p_direccionNumeroExterior` INT, IN `p_usuarioId` INT)  begin 
insert into direccion (direccionPais, 
                    direccionEstado, 
                    direccionMunicipio, 
                    direccionCP, 
                    direccionColonia,
                    direccionCalle, 
                    direccionNumeroInterior,
                    direccionNumeroExterior,
                    usuarioId) 
        values(    p_direccionPais, 
                p_direccionEstado, 
                p_direccionMunicipio, 
                p_direccionCP, 
                p_direccionColonia,
                p_direccionCalle,
                p_direccionNumeroInterior,
                p_direccionNumeroExterior
                p_usuarioId);
end$$

*/

require_once '../api/config/database.php'; 

$_POST = json_decode(file_get_contents("php://input"), true);

$database = new Database();
$db = $database->getConnection();

////////////////////////////
/*print_r($_POST);*/


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


$call =  $db->prepare('CALL setAddress(:p_direccionPais, :p_direccionEstado, :p_direccionMunicipio, 
:p_direccionCP, :direccionColonia, :p_direccionCalle, :p_direccionNumeroInterior, 
:p_direccionNumeroExterior, :p_usuarioId)');
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