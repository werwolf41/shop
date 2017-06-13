<?php

namespace app\controllers;

use app\models\CategoriesProducts;
use function GuzzleHttp\Psr7\str;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Manufacturers;
use app\models\Products;
use app\models\Categories;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionManufacturers()
    {
        $model = Manufacturers::find()->asArray()->all();
        $manufacturers = [];
        $abc = [];
        foreach ($model as $manufacturer) {
            if (!in_array(mb_convert_case($manufacturer['name']{0}, MB_CASE_TITLE), $abc)) {
                $abc[] = mb_convert_case($manufacturer['name']{0}, MB_CASE_TITLE);
            }
            $manufacturers[mb_convert_case($manufacturer['name']{0}, MB_CASE_TITLE)][] = $manufacturer;
        }
        ksort($manufacturers);
        ksort($abc);
        return $this->render('manufacturers', compact('manufacturers', 'abc'));
    }

    public function actionManufacturer()
    {
        $id = Yii::$app->request->get('id');
        $manufacturer = Manufacturers::find()->where(['id' => $id])->one();

        $conditions =  $this->getConditions();

        $models = Products::find()->where(['manufacturer_id'=>$id]);

        $pages = new Pagination(['totalCount' => $models->count(), 'pageSize'=>$conditions['limit'], 'pageSizeParam' => false, 'forcePageParam' => false]);
        $products = $models->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy([$conditions['sortConst']=>$conditions['orderConst']])
            ->all();

        return $this->render('manufacturer', compact('manufacturer'));
    }

    public function actionCategory()
    {
        $id = Yii::$app->request->get('id');

        $conditions =  $this->getConditions();

        $category = Categories::find()->where($id)->with(['children'])->one();

        $models = Products::find()
            ->select('{{%products}}.*')
            ->innerJoin('categories_products', '{{%categories_products}}.products_id={{%products}}.id')
            ->where('{{%categories_products}}.categories_id='.$id);

        $pages = new Pagination([
            'totalCount' => $models->count(),
            'pageSize'=>$conditions['limit'],
            'pageSizeParam' => false,
            'forcePageParam' => false,
            'params' => array_merge($_GET, [
                    'sort' => $conditions['sort'],
                    'order' =>$conditions['order'],
                    ])
            ]);

        $products = $models->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy([$conditions['sortConst']=>$conditions['orderConst']])
            ->all();


        return $this->render('category', compact('category', 'products', 'pages', $conditions));
    }

    public function actionProduct()
    {
        $id = Yii::$app->request->get('id');
        $product = Products::findOne($id);

        return $this->render('product', compact('product'));
    }

    private function getConditions(){
        $conditions = [];
        $conditions['limit']  = !empty(Yii::$app->request->get('limit')) ? (int) Yii::$app->request->get('limit') : 12;
        $conditions['sort'] = !empty (Yii::$app->request->get('sort')) ? (string) Yii::$app->request->get('sort') : 'name';
        $conditions['order'] = !empty (Yii::$app->request->get('order')) ? (string) Yii::$app->request->get('order') : 'ASC';

        if ($conditions['sort']!='rating') $conditions['sortConst'] = '{{%products}}.'.$conditions['sort'];
        else $conditions['sortConst'] = '{{%r}}.'.$conditions['sort'];
        if ($conditions['order'] == 'ASC') $conditions['orderConst'] = SORT_ASC;
        else $conditions['orderConst'] = SORT_DESC;

        return $conditions;
    }
}
