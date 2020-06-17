<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guestbook</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Bannersection-->
    <div class="banner">
      <header>
        <a href="home.html" class="home">Home</a>
        <a href="portfolio.html" class="portfolio">Portfolio</a>
        <a href="services.html" class="page">Services</a>
        <a href="guestbook.php" class="page">Guestbook</a>
      </header>
      <img src="cj-unsplash.jpg" alt="" />
      <div class="content">
        <h2>Succes through Knowledge</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eum
          mollitia totam, exercitationem laboriosam vel optio eligendi eveniet,
          perspiciatis molestiae, harum nulla placeat quos hic ipsam id in
          numquam recusandae similique reprehenderit nemo ipsum tenetur?
        </p>
      </div>
      <section>
        <div class="worked-with">
        <?php

//Connecting to Database
    try
    {
        $pdo_con = new PDO("mysql:host=localhost;dbname=demobd","root","");
        $pdo_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connection established<br>";
    }
    catch (PDOException $e)
    {
        die("Error: Could not connect. " . $e->getMessage());
    }
    
//Creating Database 
/*    try 
    {
        $sql = "create database demodb";
        $pdo_con->exec($sql);
    }
    catch (PDOException $e)
    {
        die("Error: Not able to execute $sql. " . $e->getMessage());
    }



//Creating Tables in the DB
 try{
    $sql = "CREATE TABLE persons(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE
    )";    
    $pdo_con->exec($sql);
    echo "Table created successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
} 
 

//Adding Values into the Tables
try
{
        $sql = "INSERT INTO persons (first_name, last_name,email)
                VALUES('Robert','Zeigner','zeigner.r@gmx.de')";
                $pdo_con->exec($sql);
    }
    catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
} 

try
{
    $sql = "INSERT INTO persons (first_name, last_name,email)
            VALUES('Hugo','Herber','hugo.h@mail.de')";
            $pdo_con->exec($sql);
}

catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try
{
    $sql = "INSERT INTO persons (first_name, last_name,email)
            VALUES('Gundula','Gause','gause.g@mail.de')";
            $pdo_con->exec($sql);
}

catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try
{
    $sql = "INSERT INTO persons (first_name, last_name,email)
            VALUES('Dagobert','Duck','duck.d@mail.de')";
            $pdo_con->exec($sql);
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 */
 
    try{
        $sql = "SELECT * FROM persons";   
        $result = $pdo_con->query($sql);
        if($result->rowCount() > 0){
            echo "<table>";
                echo "<tr>";
                    
                    echo "<th>Vorname</th>";
                    echo "<th>Nachname</th>";
                    echo "<th>EMail</th>";
                echo "</tr>";
            while($row = $result->fetch()){
                echo "<tr>";
                    
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            unset($result);
        } else{
            echo "No records matching your query were found.";
        }
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    unset($pdo_con);
?>
        </div>
      </section>
    </div>
  </body>
</html>
