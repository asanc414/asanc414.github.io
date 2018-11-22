<!-- ***********************************************************************************
  Page Name  : contact_controller.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #5 : Assignment #5
  Purpose    : Load the data inputted by the user to add it to the database. 

  Due Date   : 11/19/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->

<html>
  <head>
    <title>Contact_Us_Controller</title>
  </head>
          
  <body>
      
    <?php

      //connecting to mysql 
      //                                server                 user        password     database     
      $connection = mysqli_connect("ocelot.aul.fiu.edu","fall18_asanc414","6058389","fall18_asanc414");

      if (mysqli_connect_errno())
      {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else
      {             
          $dbName="fall18_asanc414"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {                   
             //access to a table                    
             $tableName = "contacts";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The table ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),                    
                        Email VARCHAR(30),
                        Comments VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db */
                
       }//end if (mysqli_connect_errno()) connecting to mysql    
                  
      //extract the data inputted by the user creating global php fields 
      $Telephone    = $_POST['UserTel'];
      $FirstName    = $_POST['UserName'];
      $LastName     = $_POST['LastName'];
      $Email        = $_POST['UserEmail'];
      $Comments     = $_POST['Comments'];           
      if ( $_POST['submit'] )
      { 
        $Telephone=trim($Telephone);
        if(strlen($Telephone)>0)           
        {   
          $sql="INSERT INTO contacts (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  Comments      
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$Comments'                   
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //New record created successfully
             $message3 ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message3 ="<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span><br\>";
          }
          
        }//end if(strlen($Telephone)>0)                      
        else
        {
          $message3 ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CANNOT BE EMPTY</span><br\>";
        } 
        include('Contact_Us.php');
      }
      else
      { 
         echo "<br><h1> you pressed UNKOWN button</h1>";   
      }

      mysqli_close($connection);   

    ?> 
                 
  </body>

</html>
