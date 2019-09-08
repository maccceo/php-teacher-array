<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Array</title>
    <style>
    	body {font-size: 30px;    font-family: arial, sans-serif;}
        .rect {
            display: inline-block;
            padding: 15px 20px;
            border: 1px solid black;
            margin: 10px;
        }
        .teacher {background-color: darkgrey;}
        .pm {background-color: lightgreen;}

    </style>
  </head>
  <body>
  	<div id="main-container">
		<?php 
            $db = [
                'teachers' => [
                    [
                        'name' => 'Michele',
                        'lastname' => 'Papagni'
                    ],
                    [
                        'name' => 'Fabio',
                        'lastname' => 'Forghieri'
                    ]
                ],
                'pm' => [
                    [
                        'name' => 'Roberto',
                        'lastname' => 'Marazzini'
                    ],
                    [
                        'name' => 'Federico',
                        'lastname' => 'Pellegrini'
                    ]
                ]
            ];


            // stampo insegnanti
            foreach ($db['teachers'] as $teacher) {
                $name = $teacher['name'];
                $lastname = $teacher['lastname'];
                echo '<p class="rect teacher">' . $name . ' ' . $lastname . '</p>';
            }

            echo "<br>";

            // stampo pm
            foreach ($db['pm'] as $pm) {
                $name = $pm['name'];
                $lastname = $pm['lastname'];
                echo '<p class="rect pm">' . $name . ' ' . $lastname . '</p>';
            }
  		?>
  	</div>
  </body>
</html>