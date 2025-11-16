<!-- Select Dtabase -->
 use northwind;
 <!-- Select Coloum -->
  SELECT * FROM customers;
  <!-- To see individual -->
   SELECT `customerID`, `customer_name` FROM customers;
   <!-- `` is called backtik -->

   <!-- Conmditional finding -->
    SELECT * FROM `customers` WHERE `country` = 'Germany';

    SELECT * FROM `customers` WHERE `country` = 'germany' OR 'UK';

    SELECT * FROM `customers` WHERE `country` = 'germany' AND city = 'BERLIN';

    SELECT * FROM products WHERE price > 30;

        SELECT productID, product_name, price FROM products WHERE price > 30 AND price <50;

        SELECT productID, product_name, price FROM products WHERE price BETWEEN 30 AND 50;

        SELECT * FROM products WHERE price BETWEEN 30 AND 50;

        <!-- ORDERDERD BY  -->
             <!-- Ascending Order -->
        SELECT * FROM products WHERE price BETWEEN 30 AND 50 ORDER BY product_name ASC;

        <!-- Decending Order  -->
        SELECT * FROM products WHERE price BETWEEN 30 AND 50 ORDER BY product_name DESC;


        