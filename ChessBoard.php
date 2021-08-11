<html> 

<head> 
  <!-- Important HTML Information --> 
  <title>PHP Chess Board Base</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Christine Coomans">
  <meta name="description" content="PHP Chess Board">

  <!-- HTML styling to make Chess Board more attractive --> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
    body {
    text-align: center;
    background: linear-gradient(90deg, rgba(66,184,131,1) 0%, rgba(156,143,200,1) 54%, rgba(0,100,255,1) 100%);
    font-family: 'Bangers', cursive;
    }
    table {
      margin-left: 39em;
      border-style: outset;
    }
    h1 {
          margin-top: 4em;
          margin-bottom: 0.5em;
          color: white;
          font-size: 42px;
          padding-bottom: 0.1em;
          letter-spacing: 3px;  
          text-shadow: 3px 3px 5px purple;
    }
  </style>
</head>

  <body> 
    <!-- Set the title of the Chess Table --> 
    <h1> Chess Master 10000</h1>
    
    <!-- Create a pure HTML table --> 
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
      <!-- Set the title of the table --> 
  
      <!-- Initialise the PHP script -->
      <?php

          /* Initialise table row */
          for($row=1;$row<=8;$row++)
        {
              /* Initialize table column*/
              echo "<tr>";
              for($col=1;$col<=8;$col++)
          {
              /* Initialise Chess Board */
              $total=$row+$col;
              if($total%2==0)
          {
              /* Print white blocks for chess board */
              echo "<td height=30px width=30px bgcolor=white></td>";
              }
          else
          {
              /* Print black blocks for chess board */
              echo "<td height=30px width=30px bgcolor=black></td>";
              }
              }
              echo "</tr>";
      }
      /* End PHP Script */
      ?>
    </table>

  </body>
  </html>