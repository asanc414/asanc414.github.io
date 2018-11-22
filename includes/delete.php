<!-- ***********************************************************************************
  Page Name  : delete.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #3 : Assignment #3
  Purpose    : Deletes record requested by user  

  Due Date   : 10/15/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->
<html>

  <body>
               
    <?php
   
       $found = $_POST['found']; 
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE PantherID='$PantherID'";
         
       $PantherID=trim($PantherID);
          
       //if(strlen($PantherID)>0)           
       if (  ( strlen(trim($PantherID)) > 0 ) && ($found == $PantherID) )
       {                
          if (mysqli_query($connection, $sql)) 
          {
             //Record deleted successfully found
             $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }      
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $found CANNOT BE DELETED<BR>RECORD HAS TO BE FOUND FIRST</span><br\>";
       }
       
    ?>
                           
  </body>
                    
</html>
