<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
 <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"> 
			  </script>

</head>
<body>
<table class="sajt" border= "|0" width="60%">
	
	<?php

	for ( $i=1 ; $i <= 10; $i++){
		
		if($i==1){

			echo '<tr class="upis">';

			for($e = 0; $e <= 10; $e++){

				echo ($e == 0) ?  '<th></th>' : '<th>'.$e.'</th>';
			}
			
			echo '</tr>';
		}	


	echo '<tr>';
	
	//jedanput td s	ID atributom,a 10 puta prazan TD.
	for($o = 1; $o <= 10; $o++){
	
		if($o==1)
			echo '<td id="novi">'. $i.'</td>';
		
			echo '<td data-factor1 = "'.$i.'"  data-factor2 = "'.$o.'" style="text-align:center;vertical-align:middle" ></td>';
		
	}

	echo '</tr>';
}


	
	?>
</table>
</body>

<form action ="" method ="POST">

<script>
	$(document).ready(function(){
			$("td").click(function(){

				var celija = $(this);

				console.log(this);
				console.log('factor jedan je ');
				console.log($(this).attr('data-factor1'));
				console.log('factor dva je ');
				console.log($(this).attr('data-factor2'));

				var data = {};

				data.factor1 = $(this).attr('data-factor1');
				data.factor2 = $(this).attr('data-factor2');
				data.result = data.factor1 * data.factor2;
				data.operation = 'multiplication';
				data.save = true;


				console.log('data izgleda ovako ');
				console.log(data);
     // Forma za pisanje Ajax requesta(on sluzi da asinhrono posalje podatke na backend)
				$.ajax({
  					type: "POST",
  					url: "Inc/insert.php",
  					data: data,
  					success: function(result){
  						console.log('result');
     					console.log(result);
     					console.log('celija u ajaxu');
     					console.log(celija);
     					$(celija).html(result);
  				}
				});
			});
	});
	
</script>
</html>


