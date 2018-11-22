<!-- ***********************************************************************************
  Page Name  : find.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #3 : Assignment #3
  Purpose    : Finds and displays record requested by user 

  Due Date   : 10/15/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->                          
<html>
                     
  <body>
                        
    <?php
                    
       $sql="SELECT * FROM customers where PantherID = '$PantherID'";
             
       if ($result=mysqli_query($connection,$sql))
       {          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                              
          while( $row = mysqli_fetch_array( $result ) )
          { 
             $PantherID    = $row['PantherID'];     //primary key
             $LastName     = $row['LastName'];      //type="text"
             $FirstName    = $row['FirstName'];     //type="text"
             $Email        = $row['Email'];         //type="text"      
             $Telephone    = $row['Telephone'];     //type="text"
             $Age          = $row['Age'];           //type="dropdown" 
             $Major        = $row['Major'];         //type="radio"
             $American     = $row['American'];      //type="checkbox"
             $Cuban        = $row['Cuban'];         //type="checkbox" 
             $Colombian    = $row['Colombian'];     //type="checkbox"
             $Dark         = $row['Dark'];          //type="checkbox"
             $Comments     = $row['Comments'];      //type="textarea"          
          }

          $PantherID=trim($PantherID); //take all front and back spaces out
     
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {  
             $found = $PantherID;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($PantherID) == 0 )           
          {
             $message ="<span style=\"color: red;\">Panther ID CANNOT BE EMPTY</span><br>";
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $PantherID NOT FOUND</span><br>";
          }          
      }
                 
   ?>

  </body>

</html>

