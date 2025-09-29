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

CREATE TABLE orderProduct (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT,
    FOREIGN KEY (product_id) REFERENCES product(id)
);
```

CREATE TABLE `contact` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`nom` varchar(50) NOT NULL,
`prenom` varchar(50) NOT NULL,
`email` varchar(100) NOT NULL,
`message` text NOT NULL
);
