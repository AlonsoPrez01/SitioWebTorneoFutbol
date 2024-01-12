DROP DATABASE IF EXISTS Torneo;
CREATE DATABASE Torneo;
USE Torneo;

DROP TABLE IF EXISTS Equipos;
CREATE TABLE Equipos (
  Id_equipo INT PRIMARY KEY AUTO_INCREMENT,
  NombreEquipo CHAR(80)
);

DROP TABLE IF EXISTS Jugadores;
CREATE TABLE Jugadores (
  Id_Jugador INT PRIMARY KEY AUTO_INCREMENT,
  Nombre CHAR(80),
  ApellidoPaterno CHAR(80),
  ApellidoMaterno CHAR(80),
  Edad INT,
  Estado BOOLEAN
);

DROP TABLE IF EXISTS Administrador;
CREATE TABLE Administrador (
	Id INT PRIMARY KEY AUTO_INCREMENT,
	UserAdmin CHAR(80),
    ContraAdmin CHAR(80)
);

DROP TABLE IF EXISTS proximoJuego;
CREATE TABLE proximoJuego (
	Id_pJuego INT PRIMARY KEY AUTO_INCREMENT,
    eLocal CHAR(80),
    eVisitante CHAR(80)
);

DROP TABLE IF EXISTS ultimoJuego;
CREATE TABLE ultimoJuego (
	Id_Juego INT PRIMARY KEY AUTO_INCREMENT,
    equipoLocal CHAR(80),
    golesLocal INT,
    equipoVisitante CHAR(80),
    golesVisitante INT
);