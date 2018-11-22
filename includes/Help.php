<!-- ***********************************************************************************
  Page Name  : Help.php 
  Author     : Anamarys Sanchez Morales
  Your URL   : ocelot-aul.fiu/~asanc414
  Course     : CGS 4854 - U01
  Program #5 : Assignment #5
  Purpose    : Display the purpose of each button on the form in the newly opened window.

  Due Date   : 11/19/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{                }..........
 ******************************************************************************* -->
<html>

  <head>
    <title>Help</title>
  </head>

  <body onload="help();currentTime()">
    <script>
    
      function help()
      {
        // Open a new window at a specific location
        var myWindow = window.open("", "Help","width=300, height=600, scrollbars=yes, resizable=yes, left=80, top=80");    	
        // Display the purpose of each button on the form in the newly opened window 
        myWindow.document.write("<head>");
        myWindow.document.write("<title>Help</title>");
        myWindow.document.write("</head>");
        myWindow.document.write("<div>");
        myWindow.document.write("<div><h1 style='color:darkred' align=center>** HELP ** </h1></div>");
        myWindow.document.write("<hr>");
        myWindow.document.write("<div> <h2><span style='color:navy'>Buttons Purpose</span></h2></div>");
        myWindow.document.write("<div>");
        myWindow.document.write("<ul style='list-style-type:disc'>");
        myWindow.document.write("<li>\n <h3 style='color:darkorange'>FIND:</h3>");
        myWindow.document.write("<div>In order to find a record enter the Panther ID and press the FIND button.</div><br></li>");
        myWindow.document.write("<div>If the record is found, the fields on the Data page will be filled with information about the user, and a message will appear, stating <span style='color:blue'>RECORD X FOUND</span>. Otherwise, a message will appear stating <span style='color:red'>RECORD X NOT FOUND.</span></div>");
        myWindow.document.write("<li>\n <h3 style='color:darkorange'>SAVE:</h3>");
        myWindow.document.write("<div>Use the Save button to add information on the database.The information will be stored in the table, and a message will appear stating <span style='color:blue'>RECORD X ADDED</span>. Otherwise, if the information has previously been entered, a message will appear, stating <span style='color:red'>RECORD X ALREADY EXISTS.</span></div><br></li>");
        myWindow.document.write("<li>\n <h3 style='color:darkorange'>MODIFY:</h3>");
        myWindow.document.write("<div>Use the Modify button to edit existing record on the table. To do that the Panther ID must be found first, then the data can be changed.</div><br></li>");
        myWindow.document.write("<div>To modify a user info, follow these steps:</div>");
        myWindow.document.write("<ol class='popup-list' type='1'>");
        myWindow.document.write("<li>Enter the Panther ID of the user that you want to update.</li>");
        myWindow.document.write("<li>Then, press the <b>Find button</b> to search for the record .</li>");
        myWindow.document.write("<li>Next, change the data you want to update</li>");
        myWindow.document.write("<li>Finally, press the <b>Modify button</b> to store the modified information.</li><br>");
        myWindow.document.write("</ol>");
        myWindow.document.write("<div>If the record has not been found yet a message will appear stating <span style='color:red'>RECORD X CANNOT BE MODIFIED, FIND IT FIRST</span>. If the record was successfully modified the message <span style='color:blue'>RECORD X MODIFIED</span> will appear.</div><br>")
        myWindow.document.write("<li><h3 style='color:darkorange'>DELETE:</h3>");
        myWindow.document.write("<div>Use the Delete button to delete existing Panther ID. To do that, the Panther ID must be found first, then the data can be deleted from the database.</div><br>");
        myWindow.document.write("<div>If the record has not been found yet a message will appear stating <span style='color:red'>RECORD CANNOT BE DELETED RECORD HAS TO BE FOUND FIRST</span>. If the record was successfully deleted the message <span style='color:red'>RECORD X DELETED</span> will appear.</div><br></li>")
        myWindow.document.write("<li><h3 style='color:darkorange'>CLEAR:</h3>");
        myWindow.document.write("<div>Use the clear button to clear the data from the fields on the Data page.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:darkorange'>HELP:</h3>");
        myWindow.document.write("<div> Press the Help button to discover the purpose and functionality of all the buttons of the form.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:darkorange'>ABOUT:</h3>");
        myWindow.document.write("<div> Press the About button for more information about the website.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:darkorange'>EMAIL_ME:</h3>");
        myWindow.document.write("<div> Press the Email_Me button to open up a new form to contact us.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:darkorange'>CONTACT_US:</h3>");
        myWindow.document.write("<div> Press the Contact_Us button to open up a form to insert the user's data to the contacts table.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:darkorange'>LEADS:</h3>");
        myWindow.document.write("<div> Press the Leads button to access the contacts table, allowing to move to and display to the following records: FIRST NEXT PREVIOUS LAST.</div><br></li>");
        myWindow.document.write("</ul>");
        myWindow.document.write("</div>");        
      } 
      
    </script>

  </body>
</html>

