<html> 

<head> 
  <!-- Important HTML Information --> 
  <title>Multi-Dimensional Array Stock Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Christine Coomans">
  <meta name="description" content="Multi-Dimensional Array Stock Table">

  <!-- HTML styling to make Stock Table more attractive --> 
  <style>
    body {
    text-align: center;
    background: #45b268;
    font-family: Helvetica, sans-serif;
    }
    h2{
        font-size: 30px;
        margin-top: 4em;
        color: white;
    }
  </style>  
</head>

<body> 
    <!-- Initialise the PHP script -->
    <?php
        /* Creation of Multidimensional Array*/
        $games = array
        (
                /* In the form [0]=Brand Name, [1]=Stock Avaliable, [2]=Stock Sold */
                array("The Sims 4", 15, 28),
                array("The Sims 4: University", 14, 16),
                array("The Sims 4: Get Together", 15, 2),
                array("The Sims 4: Get To Work", 7, 18),
                array("The Sims 4: Jungle Adventure", 10, 8),
                array("The Sims 4: Eco Living", 12, 22),
                array("The Sims 4: City Living", 19, 13),
                array("The Sims 4: Parenthood", 15, 52),
                array("The Sims 4: Journey To Batuu", 41, 12),
                array("The Sims 4: Fitness Stuff", 32, 11),
        );		

        /* Set the title of the Stock Table */
        echo "<h2>The Sims Games Stock Table</h2>";

        /* Creates the table */
        echo "<table border =\"1\" style='border-collapse: collapse; margin-left: 30em'>";

        /* Creates the table headings*/
        echo '<tr bgcolor= #6fda91 align=center><th style="padding: 10px">Brand name</th><th style="padding: 10px">Number of Stock in Store</th><th style="padding: 10px">Quantity Sold</th></tr>';

        /* Initial counter values for table array */
        $i = 0;
        $c = count($games);
        /* While Loop for when the values are less than the value amount */
        while($i < $c)
        {
        /* Prints the array values into the multidimensional array */
        echo "<tr bgcolor=white align=center height=30px width=30px><td style='padding: 10px'>".$games[$i][0]."</td><td>".$games[$i][1]."</td><td>".$games[$i][2]."</td></tr>";
        $i++;
        }

        /* Prints the table after loop execution */
        echo "</table>";

    /* Ends PHP Script */
    ?>

  </body>
  </html>