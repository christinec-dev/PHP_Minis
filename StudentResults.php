<html> 

<head> 
  <!-- Important HTML Information --> 
  <title>Student Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Christine Coomans">
  <meta name="description" content="Student Results">

  <!-- HTML styling to make Student Results more attractive --> 
  <style>
    body {
    text-align: center;
    background: #ffc3c4;
    font-family: Helvetica, sans-serif;
    }
    h1 {
        margin-top: 6em;
        margin-bottom: 0.5em;
        color: #191919;
        font-size: 42px;
        padding-bottom: 0.1em; 
    }
  </style> 

</head>

  <body> 
    <!-- Set the title for the Results Page --> 
    <h1> Student Results</h1>
    
    <!-- Initialise the PHP script -->
    <?php

        /* Creation of Multidimensional Student Array*/
        $grade = array
        (
            /* In the form [0]=Student Name & Surname, [1]=Result */
            array("Sauer Jeppe ", 75),
            array("Von Weilligh ", 44),
            array("Troy Commisioner ", 60),
            array("Paul Krugger ", 62),
            array("Jacob Maree ", 70),
        );
    
        /* Counts the Number of Students*/
        $c = count($grade);

        /* Loops Through Student Results using Conditionals*/
        for ($i = 0; $i < $c; $i++) {
            if ($grade[$i][1] >= 70) {
                $result = 'Scored a Distinction';
            }
            elseif ($grade[$i][1] >= 50) {
            $result = 'Scored a Pass';
            }
            else{
            $result = 'Scored a Fail';
            }

            /* Displays Result Status*/
            echo '<pre>'.$grade[$i][0].$result.'</pre>';
        }

    /* Ends PHP Script*/
    ?>

  </body>
  </html>