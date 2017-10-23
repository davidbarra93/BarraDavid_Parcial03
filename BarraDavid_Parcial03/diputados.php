<?php include('header.php')?>

<style>
div.generos {
    background-color: black;
    color: white;
    margin: 20px 0 20px 0;
    padding: 20px;
} 
</style>
<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>


<?php $mujeres = 0; $hombres = 0;?>

     <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
		  <th>Genero</th>
            <th>Nombre</th>
            <th>Partido</th>
                    <th>Lista/Pacto</th>
          </tr>
        </thead>
        <tbody>
          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Genero"])=="Femenino"){?>
          <tr>
            <td>
			<?php if (($csv[$a]["Genero"])=="Femenino"){?>
				   <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/417335-200.png">
				   <?php $mujeres++?> <?php }?>
				   </td>
			<td>
			
				   
                        <?php echo($csv[$a]["Candidato Nombre"])?> 
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
            </td>
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                    <td><?php echo($csv[$a]["Lista/Pacto"])?></td>
          
                    <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                     <?php $frenteamplio++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                     <?php $coalicion++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                     <?php $portodo++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                     <?php $independiente++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
                     <?php $revolucionarios++?>

                    <?php }?>

                       <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                     <?php $convergencia++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                     <?php $union++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                     <?php $sumemos++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                     <?php $lafuerza++?>

                    <?php }?>

                      <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
                     <?php $vamos++?>

                    <?php }?>
		  
		  </tr>
                <?php $mujeres++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>


<div class="generos">
      <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Genero</th>
					<th>Nombre</th>
                    <th>Partido</th>
                    <th>Lista/Pacto</th>
                </tr>
            </thead>
            <tbody>
                <?php for($b = 0; $b < $total = count($csv); $b++){?>
                <?php if(($csv[$b]["Genero"])=="Masculino"){?>
                <tr>
                    
					<td>
			<?php if (($csv[$a]["Genero"])=="Masculino"){?>
				   <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/12017-200.png">
				   <?php $hombres++?> <?php }?>
				   </td>
					<td>
                        <?php echo($csv[$b]["Candidato Nombre"])?> 
                        <?php echo($csv[$b]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$b]["Candidato Apellido Materno"])?>
                    </td>
                    <td><?php echo($csv[$b]["Partido Politico"])?></td>
                    <td><?php echo($csv[$b]["Lista/Pacto"])?></td>
                
				
                    <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                     <?php $frenteamplio++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                     <?php $coalicion++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                     <?php $portodo++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                     <?php $independiente++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
                     <?php $revolucionarios++?>

                    <?php }?>

                       <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                     <?php $convergencia++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                     <?php $union++?>

                    <?php }?>

                    <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                     <?php $sumemos++?>

                    <?php }?>

                     <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                     <?php $lafuerza++?>

                    <?php }?>

                      <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
                     <?php $vamos++?>

                    <?php }?>
				</tr>
                <?php $hombres++;?>
                <?php };?>
                <?php };?>

            </tbody>
        </table>             
</div>







<div class="generos">
<h4>Ellas son <?php print $mujeres;?> v/s ellos que son <?php print $hombres;?></h4>
</div>

<h3>N° Candidatos por Partido</h3>

<div class="alert alert-danger">        
<h4>Los candidatos del Frente Amplio son <?php print $frenteamplio;?></h4>
<h4>Los candidatos del Coalición Regionalista Verde son <?php print $coalicion;?></h4>
<h4>Los candidatos del Por todo Chile son <?php print $portodo;?></h4>
<h4>Los candidatos del Independiente son <?php print $independiente;?></h4>
<h4>Los candidatos del Trabahadores revolucionarios son <?php print $revolucionarios;?></h4>
<h4>Los candidatos del Convergencia Democrática son <?php print $convergencia;?></h4>
<h4>Los candidatos de la Unión Patriótica son <?php print $union;?></h4>
<h4>Los candidatos de Sumemos son <?php print $sumemos;?></h4>
<h4>Los candidatos de La fuerza de la Mayoría son <?php print $lafuerza;?></h4>
<h4>Los candidatos de Chile Vamos son <?php print $vamos;?></h4>

</div>
</div>
</div>
</div>
<?php include('footer.php')?>