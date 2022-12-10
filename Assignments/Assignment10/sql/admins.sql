DROP TABLE IF EXISTS admins;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE admins 
(
  id int NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  email varchar(60) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  status varchar(5) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

INSERT INTO admins VALUES (1, 'Andrew Esper', 'ajesper@admin.com', '$2y$10$stGfT1cmGI62SCI68R4tfOIn7eA1ZyIwjiGEXgw4v1jTFkIvT16ga', 'admin');