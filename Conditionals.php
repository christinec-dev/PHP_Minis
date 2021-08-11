<html> 

<head> 
  <!-- Important HTML Information --> 
  <title>Conditionals</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Christine Coomans">
  <meta name="description" content="Conditionals">

  <!-- HTML styling to make Conditionals more attractive --> 
  <style>
    body {
    text-align: center;
    background: linear-gradient(90deg, rgba(66,184,131,1) 0%, rgba(156,143,200,1) 54%, rgba(0,100,255,1) 100%);
    font-family: 'Helvetica', sans-serif;    
    font-size: 20px;
    }
    h1 {
          margin-top: 4em;
          margin-bottom: 0.5em;
          color: white;
          font-size: 25px;
    }
  </style>
</head>

  <body> 

<!--  ********************************************************************************************************************** -->

    <!-- Set the title of the Conditional --> 
    <h1> If Conditional Statement</h1>

    <!-- Initialise the PHP script -->
    <?php
            /* Variable Declaration */
            $a = 45;
            $b = 25;

            /* If Statement Evaluation & Execution */
            if ($a > $b) {
                echo "$a is greater than $b";
        }

    /* Output: 45 is greater than 25 */
    /* End PHP Script */
    ?>

<!--  ********************************************************************************************************************** -->

    <!-- Set the title of the Conditional --> 
    <h1> ElseIf Conditional Statement</h1>

    <!-- Initialise the PHP script -->
    <?php

        /* Variable Declaration */
         $a = 5;
         $b = 25;
         
         /* Else If Statement Evaluation & Execution */
         if ($a > $b){
         echo "$a is greater than $b";
         }
         else{
         echo "$b is greater than $a";
         }
        
    /* Output: 25 is greater than 5 */
    /* End PHP Script */
    ?>

<!--  ********************************************************************************************************************** -->

    <!-- Set the title of the Conditional --> 
    <h1> Switch Statement</h1>

    <!-- Initialise the PHP script -->
    <?php

        /* Variable Declaration */
        $today = "Monday";

        /*Switch Statement Evaluation & Execution */
        switch($today){
            case "Sunday":
                echo "Sleep in all day long";
                break;
        case "Monday":
                echo "Wake up early today";
                break;
        case "Tuesday":
                echo "The garden needsd watering today";
                break;
        default:
                echo "It's a day, as good as any";
                break;
        }
       
    /* Output: Wake up early today */
    /* End PHP Script */
    ?>

  </body>
  </html>