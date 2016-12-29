<?php

namespace app\controllers;

use app\models\Demention;
use app\models\Material;
use app\models\Role;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use app\models\User;
use yii\filters\VerbFilter;
use yii\helpers\Url;


class AdminController extends \yii\web\Controller
{
    public $layout = 'admin_layout';
    public function behaviors() {
        if(Yii::$app->user->identity->role==User::ROLE_ADMIN) {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => [
                                'index', 'add_dem'
                            ],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];
        }elseif(Yii::$app->user->identity->role==User::ROLE_USER){
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => [
                                'storage'
                            ],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];
        }else{
            return [
                'access' => [
                    'rules' => [
                        [
                            'actions' => [],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ];
        }
    }

    public function actionIndex()
    {
           // $ob=new Role();
          //  $id1=785;
            return $this->render('index'/*, [
                    'hhh'=>$ob->getProba($id1)
            ]*/);
    }

    public function actionAdd_dem()
    {
        $model=new Material();
        if(Yii::$app->request->isPost)
        {
            $post = Yii::$app->request->post();
            if($model->load($post) && $model->validate()):
                if($model->save()):
                    return $this->redirect(Url::toRoute('index'));
                endif;
            endif;
        }
        return $this->render('add_dem',[
            'model'=>$model
        ]);
    }
    

}
