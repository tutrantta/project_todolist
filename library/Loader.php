<?php 

require_once '/../config/define.php';

class Loader 
{
	function loadModel($model)
	{
		$model_dir = MODELS_DIR . $model . '.php';
		if(file_exists($model_dir)) {
			require_once ($model_dir);
			$objTempModel = new $model;
			return $objTempModel;
		}
		else {
			return null;
		}
	}
}