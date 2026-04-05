-- Use this migration to convert the existing cart table to auto-increment primary keys.
ALTER TABLE ooplogin.cart
  MODIFY cart_id INT(11) NOT NULL AUTO_INCREMENT,
  ADD PRIMARY KEY (cart_id);
