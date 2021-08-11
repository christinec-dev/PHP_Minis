<html> 

<head> 
  <!-- Important HTML Information --> 
  <title>Counting Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Christine Coomans">
  <meta name="description" content="Counting Table">

  <!-- HTML styling to make Counting Table more attractive --> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
    body {
    text-align: center;
    background: #fcfc6d;
    font-family: Helvetica, sans-serif;
    }
    table {
    margin-left: 36.5em;
    background: black;
    }
    h1 {
        margin-top: 4em;
        margin-bottom: 0.5em;
        color: #191919;
        font-size: 42px;
        padding-bottom: 0.1em; 
    }
  </style>  
</head>

  <body> 
    <!-- Set the title for the Counting Table --> 
    <h1> Counting Table </h1>
    
    <!-- Create a pure HTML table --> 
    <table width="350px" cellspacing="0px" cellpadding="0px" border="1px">
          
    <!-- Initialise the PHP script -->
    <?php
        /* Initializes For Loop When Equal or Less Than Ten, and Then Increments While Running Excecution for Printing Table Row Values*/
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";

            $counter = $i;
            for ($m = 1; $m <= 10; $m++) {
                echo "<td height=30px width=30px bgcolor=white align=center>" . $counter . "</td>";
                $counter += $i;
            }

            echo "<tr>";
        }
    /* End PHP Script */
    ?>

  </body>
  </html>