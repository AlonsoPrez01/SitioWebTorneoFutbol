USE Torneo;

DROP PROCEDURE IF EXISTS agregarJugador;
DELIMITER &&
CREATE PROCEDURE agregarJugador(IN nNombre CHAR(80), IN nPaterno CHAR(80), IN nMaterno CHAR(80), IN nEdad INT)
BEGIN

	INSERT INTO Jugadores(Nombre, ApellidoPaterno, ApellidoMaterno, Edad, Estado)
    VALUES
    (nNombre, nPaterno, nMaterno, nEdad, True);
END &&
DELIMITER ;