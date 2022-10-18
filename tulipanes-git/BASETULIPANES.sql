DROP TABLE PRODUCTO;
CREATE TABLE CATEGORIA(
    ID_CATEGORIA INT NOT NULL,
    NOMBRE_CATEGORIA VARCHAR(500),
    PRIMARY KEY(ID_CATEGORIA)
);

CREATE TABLE PRODUCTO(
    ID_PRODUCTO INT NOT NULL,
    NOMBRE_PRODUCTO VARCHAR(500),
    MARCA_PRODUCTO VARCHAR(500),
    CATEGORIA_PRODUCTO INT,
    STOCK_PRODUCTO INT,
    PRECIO_PRODUCTO INT,
    PRIMARY KEY(ID_PRODUCTO),
    FOREIGN KEY (CATEGORIA_PRODUCTO) REFERENCES CATEGORIA(ID_CATEGORIA)
);

CREATE TABLE USUARIO(
    ID_USUARIO INT NOT NULL,
    NOMBRE_USUARIO VARCHAR(500),
    EMAIL_USUARIO VARCHAR(500),
    PASSWORD_USUARIO VARCHAR(500),
    ESTADO_USUARIO VARCHAR(500),
    PHONE_USUARIO INT,
    ROL_USUARIO VARCHAR(500),
    PRIMARY KEY(ID_USUARIO)
);

CREATE TABLE DEPARTAMENTO (
    ID_DEPARTAMENTO INT NOT NULL,
    NOMBRE_DEPARTAMENTO VARCHAR(500),
    PRIMARY KEY(ID_DEPARTAMENTO)
);

DROP TABLE INVENTARIO;
CREATE TABLE INVENTARIO (
    ID_INVENTARIO INT NOT NULL,
    PRODUCTO_INVENTARIO INT,
    STOCK_INVENTARIO INT,
    DEPARTAMENTO_INVENTARIO INT,
    FECHA_INVENTARIO DATE,
    PRIMARY KEY(ID_INVENTARIO),
    FOREIGN KEY (PRODUCTO_INVENTARIO) REFERENCES PRODUCTO(ID_PRODUCTO),
    FOREIGN KEY (DEPARTAMENTO_INVENTARIO) REFERENCES DEPARTAMENTO(ID_DEPARTAMENTO)
);

DROP TABLE HISTORIAL;
CREATE TABLE HISTORIAL (
    ID_HISTORIAL INT NOT NULL,
    PRODUCTO_HISTORIAL INT,
    STOCK_HISTORIAL INT,
    DEPARTAMENTO_HISTORIAL INT,
    FECHA_HISTORIAL VARCHAR(500),
    ENCARGADO_HISTORIAL VARCHAR(500),
    PRIMARY KEY(ID_HISTORIAL),
    FOREIGN KEY (PRODUCTO_HISTORIAL) REFERENCES PRODUCTO(ID_PRODUCTO),
    FOREIGN KEY (DEPARTAMENTO_HISTORIAL) REFERENCES DEPARTAMENTO(ID_DEPARTAMENTO)
);



SELECT CURDATE();
DELIMITER $$
DROP PROCEDURE IF EXISTS IDCATEGORIA$$
CREATE PROCEDURE IDCATEGORIA(OUT ID_CATEGORIA_AUX INT)
BEGIN
    SELECT MAX(ID_CATEGORIA)+1 INTO ID_CATEGORIA_AUX FROM CATEGORIA;
    IF (ID_CATEGORIA_AUX <=> null) THEN 
        SET ID_CATEGORIA_AUX = 1;
	END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS INSERTAR_CATEGORIA$$
CREATE PROCEDURE INSERTAR_CATEGORIA(IN NOMBRE VARCHAR(500), OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(NOMBRE_CATEGORIA) INTO CANT FROM CATEGORIA WHERE NOMBRE = NOMBRE_CATEGORIA;
    CALL IDCATEGORIA(@AUX);
    IF CANT = 0 THEN
        INSERT INTO CATEGORIA VALUES (@AUX,NOMBRE);
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS IDDEPARTAMENTO$$
CREATE PROCEDURE IDDEPARTAMENTO(OUT ID_DEPARTAMENTO_AUX INT)
BEGIN
    SELECT MAX(ID_DEPARTAMENTO)+1 INTO ID_DEPARTAMENTO_AUX FROM DEPARTAMENTO;
    IF (ID_DEPARTAMENTO_AUX <=> null) THEN 
        SET ID_DEPARTAMENTO_AUX = 1;
	END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS INSERTAR_DEPARTAMENTO$$
CREATE PROCEDURE INSERTAR_DEPARTAMENTO(IN NOMBRE VARCHAR(500), OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(NOMBRE_DEPARTAMENTO) INTO CANT FROM DEPARTAMENTO WHERE NOMBRE = NOMBRE_DEPARTAMENTO;
    CALL IDDEPARTAMENTO(@AUX);
    IF CANT = 0 THEN
        INSERT INTO DEPARTAMENTO VALUES (@AUX,NOMBRE);
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;




DELIMITER $$
DROP PROCEDURE IF EXISTS ELIMINAR_CATEGORIA$$
CREATE PROCEDURE ELIMINAR_CATEGORIA(IN ID INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_CATEGORIA) INTO CANT FROM CATEGORIA WHERE ID = ID_CATEGORIA;
    IF CANT = 1 THEN
		DELETE FROM CATEGORIA WHERE ID = ID_CATEGORIA;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS ELIMINAR_DEPARTAMENTO$$
CREATE PROCEDURE ELIMINAR_DEPARTAMENTO(IN ID INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_DEPARTAMENTO) INTO CANT FROM DEPARTAMENTO WHERE ID = ID_DEPARTAMENTO;
    IF CANT = 1 THEN
		DELETE FROM DEPARTAMENTO WHERE ID = ID_DEPARTAMENTO;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;


DELIMITER $$
DROP PROCEDURE IF EXISTS EDITAR_DEPARTAMENTO$$
CREATE PROCEDURE EDITAR_DEPARTAMENTO(IN ID INT,IN NOMBRE VARCHAR(500), OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_DEPARTAMENTO) INTO CANT FROM DEPARTAMENTO WHERE ID = ID_DEPARTAMENTO;
    IF CANT = 1 THEN
		UPDATE DEPARTAMENTO
        SET NOMBRE_DEPARTAMENTO = NOMBRE
        WHERE ID = ID_DEPARTAMENTO;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS EDITAR_CATEGORIA$$
CREATE PROCEDURE EDITAR_CATEGORIA(IN ID INT,IN NOMBRE VARCHAR(500), OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_CATEGORIA) INTO CANT FROM CATEGORIA WHERE ID = ID_CATEGORIA;
    IF CANT = 1 THEN
		UPDATE CATEGORIA
        SET NOMBRE_CATEGORIA = NOMBRE
        WHERE ID = ID_CATEGORIA;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;



DELIMITER $$
DROP PROCEDURE IF EXISTS INSERTAR_PRODUCTO$$
CREATE PROCEDURE INSERTAR_PRODUCTO(IN ID INT,IN NOMBRE VARCHAR(500),IN MARCA VARCHAR(500),IN CATEGORIA INT,IN STOCK INT,IN PRECIO INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_PRODUCTO) INTO CANT FROM PRODUCTO WHERE ID = ID_PRODUCTO;
    IF CANT = 0 THEN
        INSERT INTO PRODUCTO VALUES (ID,NOMBRE,MARCA,CATEGORIA,STOCK,PRECIO);
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS EDITAR_PRODUCTO$$
CREATE PROCEDURE EDITAR_PRODUCTO(IN ID INT,IN NOMBRE VARCHAR(500),IN MARCA VARCHAR(500),IN CATEGORIA INT,IN STOCK INT,IN PRECIO INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_PRODUCTO) INTO CANT FROM PRODUCTO WHERE ID = ID_PRODUCTO;
    IF CANT = 1 THEN
		UPDATE PRODUCTO
        SET NOMBRE_PRODUCTO = NOMBRE,MARCA_PRODUCTO = MARCA, CATEGORIA_PRODUCTO = CATEGORIA, STOCK_PRODUCTO = STOCK, PRECIO_PRODUCTO = PRECIO
        WHERE ID = ID_PRODUCTO;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS ELIMINAR_PRODUCTO$$
CREATE PROCEDURE ELIMINAR_PRODUCTO(IN ID INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE CANT INT;
    SELECT COUNT(ID_PRODUCTO) INTO CANT FROM PRODUCTO WHERE ID = ID_PRODUCTO;
    IF CANT = 1 THEN
		DELETE FROM PRODUCTO WHERE ID = ID_PRODUCTO;
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;




















/**

NUEVIIIII


*/

DELIMITER $$
DROP PROCEDURE IF EXISTS IDINVENTARIO$$
CREATE PROCEDURE IDINVENTARIO(OUT ID_INVENTARIO_AUX INT)
BEGIN
    SELECT MAX(ID_INVENTARIO)+1 INTO ID_INVENTARIO_AUX FROM INVENTARIO;
    IF (ID_INVENTARIO_AUX <=> null) THEN 
        SET ID_INVENTARIO_AUX = 1;
	END IF;
END
$$
DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS INSERTAR_INVENTARIO$$
CREATE PROCEDURE INSERTAR_INVENTARIO(IN ID_P INT,IN STOCK INT,IN ID_D INT, OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE FECHA DATE;
    DECLARE ST INT;
    SET FECHA = CURDATE();
    CALL IDINVENTARIO(@AUX);
    SELECT STOCK_PRODUCTO INTO ST FROM PRODUCTO WHERE ID_PRODUCTO = ID_P;

    IF (ST > STOCK) OR (ST = STOCK) THEN
        UPDATE PRODUCTO
        SET STOCK_PRODUCTO = ST-STOCK
        WHERE ID_PRODUCTO = ID_P;
        INSERT INTO INVENTARIO VALUES (@AUX,ID_P,STOCK,ID_D,FECHA);
        SET RESULTADO = 1;
	ELSE
		SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;


CALL INSERTAR_INVENTARIO(44565,14,1,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM INVENTARIO;


SELECT * FROM HISTORIAL;





DELIMITER $$
DROP PROCEDURE IF EXISTS IDHISTORIAL$$
CREATE PROCEDURE IDHISTORIAL(OUT ID_HISTORIAL_AUX INT)
BEGIN
    SELECT MAX(ID_HISTORIAL)+1 INTO ID_HISTORIAL_AUX FROM HISTORIAL;
    IF (ID_HISTORIAL_AUX <=> null) THEN 
        SET ID_HISTORIAL_AUX = 1;
    END IF;
END
$$
DELIMITER ;


DELIMITER $$
DROP PROCEDURE IF EXISTS INSERTAR_HISTORIAL$$
CREATE PROCEDURE INSERTAR_HISTORIAL(IN ID_P INT,IN STOCK INT,IN ID_D INT, IN ENCARGADO VARCHAR(500), OUT RESULTADO VARCHAR(50))
BEGIN
    DECLARE FECHA DATE;
    DECLARE ST INT;
    SET FECHA = CURDATE();
    CALL IDHISTORIAL(@AUX);
    SELECT STOCK_PRODUCTO INTO ST FROM PRODUCTO WHERE ID_PRODUCTO = ID_P;

    IF (ST > STOCK) OR (ST = STOCK) THEN
        INSERT INTO HISTORIAL VALUES (@AUX,ID_P,STOCK,ID_D,FECHA,ENCARGADO);
        SET RESULTADO = 1;
    ELSE
        SET RESULTADO = 0;
    END IF;
END
$$
DELIMITER ;








CALL INSERTAR_INVENTARIO(44565,14,1,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM INVENTARIO;


























create database tulipanesdb;
USE tulipanesdb;
/*
            PRUEBA DE PROCEDIMIENTOS DEPARTAMENTO
*/

CALL INSERTAR_DEPARTAMENTO('CHILE',@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM DEPARTAMENTO;

CALL EDITAR_DEPARTAMENTO(1,'CHILE',@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM DEPARTAMENTO;


CALL ELIMINAR_DEPARTAMENTO(2,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM DEPARTAMENTO;

/*
            PRUEBA DE PROCEDIMIENTOS CATEGORIA
*/

CALL INSERTAR_CATEGORIA('CHILE',@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM CATEGORIA;

CALL EDITAR_CATEGORIA(1,'CARLOS',@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM CATEGORIA;

CALL ELIMINAR_CATEGORIA(3,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM CATEGORIA;

/*
            PRUEBA DE PROCEDIMIENTOS PRODUCTO
*/

CALL INSERTAR_PRODUCTO(1212121,'CREMA 1 LITRO',1,12,3990,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM PRODUCTO;

CALL EDITAR_PRODUCTO(1212121,'CREMA 2 LITRO',1,25,4990,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM PRODUCTO;

CALL ELIMINAR_PRODUCTO(1212121,@RESULTADO);
SELECT @RESULTADO;
SELECT * FROM PRODUCTO;

SELECT NOMBRE_CATEGORIA FROM CATEGORIA WHERE ID_CATEGORIA = 2;

