<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print test</title>

	<style>
		html,body{
			margin:0;
			padding:0;
		}

		#php, #javascript{
			width:50%;
			float:left;
		}
	</style>
</head>
<body>
	<h2>Question Two</h2>
	<p>Write a program that prints the numbers from 1 to 100. But for multiples of three print "Sub" instead of the number and for the multiples of five print "urb". For numbers which are multiples of both three and five print "Suburb".</p>

	<h2>Solution</h2>
	<p>A PHP and javascript implemention that runs a loop from 1 to 100 checking the modulus of the integer passed to determine if it is divisible by 3, 5, both or neither and echoing the response</p>


	<div id="php">
		<?php
			function getPart($i){
				$mod3 = ($i%3 == 0);
				$mod5 = ($i%5 == 0);

				if($mod3){
					echo "Sub";
				}
				if($mod5){
					echo "urb";
				}
				if(!$mod3 && !$mod5){
					echo $i;
				}

				echo "<br>";
			}

			for ($i=1; $i <= 100; $i++) {
				getPart($i);
			}
		?>
	</div>

	<div id="javascript"></div>

	<script>

		var getPart, num, runScript;

		getPart = function(i) {
		  var mod3, mod5, _results;
		  _results = [];

		  mod3 = (i%3 == 0);
		  mod5 = (i%5 == 0);

		  if(mod3){
		  	_results.push("Sub");
		  }
		  if(mod5){
		  	_results.push("urb");
		  }
		  if(!mod3 && !mod5){
		  	_results.push(i);
		  }

		  return _results.join('');
		};

		results = (function() {
		  var _i, _results;
		  _results = [];
		  for (num = _i = 1; _i <= 100; num = ++_i) {
		    _results.push(getPart(num));
		  }
		  return _results.join('<br>');
		})();

		document.getElementById('javascript').innerHTML = results;
	</script>
</body>
</html>