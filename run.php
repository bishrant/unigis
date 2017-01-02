    <?php
	error_reporting(-1);
	
      $geojson= json_encode($_POST['geojson']);
      $simulation_time= intval($_POST['simulation_time']);
      $simulation_steps= intval($_POST['simulation_steps']);
		//echo $geojson;
           echo exec("python C:\\Users\\bishrant\\PycharmProjects\\firesimulation\\run_simulation.py $geojson $simulation_time $simulation_steps");
//$homepage = file_get_contents('C:\\Fire_Simulation\\data\\wgs_1.geojson');
#echo $homepage
//echo json_encode([[1,'wgs_0.geojson'],[1,'wgs_1.geojson'],[1,'wgs_2.geojson'],[1,'wgs_3.geojson']])
//echo $json_str= json_encode($homepage,true);
			?>