<?php

class ZhiboController extends Controller
{
	public $layout='//layouts/zhibo';
	
	public $defaultAction = 'zhibo';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionZhibo(){
		if( !isset($_GET['id']))
		{
			$id = 2;
		}else{
			$id = $_GET['id'];
		}
		
		// 找到对应的zhubo
		$zhubo = Zhubo::model()->findByPk($id);
			
		// 提供换一换列表
		$criteria=new CDbCriteria;
		$criteria->limit = 3;
		
		$dataProvider=new CActiveDataProvider('Zhubo',
				array('criteria'=> $criteria,
						'pagination'=>FALSE));
		
		$this->render('index',array('zhubo'=>$zhubo,
				'dataProvider'=>$dataProvider));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}