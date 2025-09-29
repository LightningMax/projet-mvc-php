# projet-mvc-php

Commandes pour initier la base de données pour commande produit:

```sql
CREATE TABLE product (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description TEXT,
  price DECIMAL(10,2) NOT NULL,
  image VARCHAR(255) NOT NULL
);

INSERT INTO product (name, description, price, image) VALUES
('Bike5','Bike5 — le dernier né. Moteur 250W, autonomie 80km.','1499.00','public/images/bike1.jpg'),
('BikeOne','BikeOne — ville & confort. Cadre alu, assistance douce.','1199.00','public/images/bike2.jpg'),
('Bike22','Bike22 — sportif léger. Géométrie sport, frein disque.','999.00','public/images/bike3.jpg'),
('BikeFirst','BikeFirst — entrée de gamme fiable. Batterie amovible.','799.00','public/images/bike4.jpg');

CREATE TABLE orderProduct (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT,
    FOREIGN KEY (product_id) REFERENCES product(id)
);

CREATE TABLE `contact` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`nom` varchar(50) NOT NULL,
`prenom` varchar(50) NOT NULL,
`email` varchar(100) NOT NULL,
`message` text NOT NULL
);
```
