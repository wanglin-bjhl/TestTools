<?php

class ZhuboController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $layout='//layouts/homepage';

	public $defaultAction = 'homepage';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','homepage','jingtiaoxixuan','zuijiaxinren'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Zhubo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Zhubo']))
		{
			$model->attributes=$_POST['Zhubo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Zhubo']))
		{
			$model->attributes=$_POST['Zhubo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Zhubo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionHomepage()
	{
		$top_14_criteria=new CDbCriteria;
		$top_14_criteria->limit = 14;
		
		$top_14_dataProvider=new CActiveDataProvider('Zhubo',
				array('criteria'=> $top_14_criteria,
						'pagination'=>FALSE));
		
		$jingtiaoxixuan_criteria=new CDbCriteria;
		$jingtiaoxixuan_criteria->limit = 8;
		
		
		$jingtiaoxixuan_dataProvider=new CActiveDataProvider('Zhubo',
			array('criteria'=> $jingtiaoxixuan_criteria,
					 'pagination'=>FALSE));
		
		$zuijiaxinren_criteria=new CDbCriteria;
		$zuijiaxinren_criteria->limit = 12;
		
		$zuijiaxinren_dataProvider=new CActiveDataProvider('Zhubo',
				array('criteria'=> $zuijiaxinren_criteria,
		 				'pagination'=>FALSE));
		
		$top5_criteria=new CDbCriteria;
		$top5_criteria->limit = 5;
		
		
		$top5_dataProvider=new CActiveDataProvider('Zhubo',
				array('criteria'=> $top5_criteria,
						 'pagination'=>FALSE));
		
		$this->render('homepage',array(
				'top_14_dataProvider'=>$top_14_dataProvider,
				'jingtiaoxixuan_dataProvider'=>$jingtiaoxixuan_dataProvider,
				'zuijiaxinren_dataProvider'=>$zuijiaxinren_dataProvider,
				'top5_dataProvider'=>$top5_dataProvider,
		));
	}
	
	/* ajax */
	public function actionJingtiaoxixuan()
	{
		//if(Yii::app()->request->isAjaxRequest){
		
		if(isset($_GET['tag']))
		{
			$jingtiaoxixuan_criteria=new CDbCriteria;
			$jingtiaoxixuan_criteria->limit = 8;
			if ($_GET['tag'] != '') {
				$jingtiaoxixuan_criteria->addCondition("tags = :tag");
				$jingtiaoxixuan_criteria->params[':tag']=$_GET['tag'];
			}
			
			$jingtiaoxixuan_dataProvider=new CActiveDataProvider('Zhubo',
					array('criteria'=> $jingtiaoxixuan_criteria,
							'pagination'=>FALSE));
		}
	
		$this->renderPartial("_jingtiaoxixuan",
				array('dataProvider'=>$jingtiaoxixuan_dataProvider));
	}
	
	/* ajax */
	public function actionZuijiaxinren()
	{
		if(isset($_GET['time']))
		{
			$zuijiaxinren_criteria=new CDbCriteria;
			$zuijiaxinren_criteria->limit = 12;
		
			if ($_GET['time'] != '') {
				//$jingtiaoxixuan_criteria->addCondition("tags = :tag");
				//$jingtiaoxixuan_criteria->params[':tag']=$_GET['tag'];
			}
				
			$zuijiaxinren_dataProvider=new CActiveDataProvider('Zhubo',
				array('criteria'=> $zuijiaxinren_criteria,
		 				'pagination'=>FALSE));
		}
	
		$this->renderPartial("_zuijiaxinren",
				array('dataProvider'=>$zuijiaxinren_dataProvider));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Zhubo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Zhubo']))
			$model->attributes=$_GET['Zhubo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Zhubo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Zhubo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Zhubo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='zhubo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
