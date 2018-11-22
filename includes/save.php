<!-- ***********************************************************************************
  Page Name  : save.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #3 : Assignment #3
  Purpose    : Saves record requested by user 

  Due Date   : 10/15/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* --> 
<html>
    
  <body>
     
    <?php       
        
       $PantherID=trim($PantherID);
       if(strlen($PantherID)>0)           
       {   
          $sql="INSERT INTO customers (
                  PantherID,
                  LastName,
                  FirstName,
                  Email,
                  Telephone,
                  Age,
                  Major,
                  American,
                  Cuban,
                  Colombian, 
                  Dark,
                  Comments        
               )
               VALUES
               (            
                  '$PantherID',
                  '$LastName',
                  '$FirstName',
                  '$Email',
                  '$Telephone',
                  '$Age',
                  '$Major',
                  '$American',
                  '$Cuban',
                  '$Colombian', 
                  '$Dark',
                  '$Comments'                     
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //New record created successfully
             $message ="<span style=\"color: blue;\">RECORD $PantherID ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $PantherID ALREADY EXISTS</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Panther ID CANNOT BE EMPTY</span><br\>";
       } 
             
    ?>
       
  </body>

</html>
