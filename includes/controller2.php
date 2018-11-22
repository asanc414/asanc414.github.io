<!-- ***********************************************************************************
  Page Name  : Controller2 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #2  : Assignment #2
  Purpose    : Load the data inputted by the user and check the submit buttons. 

  Due Date   : 09/26/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->

<html>
  <head>
    <title>controller2</title>
  </head>
          
  <body>
      
    <?php
                  
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

      //Display the data inputted by the user
      echo 'This is controller2.php'."<br><br>";      
      echo 'Panther ID: '.$PantherID."<br>";
      echo 'Last Name: '.$LastName."<br>";
      echo 'First Name: '.$FirstName."<br>"; 
      echo 'E-mail: '.$Email."<br>";
      echo 'Telephone: '.$Telephone."<br>"; 
      echo 'Age: '.$Age."<br>";   
      echo 'Major: '.$Major."<br>";  
      echo 'Coffee: '.$American." ";  
      echo $Cuban." ";  
      echo $Colombian." ";  
      echo $Dark."<br>";  
      echo 'Comments: '.$Comments."<br><br>";               
    
      //if statement will show a message identifying what button was pressed
      if ( $_POST['Find'] )
      { 
        echo 'The Find submit button was pressed';
      }
      else if ( $_POST['Save'] )
      {
        echo 'The Save submit button was pressed';
      }
      else if ( $_POST['Modify'] )
      {  
        echo 'The Modify submit button was pressed';
      }
      else if ( $_POST['Delete'] )
      { 
        echo 'The Delete submit button was pressed';
      }
      else
      { 
        echo "<br><h1> you pressed UNKOWN button</h1>";   
      }
      
    ?>
                 
  </body>

</html>
