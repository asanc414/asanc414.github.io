<!-- ***********************************************************************************
  Page Name  : program4.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #4 : Assignment #4
  Purpose    : Display a form to the user to submit data and interact with a database 
               through a controller. Offer help, aditional information and a way of contact.

  Due Date   : 10/31/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
********************************************************************************** -->
<html>
  <head>
    <title> Sanchez Anamarys Program4 </title>
    
    <script>
      function currentTime() 
      {
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();
      
         minutes = checkTime(minutes);
         sec     = checkTime(sec);
         
         document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;
      
         var t = setTimeout(function(){currentTime()},500);           
      }

      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }

      function loggedInTime( temp )
      {
         var tiempo = new Date();  
         var temp2 =  "logged in at &nbsp; &nbsp;: " + tiempo;
         temp1 = temp2;
         document.write( temp2 );
      }
    </script>

  </head>
  <style>
    .tooltip 
    {
      position: relative;
      display: inline-block;

    }

    .tooltip .tooltiptext 
    {
      visibility: hidden;
      width: 150px;
      background-color: orange;
      color: navy;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 1s;
    }


    .tooltip .tooltiptext .tooltip-left 
    {
      top: -5px;
      bottom:auto;
      right: 128%;  
    }



    .tooltip .tooltiptext::after 
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: lightblue transparent transparent transparent; /*arrow*/
    }

    .tooltip:hover .tooltiptext 
    {
      visibility: visible;
      opacity: 1;
    }

  </style>
  
  <body align="center" bgcolor=lightblue onload="currentTime()"> <!-- Center alignment and background color -->
    <table> <tr> &nbsp; </tr> </table> <!-- empty row-->
    <table align="center" width="75%">
        <tr>
          <td><script>loggedInTime();</script></td>
          <td align="right"><div id="txt"></div></td>
        </tr>
    </table>    
    <table> <tr> &nbsp; </tr> </table> <!-- empty row-->

    <!-- Company's name-->
    <font color=darkorange size=7 face="Broadway">FIU's Coffee Company</font></a><br>
    <table> <tr> &nbsp; </tr> </table>

    <?php include( 'mainMenu.php' ); ?><!-- Main Menu-->

    <!-- Beginning of the form that will be used by controller3.php-->
    <form action="controller4.php" method="post">
      <table align="center" width="75%" bgcolor="lightyellow">
        <tr><td>&nbsp; </td></tr>
        <tr>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Panther ID  
              <span class="tooltiptext"><font color="yellow">REQUIRED</font></span>
            </div>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" placeholder="Panther ID" value="<?php echo $PantherID ?>" name="PantherID"></td>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Age
              <span class="tooltiptext tooltip-left">Select One</span>
            </div>
          </td>
          <td width="45">
            <select name="Age" size="1"><!--Dropdown Box-->
              <option value="" disabled selected>Select your option</option>
              <option value="Under 18" <?php if ($Age == "Under 18") echo selected ?> > Under 18 </option>
              <option value="18-24" <?php if ($Age == "18-24") echo selected ?> > 18-24 </option>
              <option value="24-30" <?php if ($Age == "24-30") echo selected ?> > 24-30 </option>
              <option value="30-40" <?php if ($Age == "30-40") echo selected ?>> 30-40 </option>
              <option value="Over 40" <?php if ($Age == "Over 40") echo selected ?>> Over 40 </option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Last Name
              <span class="tooltiptext tooltip-left">Enter Last Name</span>
            </div>
          </td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" placeholder="Last Name" value="<?php echo $LastName ?>" name="LastName"></td>
        </tr>
        <tr>
          <td width="10%"> 
            <div class="tooltip">&nbsp; First Name
              <span class="tooltiptext tooltip-left">Enter First Name</span>
            </div>
          </td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" placeholder="First Name" value="<?php echo $FirstName ?>" name="FirstName"></td>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Major
              <span class="tooltiptext tooltip-left">Select your major</span>
            </div>
          </td>
          <td>
            <table width="100%" bgcolor="lightyellow" border=0 bordercolor=blue>
              <tr><!--radio buttons-->
                <td width="25%"><input type="radio" <?php if ($Major == "IT")   echo "checked"; ?> name="Major" value="IT">IT</td>
                <td width="25%"><input type="radio" <?php if ($Major == "CS")   echo "checked"; ?> name="Major" value="CS">CS</td>
                <td width="25%"><input type="radio" <?php if ($Major == "Robotics")   echo "checked"; ?> name="Major" value="Robotics">Robotics</td>
                <td width="25%"><input type="radio" <?php if ($Major == "Business")   echo "checked"; ?> name="Major" value="Business">Business</td>
              </tr>
            </table>
          </td>
        <tr>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Email
              <span class="tooltiptext tooltip-left">Enter your email</span>
            </div>
          </td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" placeholder="Email" value="<?php echo $Email ?>" name="Email"></td>
        </tr>
        <tr>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Telephone
              <span class="tooltiptext tooltip-left">Enter your telephone number</span>
            </div>
          </td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" placeholder="Telephone" value="<?php echo $Telephone ?>" name="Telephone"></td>
          <td width="10%"> 
            <div class="tooltip">&nbsp; Coffee
              <span class="tooltiptext tooltip-left">Select the kind(s) of coffee of your preference</span>
            </div>
          </td>
          <td>
            <table width="100%" bgcolor="lightyellow" border=0 bordercolor=blue>
              <tr><!--chech boxes-->
                <td width="25%"><input type="checkbox" <?php if ($American == "American")   echo "checked"; ?> name="American" value="American">American</td>
                <td width="25%"><input type="checkbox" <?php if ($Cuban == "Cuban")   echo "checked"; ?> name="Cuban" value="Cuban">Cuban</td>
                <td width="25%"><input type="checkbox" <?php if ($Colombian == "Colombian")   echo "checked"; ?> name="Colombian" value="Colombian">Colombian</td>
                <td width="25%"><input type="checkbox" <?php if ($Dark == "Dark")   echo "checked"; ?> name="Dark" value="Dark">Dark</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td>&nbsp; </td></tr>
        <tr>
          <td></td><!--empty cell-->
          <td></td><!--empty cell-->
          <td valign="top"> 
            <div class="tooltip">&nbsp; Comments
              <span class="tooltiptext tooltip-left">Any comments?</span>
            </div>
          </td>
          <td><!--text input area-->
            <textarea name="Comments" rows="5" cols="42" placeholder="Comments"><?php echo $Comments;?></textarea>
          </td> 
        </tr>
        <tr><td>&nbsp; </td></tr>
      </table>
      <table align="center" width="75%" bgcolor="lightyellow">
        <tr>
          <td align="center"><?php echo $message ?></td>
        </tr>
        <tr><td>&nbsp; </td></tr>
      </table>

<!----------------------submit and clear buttons------------------------------------------------------>
      <table align="center" width="75%" bgcolor="lightyellow">
        <tr>
          <td align="center">
            <p style="font-family:new time Roman; color:Blue; font-size:18px;">         
              <input type="submit" value="Find"     name="Find">          
              <input type="submit" value="Save"     name="Save">
              <input type="submit" value="Modify"   name="Modify">
              <input type="submit" value="Delete"   name="Delete">
              <input type="submit" value="Clear"    name="Clear">
              <input type="submit" value="Help"     name="Help">
              <input type="submit" value="About"    name="About">
              <input type="submit" value="Email_Me" name="Email_Me">
              <input type="hidden" name="found"  value="<?php echo $found ?>" > <!--hidden debuging variable-->
            </p>
          </td>
        </tr>
        <tr><td>&nbsp; </td></tr>
      </table>
    </form>

    <?php include( 'mainMenu.php' ); ?><!--Main Menu-->

  </body>
</html>
