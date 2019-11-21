#Para traer el usuario que necesito login
SELECT * FROM crypto_email.users WHERE email="dyg9812@gmail.com";
#Para traer los mensajes recividos del usuario logueado
SELECT * FROM crypto_email.receivedmessages 
    INNER JOIN crypto_email.messages ON receivedmessages.idMessage = messages.id
    INNER JOIN crypto_email.users ON receivedmessages.`from` = users.id 
	WHERE idUser IN (SELECT id FROM crypto_email.users WHERE email = 'dyg9812@gmail.com');
#Para traer los mensajes enviados del usuario logueado
SELECT * FROM crypto_email.sentmessages 
    INNER JOIN crypto_email.messages ON sentmessages.idMessage = messages.id
    INNER JOIN crypto_email.users ON sentmessages.`for` = users.id 
	WHERE idUser IN (SELECT id FROM crypto_email.users WHERE email = 'dyg9812@gmail.com');
#Para traer los usuario disponibles que el usuario logueado tiene para enviar un correo
SELECT id, name, email FROM crypto_email.users;
#-----------------------------------------------------------------------------------------#

#Para enviar un correo del usuario logueado a otra
INSERT INTO `crypto_email`.`messages` (`transmitter`, `receiver`, `message`) VALUES ('3', '3', 'Este mensaje es para el mismo alberto');
INSERT INTO `crypto_email`.`receivedmessages` (`idUser`, `idMessage`, `from`) VALUES ('3', '6', '3');
INSERT INTO `crypto_email`.`sentmessages` (`idUser`, `idMessage`, `for`) VALUES ('3', '6', '3');

