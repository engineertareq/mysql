CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price FLOAT NOT NULL,
    quantity SMALLINT
);
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price FLOAT NOT NULL,
    quantity SMALLINT
);

