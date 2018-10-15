	<div>
		<div class="row">
				<div class="col-md-12">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img src="img/4.jpg" alt="">
							</div>
							<div class="carousel-item">
								<img src="img/2.jpg" alt="">
							</div>
							<div class="carousel-item">
								<img src="img/3.jpg" alt="">
							</div>
						</div>
						
					</div>
				</div>
		</div>
	</div>
	
<?php
		$sql = "SELECT * FROM cliente c				
				INNER JOIN aula a ON c.aula_id_aula = a.id_aula";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		if($qtd > 0){
			while($row = $result->fetch_assoc()){
				print "<p>".$row["professor_aula"]." <b>".$row[""]."</b>. ".$row[""]."ª Ed. ".$row[""].": ".$row[""].", ".$row[""].".</p>";
			}
		}else{
			print "Não há registros";
		}
	?>