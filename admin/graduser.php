<html>

   <head>
      <title>Update a Record in MySQL Database</title>
   </head>

   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'admin';
            $dbpass = 'admin';


            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

            if(!$conn) {
               die('Could not connect: ' . mysql_error());
            }

            $username = $_POST['username'];
            $modifstatus = $_POST['status'];

            $sql = "UPDATE user ". "SET status = $modifstatus ".
               "WHERE $username = $username" ;
            mysql_select_db('blogname');
            $retval = mysql_query( $sql, $conn );

            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";

            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text"
                           id = "emp_id"></td>
                     </tr>

                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text"
                           id = "emp_salary"></td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit"
                              id = "update" value = "Update">
                        </td>
                     </tr>

                  </table>
               </form>
            <?php
         }
      ?>

   </body>
</html>
