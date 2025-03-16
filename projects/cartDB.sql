CREATE DATABASE shopping_cart;
USE shopping_cart;

-- Products table (Stores all available products)
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Cart table (Stores items added by users)
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    session_id VARCHAR(255) NOT NULL,  -- Unique identifier for user session
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

INSERT INTO products (name, price, image) VALUES
('Laptop', 500.00, 'images/laptop.jpg'),
('Smartphone', 299.99, 'images/smartphone.jpg')
('LED Light Strip', 15.99, 'images/Led.jpg')
('6 Phone Cases', 25.00, 'images/phonecases.jpg'),
('USB-C charger', 5.99, 'images/USB-C.jpg')


('LED Light Strip', 15.99, 'images/Led.jpg')
('Laptop', 500.00, 'images/laptop.jpg'),
('Smartphone', 299.99, 'images/smartphone.jpg')
('LED Light Strip', 15.99, 'images/Led.jpg')
('LED Light Strip', 15.99, 'images/Led.jpg')