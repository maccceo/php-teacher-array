<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Array</title>
    <style>
    	/*p {font-size: 30px;margin-top: 40px;}*/
    </style>
  </head>
  <body>
  	<div id="main-container">
		<p>
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
	  		?>
  		</p>
  	</div>
  </body>
</html>