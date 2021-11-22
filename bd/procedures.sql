usuarioId	usuarioNombre	usuarioApellido	usuarioPassword	usuarioFechaNacimiento	usuarioCorreo	usuarioTipo

DELIMITER $$
CREATE  PROCEDURE `usuarioCrear` (IN `p_nombre` VARCHAR(60), IN `p_apellido` VARCHAR(60), IN `p_email` VARCHAR(60), IN `p_tipo` int, IN `p_contraseña` VARCHAR(2048))  begin
insert into usuario (usuarioNombre, 
                    usuarioApellido, 
                    usuarioCorreo, 
                    usuarioTipo, 
                    usuarioPassword) 
        values(    p_nombre, 
                p_apellido, 
                p_email, 
                p_tipo, 
                p_contraseña);
end$$


DELIMITER $$
CREATE  PROCEDURE `userEmailExists` (IN `p_email` VARCHAR(60), OUT `p_id` INT, OUT `p_nombre` VARCHAR(60), OUT `p_apellido` VARCHAR(60), OUT `p_password` VARCHAR(2048), OUT `p_tipo` INT)  begin
select usuarioId, usuarioNombre, usuarioApellido, usuarioPassword, usuarioTipo
into p_id, p_nombre, p_apellido, p_password, p_tipo
from usuario where usuarioCorreo = p_email;
end$$