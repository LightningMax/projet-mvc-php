# projet-mvc-php

Commandes pour initier la base de données pour commande produit:

```sql
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
