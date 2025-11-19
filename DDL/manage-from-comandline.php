go to xamp control panel
click to shell
# mysql -h localhost -u root -p
<!-- pass / default none -->
<!-- to see databases -->
show databases;
<!-- To remove database -->
DROP DATABASE db_name;
<!-- SHOW database -->
SHOW command_db_t1;
<!-- USE DATABASE database; -->
USE command_db_t1;
<!-- CRETE TABLE IN  COMMAND LINE  -->
 CREATE TABLE userss(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(125) NOT NULL);
 <!-- Select Table -->
  SHOW COLUMNS FROM sdmsubscriptions;
  <!-- Delete data from db table -->
   delete from customers where customerID = 11;
   delete from students where studentID = 11;

   <!-- select from database table -->
    select * from customers where customerID = 11;

    <!-- Update Data -->
      UPDATE customers SET customer_name = 'Karimul', city = 'Natore', contact_name = 'Islam' WHERE customers . customerID = 10;
      