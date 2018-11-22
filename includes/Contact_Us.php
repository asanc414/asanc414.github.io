<!-- ***********************************************************************************
  Page Name  : Contact_Us.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #5 : Assignment #5
  Purpose    : Create and add data to the contacts table. 

  Due Date   : 11/19/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* --> 
<html>
  <head>
    <title>Contact Us</title>
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

  <body align="center" bgcolor="lightblue" onload="currentTime()">
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

    <?php include('../includes/mainMenu.php')?>

    <table align="center" cellpadding="0" cellspacing="0" width="45%" bgcolor="lightyellow" >
      <tr>
        <td>
          <p align="center">
            <br>
	    <b><font size="6" color="navy">Contact_Us<br>
          </p>
          <center>
            <form method="POST" action="contact_controller.php">
              <table width=50%>
                <tr><td width="50%">&nbsp;Telephone</td> <td><input type="text" size="30" maxlength="256" placeholder="Telephone" name="UserTel"></td></tr>
                <tr><td width="50%">&nbsp;First Name</td> <td><input type="text" size="30" maxlength="256" placeholder="First Name" name="UserName"></td></tr>
                <tr><td width="50%">&nbsp;Last Name</td> <td><input type="text" size="30" maxlength="256" placeholder="Last Name" name="LastName"></td></tr>
                <tr><td width="50%">&nbsp;E-mail</td> <td><input type="text" size="30" maxlength="256" placeholder="E-mail" name="UserEmail"></td></tr>
                <tr><td>&nbsp; </td></tr><!-- empty row-->
                <tr><td width="50%" valign=top>&nbsp;Comments</td> <td><textarea name="Comments" placeholder="Comments" rows="5" cols="29"></textarea><br></font>
                <tr><td>&nbsp; </td></tr><!-- empty row-->
              </table>
              <table align="center" width="75%" bgcolor="lightyellow">
                <tr>
                  <td align="center"><?php echo $message3 ?></td>
                </tr>
              </table>
              <input type="submit" value="Submit" name="submit"> 
              <input type="reset"  value="Clear Form">
              <br>
            </form>
          </center>  
        </td>
      </tr>
    </table>
  </body>
</html>


