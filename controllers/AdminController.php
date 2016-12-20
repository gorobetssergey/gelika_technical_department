<?php

namespace app\controllers;

use app\models\Demention;

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
                                'index','add_demention'
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
        return $this->render('index');
    }

    public function actionAdd_demention()
    {
        $model=new Demention();
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
            'model' => $model
        ]);
    }

}
