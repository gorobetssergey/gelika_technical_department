<?php

namespace app\controllers;

use app\models\ProductSearch;
use app\models\ProductTree;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use app\models\User;
use yii\helpers\Url;
use app\models\Material;
use app\models\MaterialSearch;
use app\models\Unit;
use app\models\UnitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Product;
use app\models\StorageAMaterial;
use app\models\StorageAMaterialSearch;
use app\models\StorageAProduct;
use app\models\StorageAProductSearch;
use app\models\StorageBMaterial;
use app\models\StorageBMaterialSearch;
use app\models\StorageBProduct;
use app\models\StorageBProductSearch;
use app\models\StorageMaterialSearch;
use app\models\StorageProductSearch;

class AdminController extends \yii\web\Controller
{
    public $layout = 'admin_layout';
    public function behaviors() {
        if(Yii::$app->user->identity->role==\app\models\User::ROLE_ADMIN) {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => [
                                'index'
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
        }elseif(Yii::$app->user->identity->role==\app\models\User::ROLE_USER){
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
}
