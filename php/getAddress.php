<?php

    require_once '../api/config/database.php'; 

    $database = new Database();
    $db = $database->getConnection();

    ////////////////////////////

   // print_r($_POST);

    $idUser = $_POST['idUser'];
    $function =  $_POST['function'];




    $call =  $db->prepare('CALL getAddress(:p_id, @p_direccionId, @p_direccionPais, @p_direccionEstado, @p_direccionMunicipio, @p_direccionCP, @p_direccionColonia, @p_direccionCalle, @p_direccionNumeroInterior, @p_direccionNumeroExterior)');
    $call->bindParam(':p_id', $idUser, PDO::PARAM_INT); 

    if($call->execute())
    { 
        $select = $db->query('SELECT @p_direccionId  AS  p_direccionId, @p_direccionPais AS  p_direccionPais, 
        @p_direccionEstado AS  p_direccionEstado, @p_direccionMunicipio AS  p_direccionMunicipio, @p_direccionCP AS  p_direccionCP, 
        @p_direccionColonia AS  p_direccionColonia, @p_direccionCalle AS  p_direccionCalle,
         @p_direccionNumeroInterior AS  p_direccionNumeroInterior, @p_direccionNumeroExterior AS  p_direccionNumeroExterior');
        $result = $select->fetch(PDO::FETCH_ASSOC);
    
        //var_dump($result);

        if($result['p_direccionId']!=null)
        {
            $p_direccionId = $result['p_direccionId'];
            $p_direccionPais = $result['p_direccionPais'];
            $p_direccionEstado = $result['p_direccionEstado'];
            $p_direccionMunicipio = $result['p_direccionMunicipio'];
            $p_direccionCP = $result['p_direccionCP'];
            $p_direccionColonia = $result['p_direccionColonia'];
            $p_direccionCalle = $result['p_direccionCalle'];
            $p_direccionNumeroInterior = $result['p_direccionNumeroInterior'];
            $p_direccionNumeroExterior = $result['p_direccionNumeroExterior'];

            if($function==1)
            {
         

                echo "<li>";
                echo "<div>";
                echo "<dt>Direccion</dt>";

                if($p_direccionNumeroInterior!=0)
                {
                    echo "<dd>Pais: $p_direccionPais </dd>";
                    echo "<dd>Estado: $p_direccionEstado </dd>";
                    echo "<dd>Municipio: $p_direccionMunicipio </dd>";
                    echo "<dd>Colonia: $p_direccionColonia </dd>";
                    echo "<dd>Calle: $p_direccionCalle </dd>";
                    echo "<dd>Numero Exterior: $p_direccionNumeroExterior  </dd>";
                    echo "<dd> Numero Interior: $p_direccionNumeroInterior </dd>";
                    echo "<dd>CP: $p_direccionCP</dd>";
                }
                else
                {
                    echo "<dd>Pais: $p_direccionPais </dd>";
                    echo "<dd>Estado: $p_direccionEstado </dd>";
                    echo "<dd>Municipio: $p_direccionMunicipio </dd>";
                    echo "<dd>Colonia: $p_direccionColonia </dd>";
                    echo "<dd>Calle: $p_direccionCalle </dd>";
                    echo "<dd>Numero Exterior: $p_direccionNumeroExterior  </dd>";
                    echo "<dd>CP: $p_direccionCP</dd>";
                }

                echo "</div>";
                echo "</li>";
                

            }
            else
            {
    
         
                echo "<h6>Localidad</h6>";
                echo "<input name=\"pais\" id=\"pais\" type=\"text\" placeholder=\"País\" required readonly value=\"México\">";

                echo "<select style=\"margin-bottom: 5%\" name=\"estado\" id=\"estado\" id=\"estado\" required onchange=\"getval(this);\">";
                echo "<option>Selecciona tu estado</option>";
                echo "</select>";

                echo "<select style=\"margin-bottom: 5%\" id=\"municipio\" name=\"municipio\" required>";
                echo "<option>Selecciona tu municipio</option>";
                echo "</select>";

                echo "<input name=\"cp\" id=\"cp\" type=\"text\" placeholder=\"Código Postal\" required value=\"$p_direccionCP\" />";

                echo "<h6>Dirección</h6>";

                echo "<input name=\"colonia\" id=\"colonia\" type=\"text\" placeholder=\"Colonia\" required value=\"$p_direccionColonia\" />";

                echo "<input name=\"calle\" id=\"calle\" type=\"text\" placeholder=\"Calle\" required value=\"$p_direccionCalle\" />";

                echo "<input name=\"numeroE\" id=\"numeroE\" type=\"text\" placeholder=\"Número Exterior\" value=\"$p_direccionNumeroExterior\" required />";

                echo "<input name=\"numeroI\" id=\"numeroI\" type=\"text\" placeholder=\"Número Interior\" />";

                echo "<input name=\"editNumber\" class=\"editNumber\" style=\"visibility:hidden\" type=\"text\" value=\"$p_direccionId\">";

                echo "<button type=\"submit\" class=\"btn btn-default\">Editar dirección</button>";


                echo "<h6 class=\"getEstado\" style=\"visibility:hidden\">$p_direccionEstado</h6>";
                echo "<h6 class=\"getMunicipio\" style=\"visibility:hidden\">$p_direccionMunicipio</h6>";
           
               

                
            }

        }
        else
        { 
            if($function==2)
            {
                echo "<h6>Localidad</h6>";
                echo "<input name=\"pais\" id=\"pais\" type=\"text\" placeholder=\"País\" required readonly value=\"México\">";
                echo "<select style=\"margin-bottom: 5%\" name=\"estado\" id=\"estado\" id=\"estado\" required onchange=\"getval(this);\">";
                echo "<option>Selecciona tu estado</option>";
                echo "</select>";
                echo "<select style=\"margin-bottom: 5%\" id=\"municipio\" name=\"municipio\" required>";
                echo "<option>Selecciona tu municipio</option>";
                echo "</select>";
                echo "<input name=\"cp\" id=\"cp\" type=\"text\" placeholder=\"Código Postal\" required />";
                echo "<h6>Dirección</h6>";
                echo "<input name=\"colonia\" id=\"colonia\" type=\"text\" placeholder=\"Colonia\" required />";
                echo "<input name=\"calle\" id=\"calle\" type=\"text\" placeholder=\"Calle\" required />";
                echo "<input name=\"numeroE\" id=\"numeroE\" type=\"text\" placeholder=\"Número Exterior\" required />";
                echo "<input name=\"numeroI\" id=\"numeroI\" type=\"text\" placeholder=\"Número Interior\" />";
                echo "<input name=\"editNumber\" class=\"editNumber\" style=\"visibility:hidden\" type=\"text\" value=\"0\">";
                echo "";
                echo "<button type=\"submit\" class=\"btn btn-default\">Agregar dirección</button>";
                echo "";

            }
            else
            {
                echo("No hay resultados de direccion");
                http_response_code(404);
            }
            
        }

    }
    else{
        echo("Error al correr el procedure");
        http_response_code(404);
    }






?>