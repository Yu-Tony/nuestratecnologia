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

DELIMITER $$
CREATE  PROCEDURE `getAddress` (IN `p_id` INT, OUT `p_direccionPais` VARCHAR(256), OUT `p_direccionEstado` INT, OUT `p_direccionMunicipio` INT, OUT `p_direccionCP` INT, OUT `direccionColonia` VARCHAR(256), OUT `p_direccionCalle` VARCHAR(256),  OUT `p_direccionNumeroInterior` INT, OUT `p_direccionNumeroExterior` INT)  begin
select direccionPais, direccionEstado, direccionMunicipio, direccionCP, direccionColonia, direccionCalle, direccionNumeroInterior, direccionNumeroExterior
into p_direccionPais, p_direccionEstado, p_direccionMunicipio, p_direccionCP, p_direccionColonia, p_direccionCalle, p_direccionNumeroInterior, p_direccionNumeroExterior
from direccion where usuarioId = p_id;
end$$

//direccionId									

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




DELIMITER $$
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
end$$


DELIMITER $$
CREATE PROCEDURE `userUpdate` (IN `p_id` INT, IN `p_nombre` VARCHAR(60),IN `p_telefono` VARCHAR(60), IN `p_apellido` VARCHAR(60), IN `p_email` VARCHAR(60), IN `p_fechanac` DATE, 
IN `p_genero` INT, IN `p_password` VARCHAR(256))  begin
set @tempcontra = p_contraseña;
select usuarioPassword into @tempcontra from Usuario where usuarioId = p_id;
update Usuario set 
usuarioNombre = p_nombre, 
usuarioApellido = p_apellido, 
usuarioFechaNacimiento = p_fechanac, 
usuarioGenero = p_genero, 
usuarioCorreo = p_email,
usuarioTelefono = p_telefono,
usuarioPassword = if(p_password = '', @tempcontra, p_password)
where usuarioId = p_id;
end$$
								