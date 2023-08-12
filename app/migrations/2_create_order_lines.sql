-- order lines
CREATE TABLE order_lines (
     id INT AUTO_INCREMENT PRIMARY KEY,
     order_id INT NOT NULL,
     reference VARCHAR(255) NOT NULL,
     product_label VARCHAR(255) NOT NULL,
     price DOUBLE NOT NULL,
     FOREIGN KEY (order_id) REFERENCES orders(id)
);
