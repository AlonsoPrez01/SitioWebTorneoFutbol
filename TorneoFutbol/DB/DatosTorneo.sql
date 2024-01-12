USE Torneo;

INSERT INTO Equipos (NombreEquipo)
VALUES
("Cruz Azul"),
("Chivas de Guadalajara"),
("Inter Playa"),
("Cancún F.C."),
("Manchester United"),
("F.C. América");

INSERT INTO Jugadores (Nombre, ApellidoPaterno, ApellidoMaterno, Edad, Estado)
VALUES
("Alonso", "Pérez", "Flores", "20", True),
("Gullermo", "Ochoa", "Gimenez", 25, True),
("Jesus", "Gallardo", "Benitez", 29, True),
("César", "Montes", "Estrada", 32, True),
("Néstor", "Araujo", "Gutierrez", 28, True),
("Jorge", "Sánchez", "Flores", 35, True),
("Edson", "Alvarez", "Pérez", 22, True),
("Erick", "Gutiérrez", "Dominguez", 33, True),
("Charly", "Rodriguez", "Hernandez", 24, True),
("Uriel", "Antuna", "Gomez", 27, True),
("Alexis", "Vega", "Ordoñez", 33, True);

INSERT INTO Administrador (UserAdmin, ContraAdmin)
VALUES
("userTorneo", sha1("TorneoAdmin"));

INSERT INTO ultimoJuego (equipoLocal, golesLocal, equipoVisitante, golesVisitante)
VALUES
("Cruz Azul", 3, "F.C. América", 1);

INSERT INTO proximoJuego(eLocal, eVisitante)
VALUES
("Inter Playa", "Cancún F.C.")