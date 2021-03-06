<!-- ***********************************************************************************
  Page Name  : controller4.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #4 : Assignment #4
  Purpose    : Load the data inputted by the user and perform different actions
               depending on the submit button pressed. 

  Due Date   : 10/31/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->

<html>
  <head>
    <title>Controller4</title>
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
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The table ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        PantherID VARCHAR(20) NOT NULL,
                        PRIMARY KEY(PantherID),
                        LastName VARCHAR(30),
                        FirstName VARCHAR(30),                    
                        Email VARCHAR(30),
                        Telephone VARCHAR(30),
                        Age VARCHAR(8),
                        Major VARCHAR(30),
                        American VARCHAR(8),
                        Cuban VARCHAR(5),
                        Colombian VARCHAR(9),
                        Dark VARCHAR(4),          
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
      $PantherID    = $_POST['PantherID'];
      $LastName     = $_POST['LastName'];
      $FirstName    = $_POST['FirstName'];
      $Email        = $_POST['Email'];
      $Telephone    = $_POST['Telephone']; 
      $Age          = $_POST['Age'];
      $Major        = $_POST['Major'];
      $American     = $_POST['American'];
      $Cuban        = $_POST['Cuban'];
      $Colombian    = $_POST['Colombian'];
      $Dark         = $_POST['Dark'];
      $Comments     = $_POST['Comments'];  

      $found        = $_POST['found'];  
          
      if ( $_POST['Find'] )
      { 
         include('find.php');
         include( "program4.php" );
      }
      else if ( $_POST['Save'] )
      { 
         include('save.php');
         include( "program4.php" );
      }
      else if ( $_POST['Modify'] )
      {  
         include('modify.php');
         include( "program4.php" );
      }
      else if ( $_POST['Delete'] )
      { 
         include('delete.php');
         include( "program4.php" );
      }
      else if ( $_POST['Clear'] )
      {
         include('clear.php');
         include( "program4.php" );
      }
      else if ( $_POST['Help'] )
      {
         include('Help.php');
         include( "program4.php" );
      }
      else if ( $_POST['About'] )
      {
         include('About.php');
      }
      else if ( $_POST['Email_Me'] )
      {
         include('Email_Me.php');
      }
      else
      { 
         echo "<br><h1> you pressed UNKOWN button</h1>";   
      }

      mysqli_close($connection);   

    ?> 
                 
  </body>

</html>
