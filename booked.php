<!DOCTYPE html>
<html>
    <head>
       <title>Booking Details</title>
       <style>
         table{
            border-collapse: collapse;
            width: 100%;
            color: darkorchid;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 25px;
            text-align: left;
            margin-top: 100px;
         }
         th{
            background-color: darkorchid;
            color: white;
         }
         h1{
            background-color: darkorchid;
            color: white;
         }
       </style>
    </head>

    <body>
      <center><h1>Booked Members Details</h1></center>
       <table border="5">
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Native</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Place</th>
            <th>Peoples</th>
            <th>FFC</th>
            <th>Packages</th>
            <?php
            $conn=mysqli_connect("localhost","root","","register");
            $sql="SELECT Name, Age, Native, Contact, Email, Place, Peoples, FFC, Packages from reg";
            $result=$conn-> query($sql);
            if($result-> num_rows > 0){
               while($row = $result-> fetch_assoc()){
                  echo "<tr><td>".$row["Name"]."</td><td>".$row["Age"]."</td><td>".$row["Native"]."</td><td>".$row["Contact"]."</td><td>".$row["Email"]."</td><td>".$row["Place"]."</td><td>".$row["Peoples"]."</td><td>".$row["FFC"]."</td><td>".$row["Packages"]."</td></tr>";
               }
               echo "</table>";
            }
            else{
               echo "0 Details";
            }
            ?>
          </tr>
       </table>
    </body>
</html>