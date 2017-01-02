    <?php
	error_reporting(-1);
	
      $geojson_id= intval($_GET['geojson_id']);
		//echo $geojson;
         //  echo exec("python C:\\Users\\bishrant\\PycharmProjects\\firesimulation\\run_simulation.py");
$homepage = file_get_contents(".\data\\wgs_$geojson_id.geojson");
echo $homepage
#echo json_encode([[1,'wgs_0.geojson'],[1,'wgs_1.geojson'],[1,'wgs_2.geojson'],[1,'wgs_3.geojson']])
//echo $json_str= json_encode($homepage,true);
			?>