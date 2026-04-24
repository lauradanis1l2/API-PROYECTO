-- Base de datos: `gestiondomicilios`
create database gestiondomiciliosdv;
use gestiondomiciliosdv;

-- --------------------------------------------------------
-- Estructura de tabla para las tablas
CREATE TABLE rolusuario (
  idRolUsuario int auto_increment primary key NOT NULL,
  descripRolUsuario varchar(30) NOT NULL,
  estadoRolUsuario varchar(30) NOT NULL
);

CREATE TABLE usuario (
  idUsuario int auto_increment primary key NOT NULL,
  tipoDocUsuario varchar(30) NOT NULL,
  numdocUsuario varchar(20) NOT NULL,
  nombreUsuario varchar(50) NOT NULL,
  apellidoUsuario varchar(50) NOT NULL,
  direccionUsuario varchar(80) NOT NULL,
  telefonoUsuario varchar(20) NOT NULL,
  correoUsuario varchar(70) NOT NULL,
  passwordUsuario varchar(20) NOT NULL,
  estadoUsuario varchar(30) NOT NULL,
  id_RolUsuario_fk integer not null,
  FOREIGN KEY (id_RolUsuario_fk) references rolusuario(idRolUsuario)
  );
  
  CREATE TABLE pedido (
  idPedido INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  fechaPedido DATE NOT NULL,
  horaPedido TIME NOT NULL,
  totalPedido DOUBLE NOT NULL,
  estadoPedido VARCHAR(30) NOT NULL,
  idUsuarioFK INT NOT NULL,
  FOREIGN KEY (idUsuarioFK) REFERENCES Usuario(idUsuario)
);

CREATE TABLE domicilio (
  idDomicilio INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  horaDomicilio TIME NOT NULL,
  estadoDomicilio VARCHAR(30) NOT NULL,
  idPedidoFK INT NOT NULL,
  idUsuarioFK INT NOT NULL,
  FOREIGN KEY (idPedidoFK) REFERENCES pedido(idPedido),
  FOREIGN KEY (idUsuarioFK) REFERENCES Usuario(idUsuario)
);

CREATE TABLE producto (
  idProducto int auto_increment primary key NOT NULL,
  descripProducto varchar(100) NOT NULL,
  precioProducto double NOT NULL,
  categoriaProducto varchar(40) NOT NULL,
  estadoProducto varchar(30) NOT NULL
);


CREATE TABLE detallepedido (
  idDetallePedido INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  idProductoFK INT NOT NULL,
  cantidadProducto INT NOT NULL,
  precioProducto DOUBLE NOT NULL,
  subtotalProducto DOUBLE NOT NULL,
  idPedidoFK INT NOT NULL,
  FOREIGN KEY (idProductoFK) REFERENCES Producto(idProducto),
  FOREIGN KEY (idPedidoFK) REFERENCES pedido(idPedido)
);

-- iserciones de datos para las tablas

INSERT INTO rolusuario (descripRolUsuario, estadoRolUsuario) VALUES
('cliente', 'activo'),
('administrador', 'activo'),
('domiciliario', 'activo');

INSERT INTO usuario (tipoDocUsuario, numdocUsuario, nombreUsuario, apellidoUsuario, direccionUsuario, telefonoUsuario, correoUsuario, passwordUsuario, estadoUsuario, id_RolUsuario_fk) VALUES
('cc', '52289814', 'maria', 'Hernández', 'Cr19F#71-28sur', '7713783', 'alciravalentina@gmail.com', '814','activo',1),
('cc', '79770414', 'Adbrey', 'Moreno', 'Tras18Kbis#71D87Sur', '7920119', 'adbreymoreno1@gmail.com', '414', 'activo',1),
('cc', '1036676881', 'astrid', 'bonilla', 'tras18kbis71D87sur', '7920119', 'astridyamilebonilla@gmail.com', '881', 'activo',3),
('TI', '10149763547', 'valentina', 'cuta', 'cr19F71-28sur', '7713783', 'valentinacutahernandez@gmail.com', ' 547', 'activo',1),
(' TI', '1010761492', 'luna', 'moreno', 'tras18kbis71d87sur', '3195043413', 'lunavalentinam06@gmail.com', '492', 'activo',1),
('TI', '1023372825', 'jessica', 'alvarez', 'calle 69 f sur #18 h 89', '7713895', 'jessicatatiana@gmail.com', '825', 'activo',3),
('TI', '100254666', 'harrison', 'Hernández', 'cra17k#85sur', '7908546', 'harricutason@gmail.com', '666', 'activo',1),
('CC', '39670092', 'diana', 'vaca', 'calle95 #30jsur', '3123760982', 'dianixvaca@gmail.com', '092', 'activo',1),
('cc', '958421671', 'alcira', 'capera', 'cr18#76-20sur', '7605482', 'alciracapera@gmail.com', '671', 'activo',1),
('TI', '1018761814', 'arena', 'paris', 'cra27N#85-20norte', '7945213', 'arenaazulparis@gmail.com', '814', 'activo',1),
('cc', '123695475', 'hannah', 'caro', 'cra45h#35-14este', '7905482', 'hanitademicora@gmail.com', '475', 'activo',1),
('cc', '521647893', 'noah', 'obraianh', 'cra26k#23-12sur', '7456328', 'noahobraian@gmail.com', '893', 'activo',1),
('cc', '123654897', 'jhon', 'carrero', 'cr58j#46-32oeste', '7894236', 'jonsitocarre@gmail.com', '897', 'activo',1),
('TI', '1019763528', 'mariam', 'lauren', 'cr23h#25-21sur', '75482354', 'mariamdelaos@gmail.com', '528', 'activo',2),
('cc', '123456879', 'antonia', 'lara', 'cr27f#56-21norte', '7546182', 'antolara@gmail.com', '879', 'activo',2);

INSERT INTO pedido (fechaPedido, horaPedido, totalPedido, estadoPedido, idUsuarioFK) VALUES
('2002-09-22', '12:30:00', 1300, 'activo', 1),
('2002-08-22', '02:30:00', 1800, 'activo', 2),
('2010-09-22', '01:00:00', 1500, 'activo', 1),
('2022-10-02', '03:30:00', 2500, 'activo', 1),
('2022-11-12', '04:20:00', 7800, 'activo', 1),
('2022-06-17', '04:00:00', 1900, 'activo', 1),
('2022-07-11', '05:05:00', 3200, 'activo', 2),
('2022-02-22', '01:10:00', 1200, 'activo', 1),
('2022-01-19', '02:45:00', 4000, 'activo', 1),
('2022-04-25', '04:50:00', 6000, 'activo', 1),
('2022-12-13', '05:01:00', 4200, 'activo', 1),
('2022-03-01', '03:03:00', 9000, 'activo', 2),
('2022-11-21', '08:00:00', 5200, 'activo', 1),
('2022-11-10', '09:00:00', 11200, 'activo', 1),
('2022-12-16', '10:00:00', 2400, 'activo', 1);

INSERT INTO domicilio (horaDomicilio, estadoDomicilio, idPedidoFK, idUsuarioFK) VALUES
('12:30:00', 'activo', 1, 3),
('02:30:00', 'activo', 2, 3),
('01:00:00', 'activo', 3, 3),
('03:30:00', 'activo', 4, 3),
('04:20:00', 'activo', 5, 3),
('04:00:00', 'activo', 6, 3),
('05:05:00', 'activo', 7, 3),
('01:10:00', 'activo', 8, 3),
('02:45:00', 'activo', 9, 3),
('04:50:00', 'activo', 10, 3),
('05:01:00', 'activo', 11, 3),
('03:03:00', 'activo', 12, 3),
('08:00:00', 'activo', 13, 3),
('09:00:00', 'activo', 14, 3),
('10:00:00', 'activo', 15, 3);

INSERT INTO producto (descripProducto, precioProducto, categoriaProducto, estadoProducto) VALUES
('Camisa tejida clásica', 45000, 'camisas', 'activo'),
('Camisa de hilo manga larga', 52000, 'camisas', 'activo'),
('Pantalón de lana elegante', 68000, 'pantalones', 'activo'),
('Pantalón jogger tejido', 55000, 'pantalones', 'activo'),
('Falda tejida midi', 48000, 'faldas', 'activo'),
('Falda de lana cintura alta', 53000, 'faldas', 'activo'),
('Saco de lana clásico', 72000, 'sacos', 'activo'),
('Saco jersey básico', 60000, 'sacos', 'activo'),
('Blazer elegante slim fit', 85000, 'blazers', 'activo'),
('Blazer oversize moderno', 78000, 'blazers', 'activo'),
('Chaleco tejido casual', 47000, 'chalecos', 'activo'),
('Chaleco de lana elegante', 52000, 'chalecos', 'activo'),
('Gorro tejido invierno', 25000, 'gorros', 'activo'),
('Gorro casual urbano', 22000, 'gorros', 'activo'),
('Uniforme médico antifluidos', 65000, 'enfermeria', 'activo'),
('Bata médica blanca', 58000, 'enfermeria', 'activo');
INSERT INTO detallepedido (idProductoFK, cantidadProducto, precioProducto, subtotalProducto, idPedidoFK) VALUES
(1, 2, 1300, 2600, 1),
(2, 15, 1800, 27000, 2),
(3, 3, 1500, 4500, 3),
(4, 13, 2500, 32500, 4),
(5, 2, 7800, 15600, 5),
(6, 24, 1900, 45600, 6),
(7, 3, 3200, 9600, 7),
(8, 8, 1200, 9500, 8),
(9, 6, 4000, 24000, 9),
(10, 2, 6000, 12000, 10),
(11, 5, 4200, 21000, 11),
(12, 4, 9000, 36000, 12),
(13, 12, 5200, 62400, 13),
(14, 6, 11200, 67200, 14),
(15, 3, 2400, 7200, 15);

#ACTUALIZACIONES

UPDATE detallepedido SET precioProducto= 1000  WHERE idPedidoFk = 1;
UPDATE detallepedido SET  subtotalProducto= 70000  WHERE idDetallePedido= 7;
UPDATE detallepedido SET cantidadProducto= 2500  WHERE idDetallePedido = 2;
UPDATE detallepedido SET subtotalProducto= 70000  WHERE idProductoFK = 8;
UPDATE detallepedido SET precioProducto= 5000  WHERE idDetallePedido = 5;

UPDATE domicilio SET  horaDomicilio= 111100  WHERE idPedidoFk= 4 ;
UPDATE domicilio SET  horaDomicilio= 191200 WHERE idPedidoFk= 11 ;
UPDATE domicilio SET estadoDomicilio= 'inactivo' WHERE idPedidoFk= 7 ;
UPDATE domicilio SET  estadoDomicilio= 'inactivo'  WHERE idPedidoFk= 9 ;
UPDATE domicilio SET  horaDomicilio = 7 WHERE idPedidoFk= 6 ;

UPDATE pedido SET  fechaPedido= 20230226  WHERE idUsuarioFK= 7 ;
UPDATE pedido SET  horaPedido= 015900  WHERE idPedido = 46 ;
UPDATE pedido SET  totalPedido= 0  WHERE idPedido= 3 ;
UPDATE pedido SET totalPedido= 54 WHERE idUsuarioFK= 9  ;
UPDATE pedido SET totalPedido= 201  WHERE idUsuarioFK = 2 ;

UPDATE producto SET precioProducto=27   WHERE idProducto= 18 ;
UPDATE producto SET precioProducto=45 WHERE idProducto= 21 ;
UPDATE producto SET precioProducto=187 WHERE idProducto= 9 ;
UPDATE producto SET precioProducto=54 WHERE idProducto= 16 ;
UPDATE producto SET  precioProducto=82  WHERE idProducto= 17 ;

UPDATE usuario SET nombreUsuario = 'paco'  WHERE idUsuario =5;
UPDATE usuario SET tipoDocUsuario = 'ti' WHERE idUsuario=2 ;
UPDATE usuario SET passwordUsuario = 065 WHERE idUsuario=8 ;
UPDATE usuario SET estadousuario = 'inactivo' WHERE idUsuario=1 ;
UPDATE usuario SET apellidoUsuario = 'oviedi' WHERE idUsuario=3 ;

set foreign_key_checks=0;

# ELIMINACIONES 
DELETE FROM detallepedido WHERE idDetallePedido=7;
DELETE FROM domicilio WHERE idDomicilio=8;
DELETE FROM pedido WHERE idPedido= 1;
DELETE FROM producto WHERE idProducto=10;
DELETE FROM rolusuario WHERE idRolUsuario=11;
DELETE FROM usuario WHERE idUsuario=12;
-- -------------------------------------------------------
        
#CONSULTAS 

SELECT * FROM detallepedido;
SELECT * FROM domicilio;
SELECT * FROM pedido;
SELECT * FROM producto;
SELECT * FROM usuario;
SELECT * FROM rolusuario;

  # CONSULTA CON WHERE 
SELECT * FROM `detallepedido` WHERE idDetallePedido=2;
SELECT * FROM `domicilio` WHERE idDomicilio=9;
SELECT * FROM `pedido` WHERE idPedido=14;
SELECT * FROM `producto` WHERE idProducto=7;
SELECT * FROM `rolusuario` WHERE idRolUsuario=8;
SELECT * FROM `usuario` WHERE idUsuario=4;


# CONSULTA CON LIKE

SELECT * FROM detallepedido WHERE cantidadProducto LIKE '_';
SELECT * FROM domicilio WHERE idPedidoFk LIKE '__';
SELECT * FROM pedido WHERE totalPedido LIKE '2%';
SELECT * FROM producto WHERE descripProducto LIKE '%m%';
SELECT * FROM rolusuario WHERE descripRolUsuario LIKE '%e';


# CONSULTA CON BETWEEN

SELECT * FROM detallepedido
WHERE idProductoFK  BETWEEN 1 AND 3;
SELECT * FROM domicilio
WHERE horaDomicilio  BETWEEN 5 AND 6;
SELECT * FROM pedido
WHERE idPedido  BETWEEN 1 AND 8;
SELECT * FROM producto
WHERE descripProducto  BETWEEN 2 AND 4;
SELECT * FROM rolusuario
WHERE   idRolUsuario between 3 AND 5;
SELECT * FROM usuario
WHERE idUsuario  BETWEEN 6 AND 12;

# CONSULTAS MULTITABLA (INNER JOIN)

SELECT p.idPedido, p.fechaPedido, d.idDetallePedido, d.cantidadProducto, d.precioProducto, u.nombreUsuario, u.apellidoUsuario
FROM pedido p
INNER JOIN detallepedido d ON p.idPedido = d.idPedidoFK
INNER JOIN usuario u ON p.idUsuarioFK = u.idUsuario;

SELECT p.idPedido, p.fechaPedido, p.totalPedido, d.horaDomicilio, d.estadoDomicilio
FROM pedido p
INNER JOIN domicilio d ON p.idPedido = d.idPedidoFK;

SELECT p.idPedido, p.fechaPedido, u.nombreUsuario, u.apellidoUsuario,
       u.direccionUsuario, u.telefonoUsuario, prod.descripProducto,
       dp.cantidadProducto, dp.precioProducto, dp.subtotalProducto,
       p.totalPedido
FROM pedido p
INNER JOIN usuario u ON p.idUsuarioFK = u.idUsuario
INNER JOIN detallepedido dp ON p.idPedido = dp.idPedidoFK
INNER JOIN producto prod ON dp.idProductoFK = prod.idProducto
WHERE p.idPedido = 3; 


# PROCEDIMIENTOS ALMACENADOS
DELIMITER $
CREATE PROCEDURE CrearRolUsuario(
  IN descripRolUsuario VARCHAR(30),
  IN estadoRolUsuario VARCHAR(30)
)
BEGIN
  INSERT INTO rolusuario (descripRolUsuario, estadoRolUsuario)
  VALUES (descripRolUsuario, estadoRolUsuario);
END$

DELIMITER $
CREATE PROCEDURE ObtenerRolUsuarioPorID(
  IN idRolUsuario INT
)
BEGIN
  SELECT *
  FROM rolusuario
  WHERE idRolUsuario = idRolUsuario;
END$

DELIMITER $
CREATE PROCEDURE ActualizarRolUsuario(
  IN idRolUsuario INT,
  IN nuevoDescripRolUsuario VARCHAR(30),
  IN nuevoEstadoRolUsuario VARCHAR(30)
)
BEGIN
  UPDATE rolusuario
  SET descripRolUsuario = nuevoDescripRolUsuario,
      estadoRolUsuario = nuevoEstadoRolUsuario
  WHERE idRolUsuario = idRolUsuario;
END$

DELIMITER $
CREATE PROCEDURE EliminarRolUsuario(
  IN idRolUsuario INT
)
BEGIN
  DELETE FROM rolusuario
  WHERE idRolUsuario = idRolUsuario;
END$
Delimiter $
CREATE PROCEDURE CrearUsuario(
  IN tipoDocUsuario VARCHAR(30),
  IN numdocUsuario VARCHAR(20),
  IN nombreUsuario VARCHAR(50),
  IN apellidoUsuario VARCHAR(50),
  IN direccionUsuario VARCHAR(80),
  IN telefonoUsuario VARCHAR(20),
  IN correoUsuario VARCHAR(70),
  IN passwordUsuario VARCHAR(20),
  IN estadoUsuario VARCHAR(30),
  IN id_RolUsuario_fk INTEGER
)
BEGIN
  INSERT INTO usuario (tipoDocUsuario, numdocUsuario, nombreUsuario, apellidoUsuario, direccionUsuario,
    telefonoUsuario, correoUsuario, passwordUsuario, estadoUsuario, id_RolUsuario_fk)
  VALUES (tipoDocUsuario, numdocUsuario, nombreUsuario, apellidoUsuario, direccionUsuario,
    telefonoUsuario, correoUsuario, passwordUsuario, estadoUsuario, id_RolUsuario_fk);
END$
Delimiter $
CREATE PROCEDURE ObtenerUsuarioPorID(
  IN usuarioID INT
)
BEGIN
  SELECT *
  FROM usuario
  WHERE idUsuario = usuarioID;
END$
Delimiter $
CREATE PROCEDURE ActualizarUsuario(
  IN usuarioID INT,
  IN nuevoTipoDocUsuario VARCHAR(30),
  IN nuevoNumDocUsuario VARCHAR(20),
  IN nuevoNombreUsuario VARCHAR(50),
  IN nuevoApellidoUsuario VARCHAR(50),
  IN nuevaDireccionUsuario VARCHAR(80),
  IN nuevoTelefonoUsuario VARCHAR(20),
  IN nuevoCorreoUsuario VARCHAR(70),
  IN nuevoPasswordUsuario VARCHAR(20),
  IN nuevoEstadoUsuario VARCHAR(30),
  IN nuevoId_RolUsuario_fk INTEGER
)
BEGIN
  UPDATE usuario
  SET tipoDocUsuario = nuevoTipoDocUsuario,
      numdocUsuario = nuevoNumDocUsuario,
      nombreUsuario = nuevoNombreUsuario,
      apellidoUsuario = nuevoApellidoUsuario,
      direccionUsuario = nuevaDireccionUsuario,
      telefonoUsuario = nuevoTelefonoUsuario,
      correoUsuario = nuevoCorreoUsuario,
      passwordUsuario = nuevoPasswordUsuario,
      estadoUsuario = nuevoEstadoUsuario,
      id_RolUsuario_fk = nuevoId_RolUsuario_fk
  WHERE idUsuario = usuarioID;
END$
Delimiter $
CREATE PROCEDURE EliminarUsuario(
  IN usuarioID INT
)
BEGIN
  DELETE FROM usuario
  WHERE idUsuario = usuarioID;
END$
Delimiter $
CREATE PROCEDURE CrearPedido(
  IN fechaPedido DATE,
  IN horaPedido TIME,
  IN totalPedido DOUBLE,
  IN estadoPedido VARCHAR(30),
  IN idUsuarioFK INT
)
BEGIN
  INSERT INTO pedido (fechaPedido, horaPedido, totalPedido, estadoPedido, idUsuarioFK)
  VALUES (fechaPedido, horaPedido, totalPedido, estadoPedido, idUsuarioFK);
END$
Delimiter $
CREATE PROCEDURE ObtenerPedidoPorID(
  IN pedidoID INT
)
BEGIN
  SELECT *
  FROM pedido
  WHERE idPedido = pedidoID;
END$
Delimiter $
CREATE PROCEDURE ActualizarPedido(
  IN pedidoID INT,
  IN nuevaFechaPedido DATE,
  IN nuevaHoraPedido TIME,
  IN nuevoTotalPedido DOUBLE,
  IN nuevoEstadoPedido VARCHAR(30),
  IN nuevoIdUsuarioFK INT
)
BEGIN
  UPDATE pedido
  SET fechaPedido = nuevaFechaPedido,
      horaPedido = nuevaHoraPedido,
      totalPedido = nuevoTotalPedido,
      estadoPedido = nuevoEstadoPedido,
      idUsuarioFK = nuevoIdUsuarioFK
  WHERE idPedido = pedidoID;
END$
Delimiter $
CREATE PROCEDURE EliminarPedido(
  IN pedidoID INT
)
BEGIN
  DELETE FROM pedido
  WHERE idPedido = pedidoID;
END$
Delimiter $
CREATE PROCEDURE CrearDomicilio(
  IN horaDomicilio TIME,
  IN estadoDomicilio VARCHAR(30),
  IN idPedidoFK INT
)
BEGIN
  INSERT INTO domicilio (horaDomicilio, estadoDomicilio, idPedidoFK)
  VALUES (horaDomicilio, estadoDomicilio, idPedidoFK);
END$

Delimiter $
CREATE PROCEDURE ObtenerDomicilioPorID(
  IN domicilioID INT
)
BEGIN
  SELECT *
  FROM domicilio
  WHERE idDomicilio = domicilioID;
END$
Delimiter $
CREATE PROCEDURE ActualizarDomicilio(
  IN domicilioID INT,
  IN nuevaHoraDomicilio TIME,
  IN nuevoEstadoDomicilio VARCHAR(30),
  IN nuevoIdPedidoFK INT,
  IN nuevoIdUsuarioFK INT
)
BEGIN
  UPDATE domicilio
  SET horaDomicilio = nuevaHoraDomicilio,
      estadoDomicilio = nuevoEstadoDomicilio,
      idPedidoFK = nuevoIdPedidoFK,
      idUsuarioFK = nuevoIdUsuarioFK
  WHERE idDomicilio = domicilioID;
END$
Delimiter $
CREATE PROCEDURE EliminarDomicilio(
  IN domicilioID INT
)
BEGIN
  DELETE FROM domicilio
  WHERE idDomicilio = domicilioID;
END$

Delimiter $
CREATE PROCEDURE CrearDetallePedido(
  IN idProductoFK INT,
  IN cantidadProducto INT,
  IN precioProducto DOUBLE,
  IN subtotalProducto DOUBLE,
  IN idPedidoFK INT
)
BEGIN
  INSERT INTO detallepedido (idProductoFK, cantidadProducto, precioProducto, subtotalProducto, idPedidoFK)
  VALUES (idProductoFK, cantidadProducto, precioProducto, subtotalProducto, idPedidoFK);
END$
Delimiter $
CREATE PROCEDURE ObtenerDetallePedidoPorID(
  IN detallePedidoID INT
)
BEGIN
  SELECT *
  FROM detallepedido
  WHERE idDetallePedido = detallePedidoID;
END$
Delimiter $
CREATE PROCEDURE ActualizarDetallePedido(
  IN detallePedidoID INT,
  IN nuevoIdProductoFK INT,
  IN nuevaCantidadProducto INT,
  IN nuevoPrecioProducto DOUBLE,
  IN nuevoSubtotalProducto DOUBLE,
  IN nuevoIdPedidoFK INT
)
BEGIN
  UPDATE detallepedido
  SET idProductoFK = nuevoIdProductoFK,
      cantidadProducto = nuevaCantidadProducto,
      precioProducto = nuevoPrecioProducto,
      subtotalProducto = nuevoSubtotalProducto,
      idPedidoFK = nuevoIdPedidoFK
  WHERE idDetallePedido = detallePedidoID;
END$
Delimiter $
CREATE PROCEDURE EliminarDetallePedido(
  IN detallePedidoID INT
)
BEGIN
  DELETE FROM detallepedido
  WHERE idDetallePedido = detallePedidoID;
END$
Delimiter $
CREATE PROCEDURE CrearProducto(
  IN descripProducto VARCHAR(100),
  IN precioProducto DOUBLE,
  IN categoriaProducto VARCHAR(40),
  IN estadoProducto VARCHAR(30)
)
BEGIN
  INSERT INTO producto (descripProducto, precioProducto, categoriaProducto, estadoProducto)
  VALUES (descripProducto, precioProducto, categoriaProducto, estadoProducto);
END$

CREATE PROCEDURE ObtenerProductoPorID(
  IN productoID INT
)
BEGIN
  SELECT *
  FROM producto
  WHERE idProducto = productoID;
END$
Delimiter $
CREATE PROCEDURE ActualizarProducto(
  IN productoID INT,
  IN nuevoDescripProducto VARCHAR(100),
  IN nuevoPrecioProducto DOUBLE,
  IN nuevoCategoriaProducto VARCHAR(40),
  IN nuevoEstadoProducto VARCHAR(30)
)
BEGIN
  UPDATE producto
  SET descripProducto = nuevoDescripProducto,
      precioProducto = nuevoPrecioProducto,
      categoriaProducto = nuevoCategoriaProducto,
      estadoProducto = nuevoEstadoProducto
  WHERE idProducto = productoID;
END$
Delimiter $
CREATE PROCEDURE EliminarProducto(
  IN productoID INT
)
BEGIN
  DELETE FROM producto
  WHERE idProducto = productoID;
END$






# VISTAS


CREATE VIEW vista_producto AS
SELECT descripProducto, categoriaProducto, estadoProducto 
FROM producto;

CREATE VIEW vista_rolusuario AS
SELECT idRolUsuario, descripRolUsuario, estadoRolUsuario
FROM rolusuario;

CREATE VIEW vista_detallepedido AS
SELECT idDetallepedido, idProductoFK, cantidadProducto, precioProducto, subtotalProducto, idPedidoFK
FROM detallepedido;usuario

CREATE VIEW vista_Usuario AS
SELECT *
FROM Usuario 

CREATE VIEW vista_Usuario AS
SELECT *
FROM Usuario 

CREATE VIEW vista_domicilio AS
SELECT id_domicilio, horaDomicilio
FROM domicilio;

CREATE VIEW vista_pedido AS
SELECT id_Pedido, fecha_Pedido, hora_Pedido, total_Pedido, id_usuario, pedidoaDomicilio
FROM pedido;


CREATE VIEW VistaRolesInactivos AS
SELECT *
FROM rolusuario
WHERE estadoRolUsuario = 'Inactivo';

CREATE VIEW VistaUsuariosInactivos AS
SELECT *
FROM usuario
WHERE estadoUsuario = 'Inactivo';

CREATE VIEW VistaPedidosPendientes AS
SELECT *
FROM pedido
WHERE estadoPedido = 'Pendiente';

CREATE VIEW VistaPedidosCompletados AS
SELECT *
FROM pedido
WHERE estadoPedido = 'Completado';

CREATE VIEW VistaDomiciliosEnProceso AS
SELECT *
FROM domicilio
WHERE estadoDomicilio = 'En Proceso';


CREATE VIEW VistaDomiciliosEntregados AS
SELECT *
FROM domicilio
WHERE estadoDomicilio = 'Entregado';

CREATE VIEW VistaProductosDisponibles AS
SELECT *
FROM producto
WHERE estadoProducto = 'Disponible';


CREATE VIEW VistaProductosAgotados AS
SELECT *
FROM producto
WHERE estadoProducto = 'Agotado';


# DISPARADOR


CREATE TABLE registro_auditoria_usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  idUsuario INT,
  fecha_actualizacion TIMESTAMP
);

DELIMITER //
CREATE TRIGGER auditar_actualizacion_usuario
AFTER UPDATE ON usuario
FOR EACH ROW
BEGIN
  INSERT INTO registro_auditoria_usuario (idUsuario, fecha_actualizacion)
  VALUES (OLD.idUsuario, NOW());
END//
DELIMITER ;



