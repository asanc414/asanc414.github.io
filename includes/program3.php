<!-- ***********************************************************************************
  Page Name  : program3.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #3 : Assignment #3
  Purpose    : Display a form to the user to submit data to a controller. 

  Due Date   : 09/26/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->
<html>
  <head>
    <title> Sanchez Anamarys Program3 </title>
  </head>

  <body align="center" bgcolor=lightblue> <!-- Center alignment and background color -->
    <table> <tr> &nbsp; </tr> </table> <!-- empty row-->

    <!-- Company's name-->
    <font color=darkorange size=7 face="Broadway">FIU's Coffee Company</font></a><br>
    <table> <tr> &nbsp; </tr> </table>

    <?php include( 'mainMenu.php' ); ?><!-- Main Menu-->

    <!-- Beginning of the form that will be used by controller3.php-->
    <form action="controller3.php" method="post">
      <table align="center" width="75%" bgcolor="lightyellow">
        <tr><td>&nbsp; </td></tr>
        <tr>
          <td width="10%"> &nbsp; Panther ID</td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" value="<?php echo $PantherID ?>" name="PantherID"></td>
          <td width="10%"> &nbsp; Age</td>
          <td width="45">
            <select name="Age" size="1"><!--Dropdown Box-->
              <option value="Under 18" <?php if ($Age == "Under 18") echo selected ?> > Under 18 </option>
              <option value="18-24" <?php if ($Age == "18-24") echo selected ?> > 18-24 </option>
              <option value="24-30" <?php if ($Age == "24-30") echo selected ?> > 24-30 </option>
              <option value="30-40" <?php if ($Age == "30-40") echo selected ?>> 30-40 </option>
              <option value="Over 40" <?php if ($Age == "Over 40") echo selected ?>> Over 40 </option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="10%"> &nbsp; Last Name</td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" value="<?php echo $LastName ?>" name="LastName"></td>
        </tr>
        <tr>
          <td width="10%"> &nbsp; First Name</td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" value="<?php echo $FirstName ?>" name="FirstName"></td>
          <td> &nbsp; Major</td>
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
          <td width="10%"> &nbsp; Email</td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" value="<?php echo $Email ?>" name="Email"></td>
        </tr>
        <tr>
          <td width="10%"> &nbsp; Telephone</td>
          <!--text input-->
          <td width="35%"><input type="text" size="50" maxlength="256" value="<?php echo $Telephone ?>" name="Telephone"></td>
          <td> &nbsp; Coffee</td>
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
          <td valign="top"> &nbsp; Comments</td>
          <td><!--text input area-->
            <textarea name="Comments" rows="5" cols="42"><?php echo $Comments;?></textarea>
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
              <input type="submit" value="Find"   name="Find">          
              <input type="submit" value="Save"   name="Save">
              <input type="submit" value="Modify" name="Modify">
              <input type="submit" value="Delete" name="Delete">
              <input type="submit" value="Clear"  name="Clear">
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
