USE `loc`;

INSERT INTO `users` VALUES 
(1,"Pedro Henrique","123.456.789-12","pedroh@gmail.com","images/usuario/1.jpg","123456","2020/04/03 17:55:00",1,"2020/04/03 17:55:00","2020/04/03 17:55:00"),
(2,"Maria Eduarda","124.556.769-22","madu@gmail.com","images/usuario/2.jpg","123456","2020/04/03 17:55:00",0,"2020/04/03 17:55:00","2020/04/03 17:55:00"),
(3,"Marco Antônio","523.446.869-16","antonio@gmail.com","images/usuario/3.jpg","123456","2020/04/03 17:55:00",1,"2020/04/03 17:55:00","2020/04/03 17:55:00");


INSERT INTO `pets` VALUES 
(1,"achado","2020/04/02 17:55:00","cao","shih tzu","preto","branco","f","longo",1,NULL,"adulto","achada perto da faculdade",1,1,"2020/04/03 17:55:00","2020/04/03 17:55:00"),
(2,"achado","2020/01/31 12:56:00","gato","persa","cinza","cinza","m","longo",1,NULL,"Aproximadamente 3 anos","encontrei no parque da cidade",0,2,"2020/02/01 12:56:00","2020/02/01 12:56:00"), 
(3,"perdido","2020/04/02 11:36:00","cao","labrador","bege","bege","m","curto",4,"Tuca","5 anos","fugiu de casa no bairro Bela Vista",0,3,"2020/04/03 11:36:00","2020/04/03 11:36:00"),
(4,"perdido","2020/03/25 10:16:00","gato","srd","cinza","branco","f","curto",3,"Gaia","filhote","usa uma coleira vermelha",1,2,"2020/03/28 10:16:00","2020/03/28 10:16:00"),
(5,"achado","2020/03/23 10:16:00","cao","srd","preto","marrom","m","longo",3,"Da Vinci",NULL,"Da Vinci é um SRD que foi achado próximo ao posto de gasolina da Av Santo Amaro, no dia 12/05/2019. Estava com um coleira laranja, mas sem identificação. Tem os pelos longos, da cor preta e o fucinho da cor branca. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores voluptatibus aliquam similique id assumenda impedit",0,3,"2020/03/29 10:16:00","2020/03/29 10:16:00");

INSERT INTO `pet_pics` VALUES 
(1,"images/pet/1.jpg",1,1), 
(2,"images/pet/1_2.jpg",2,1), 
(3,"images/pet/1_3.jpg",3,1),
(4,"images/pet/2.jpg",1,2),
(5,"images/pet/2_2.jpg",2,2),
(6,"images/pet/3.jpg",1,3),
(7,"images/pet/4.jpg",1,4),
(8,"images/pet/4_2.jpg",2,4),
(9,"images/pet/5.jpg",1,5);


INSERT INTO `alerts` VALUES 
(1,"achado","2020/04/02 18:55:00",NULL,0,1,"2020/04/03 18:55:00",1,1,"2020/04/03 17:55:00","2020/04/03 17:55:00"),
(2,"achado","2020/01/30 12:56:00", NULL,0,0,NULL,2,2,"2020/02/01 12:56:00","2020/02/01 12:56:00"), 
(3,"perdido","2020/04/02 11:36:00",NULL,0,0,NULL,3,3,"2020/04/03 11:36:00","2020/04/03 11:36:00"),
(4,"perdido","2020/03/24 10:16:00",5,1,0,"2020/03/29 10:16:00",1,4,"2020/03/28 10:16:00","2020/03/28 10:16:00"),
(5,"achado","2020/03/24 10:16:00",4,1,0,"2020/03/29 10:16:00",1,4,"2020/03/29 10:16:00","2020/03/29 10:16:00"),
(6,"achado","2020/03/23 10:16:00",NULL,0,0,NULL,3,5,"2020/03/29 10:16:00","2020/03/29 10:16:00");

INSERT INTO `geoloc` VALUES 
(1,-25.432,42.3243,1,1,"2020/04/03 05:55:00","2020/04/03 05:55:00"), 
(2,-25.432,42.3,2,2,"2020/02/01 12:56:00","2020/02/01 12:56:00"), 
(3,-25.2,41.3243,3,3,"2020/04/03 11:36:00","2020/04/03 11:36:00"), 
(4,-20.432,48.2,4,1,"2020/03/28 10:16:00","2020/03/28 10:16:00");

INSERT INTO `comments` VALUES 
(1,"Primeiro comentário",1,3,"2020/04/04 01:55:00","2020/04/04 01:55:00"), 
(2,"Iniciou o chat",2,2,"2020/02/02 13:56:00","2020/02/02 13:56:00"), 
(3,"Outro comentário",3,3,"2020/04/03 11:36:00","2020/04/03 11:36:00"), 
(4,"Encerrou o chat",4,1,"2020/03/28 10:16:00","2020/03/28 10:16:00");
