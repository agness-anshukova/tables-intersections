<?php
	include 'arrayClass.php';

	$oneDArray = new RandomOneDarray(3, 0, 10);
	$b = $oneDArray->getArray();

	$matrix = new RandomMatrix(3,3,0,40);
	$m = $matrix->getArray();
	$matrix->makeArrayIntersect($b);
	$intersect = $matrix->getArrayIntersect();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Tables</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container">
 		<h2>Intersections of arrays of random numbers</h2>
		<div class="row">
 			<div class="col-lg-4 col-sm-6 col-12">
 				<h5>One-dimensional array</h5>
				<table class="table table-striped">
				  <thead>
				    <tr>
				    	<?php 
				    		$len = count($b);
					    	for ($i=0; $i < $len; $i++) { 
					    		echo '<th scope="col">'.($i+1).'</th>';
					    	}
				    	?>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				    	<?php 
					    	for ($i=0; $i < $len; $i++) { 
					    		echo '<td>'.$b[$i].'</td>';
					    	}
				    	?>
				    </tr>
				 </tbody>
				</table>
			</div>

			<div class="col-lg-4 col-sm-6 col-12">
				<h5>Two-dimensional array</h5>
					<table class="table table-striped">
					  <thead>
					    <tr>
					    	<?php 
					    		$rows = $matrix->getRowTotalNum();
						    	for ($i=0; $i < $rows; $i++) { 
						    		echo '<th scope="col">'.($i+1).'</th>';
						    	}
					    	?>
					    </tr>
					 	</thead>
						<tbody>
						    	<?php 
						    		$cols = $matrix->getColTotalNum();
							    	for ($i=0; $i < $rows;  $i++) { 
							    		echo '<tr>';
							    		for ($j=0; $j < $cols; $j++) { 
							    			echo '<td>'.$m[$i][$j].'</td>';
							    		}
							    		echo '</tr>';
							    	}
						    	?>
						</tbody>
					</table>
			</div>
			<div class="col-lg-4 col-sm-6 col-12">
				<h5>Intersection</h5>
				<table class="table table-dark">
				  <thead>
				    <tr>
				    	<?php 
				    		$rows = $matrix->getRowTotalNum();
					    	for ($i=0; $i < $rows; $i++) { 
					    		echo '<th scope="col">'.($i+1).'</th>';
					    	}
				    	?>
				    </tr>
				 	</thead>
					<tbody>
					    	<?php 
					    		$cols = $matrix->getColTotalNum();
						    	for ($i=0; $i < $rows;  $i++) { 
						    		echo '<tr>';
						    		for ($j=0; $j < $cols; $j++) { 
						    			if ($intersect[$i][$j] !== null)
						    				echo '<td>'.$intersect[$i][$j].'</td>';
						    			else
						    				echo '<td class="text-danger"> No </td>';
						    		}
						    		echo '</tr>';
						    	}
					    	?>
					</tbody>
				</table>
			</div>

		</div>
	</div>

 </body> 
</html>