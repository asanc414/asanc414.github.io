<!-- ***********************************************************************************
  Page Name  : mainMenu 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #2  : Assignment #2
  Purpose    : Displays a dropdown menu that will take the user to each of the pages of 
               program 1, program 2 and home. 

  Due Date   : 09/26/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->
<html>
  <head>
    <title> mainMenu </title>
    <style type="text/css">
        nav ul ul
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: blue; 
            background: linear-gradient(top, lightyellow 20%, #F5B7B1 80%);  
            background: -moz-linear-gradient(top, lightyellow 20%, #F5B7B1 80%); 
            background: -webkit-linear-gradient(top, lightyellow 20%, #F5B7B1 80%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 25px;
            border-radius: 5px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
	}
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	
                
                
        nav ul li:hover a 
        {
                color: darkred; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
                display: block; padding: 10px 25px;
                color: darkblue ; /* main menu name #757575;*/ text-decoration: none;
	}
                
                
        nav ul ul 
        {
                background: #F5B7B1; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white; /*#6b727c; */ /*border top */
		border-bottom: 1px solid #575f6a; /*border down */
		position: relative;
	}    
                
        nav ul ul li a:hover 
        {
                background: lightblue; /* #4b545f; */ /*submenu background color*/
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }
    </style>
  </head>

  <body>

    <nav align="center">
      <ul><b>
        <li><a href="./pgm1.html">Program 1</a>
          <ul><!-- Links to all the pages of program 1 in a dropdown menu -->
            <li><a href="./page1.html">Page 1</a></li>
            <li><a href="./page2.html">Page 2</a></li>
            <li><a href="./page3.html">Page 3</a></li>
            <li><a href="./page4.html">Page 4</a></li>
            <li><a href="../">Home</a></li>
          </ul>
        </li>
        <li><a href="./program2.php">Program 2</a></li><!-- Link to program 2-->
        <li><a href="./program3.php">Program 3</a></li><!-- Link to program 3-->
        <li><a href="./program4.php">Program 4</a></li><!-- Link to program 4-->
        <li><a href="./program5.php">Program 5</a></li><!-- Link to program 5-->
        <li><a href="../">Home</a></li></b><!-- Link to home-->
      </ul>
    </nav>

  </body>

</html>
