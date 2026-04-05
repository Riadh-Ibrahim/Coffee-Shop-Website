## Coffee-Shop-Website

Web application for **Kyufi** Coffee shop, offering a unique blend of coffee and gaming experiences. Using PHP, HTML, CSS, and JavaScript, this website not only serves as a platform for ordering your favorite brews but also provides an immersive gaming experience.

![Screenshot 2024-06-12 164501](https://github.com/Riadh-Ibrahim/Coffee-Shop-Website/assets/110717872/12d402bf-6160-480f-877a-ceecda2e525e)


![Screenshot 2024-06-12 164534](https://github.com/Riadh-Ibrahim/Coffee-Shop-Website/assets/110717872/e3ab6254-7d39-4c4e-bd6d-0a37420b8d52)

![Screenshot 2024-06-12 164552](https://github.com/Riadh-Ibrahim/Coffee-Shop-Website/assets/110717872/3f33663f-6378-4f79-84e0-ccc6538f0462)

![Screenshot 2024-06-12 164647](https://github.com/Riadh-Ibrahim/Coffee-Shop-Website/assets/110717872/bdf1cc7a-3ccc-4a29-9e1c-f395a6988a28)

![Screenshot 2024-06-12 164708](https://github.com/Riadh-Ibrahim/Coffee-Shop-Website/assets/110717872/81acf6e5-8dd9-4cdd-be74-9cbac191d9b4)

## Run locally

1. Ensure PHP is installed.
2. Create the required database and import `DataBase/ooplogin.sql` into MySQL.

   If your MySQL root account uses socket authentication and PHP cannot connect as `root`, create a dedicated database user:

   ```bash
   sudo mysql
   CREATE USER 'coffee'@'localhost' IDENTIFIED BY 'secret';
   GRANT ALL PRIVILEGES ON ooplogin.* TO 'coffee'@'localhost';
   FLUSH PRIVILEGES;
   EXIT;
   ```

   Then export the credentials in your shell before running the app:

   ```bash
   export DB_USER=coffee
   export DB_PASS=secret
   export DB_HOST=127.0.0.1
   export DB_NAME=ooplogin
   ```

   Note: run these `export` commands in the same shell session where you start `php8.3 -S`.

   If you already imported the database, update the `users_tel` column so it can store 10-digit values:

   ```bash
   sudo mysql -u root -e "ALTER TABLE ooplogin.users MODIFY users_tel VARCHAR(20) NOT NULL;"
   ```

   Also update the `cart` table to use an auto-increment primary key:

   ```bash
   sudo mysql -u root -e "ALTER TABLE ooplogin.cart MODIFY cart_id INT(11) NOT NULL AUTO_INCREMENT, ADD PRIMARY KEY (cart_id);"
   ```

3. Ensure the PHP MySQL extension is installed:

   ```bash
   sudo apt update
   sudo apt install php-mysql
   ```

   If that package is unavailable, install the matching PHP version driver:

   ```bash
   sudo apt install php$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')-mysql
   ```

If your `php` command points to a custom build (for example `/home/codespace/.php/current/bin/php`), install the system PHP CLI and use that binary:

   ```bash
   sudo apt install php-cli
   sudo apt install php8.3-cli
   sudo update-alternatives --config php
   ```

4. From the project root, run:

   ```bash
   chmod +x run.sh
   ./run.sh
   ```

   If port `8000` is already in use, start the app on another port:

   ```bash
   ./run.sh 8001
   ```

5. Open `http://127.0.0.1:8000` in your browser (or the port you chose).

---

### Troubleshooting

If you see an error like `Undefined constant PDO::MYSQL_ATTR_INIT_COMMAND`, install the PHP MySQL driver and restart the app:

```bash
sudo apt install php-mysql
./run.sh
```

If your `php` binary is a custom build and does not load system extensions, use the system PHP CLI instead:

```bash
sudo apt install php8.3-cli php8.3-mysql
sudo update-alternatives --config php
./run.sh
```
