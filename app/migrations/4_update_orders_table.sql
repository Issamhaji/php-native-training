ALTER TABLE orders ADD client VARCHAR(255) NULL;
ALTER TABLE orders ADD order_state INT DEFAULT (0); -- 0:cart, 1:sent
ALTER TABLE orders ADD client_comment VARCHAR(255) DEFAULT NULL;
