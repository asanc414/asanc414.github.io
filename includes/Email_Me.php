<!-- ***********************************************************************************
  Page Name  : Email_Me.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #4 : Assignment #4
  Purpose    : Contact Us page 

  Due Date   : 10/31/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* --> 
<html>
  <head>
    <title>Contact Us</title>
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

    <?php include('../includes/mainMenu.php')?>

    <table align="center" cellpadding="0" cellspacing="0" width="45%" bgcolor="lightyellow" >
      <tr>
        <td width="75%" height="57"  colspan="2"  bgcolor="lightyellow" >
          <p align="center">
            <br>
	    <b><font size="3" color="navy">Anamarys Sanchez Morales (CEO)<br>
	    Florida International University's Coffee Company<br>
	    11200 S. W. 8th Street GC 201<br>
	    Telephone 305-543-2123<br>
	    Miami, Florida, USA 33199</a><br>
	    <a href="mailto:michael.robinson@cs.fiu.edu">michael.robinson@cs.fiu.edu</a><br>
          </p>

          <center>
            <form method="POST" action="mailer.php">

              <p><strong>What is the main purpose of your email?</strong></p>
              <input type="radio" name="MessageType" value="Complaint">Complaint &nbsp; 
              <input type="radio" name="MessageType" value="Problem">Problem &nbsp;
              <input type="radio" name="MessageType" value="Suggestion">Suggestion
              <br> 

              <p><strong>What is your comment about?</strong></p>
              <select name="drop_down" size="1">
                <option selected>Web Site</option>
                <option>Coffee</option>
                <option>General Information</option>
              </select>
              Other: <input type="text" size="26" maxlength="256" name="SubjectOther">

              <p><strong>Enter your comments below:</strong></p>
              <textarea name="Comments" rows="5" cols="42"></textarea><br><br>

              <strong>Tell us how to get in touch with you:</strong><br><br>
              <table>
                <tr><td width="45">&nbsp;Name     </td> <td><input type="text" size="35" maxlength="256" name="UserName"> </td></tr>
                <tr><td width="45">&nbsp;E-mail   </td> <td><input type="text" size="35" maxlength="256" name="UserEmail"></td></tr>
                <tr><td width="45">&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="256" name="UserTel">  </td></tr></font>
              </table>
              <br>

              <input type="checkbox" name="check" value="Contact Requested">Please contact me as soon as possible regarding this matter
              <br><br> </font>

              <input type="submit" value="Submit" name="submit"> 
              <input type="reset"  value="Clear Form">
              <br>
            </form>
          </center>  
        </td>
      </tr>
    </table>

   <?php include('../includes/mainMenu.php')?>

  </body>
</html>


