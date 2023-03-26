mysql -u root

CREATE DATABASE HotelBooking;

USE HotelBooking;

CREATE TABLE Customer(
	NIC VARCHAR(20) NOT NULL PRIMARY KEY,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	DateOfBirth VARCHAR(20) NOT NULL,
	ContactNumber VARCHAR(30) NOT NULL,
	Email VARCHAR(30) NOT NULL UNIQUE,
	Password VARCHAR(64) NOT NULL
);

INSERT INTO `customer`(`NIC`, `FirstName`, `LastName`, `DateOfBirth`, `ContactNumber`, `Email`, `Password`) VALUES ('922346759V','Emma','Watson','30/01/1992','0761234567','emmawatson92@gmail.com','983487d9c4b7451b0e7d282114470d3a0ad50dc5e554971a4d1cda04acde670b');
	