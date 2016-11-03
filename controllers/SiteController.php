<?php
namespace frontend\controllers;

use Yii;
use common\models\User;

use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use app\models\Contactus;

use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
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
                    // [
                    //     'actions' => ['signup'],
                    //     'allow' => true,
                    //     'roles' => ['?'],
                    // ],
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
                    'logout' => ['post','get'],
                ],
            ],




        //   'access' => [
        //     'class' => \yii\filters\AccessControl::className(),
        //     'only' => ['categories'],
        //     'rules' => [
        //         [
        //             'allow' => true,
        //             'roles' =>['@'],
                    
        //         ],
                
        //     ],
        // ],


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
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionPhotographer($id)
    {

         return $this->render('photographer');
    }


     public function actionAboutus()
    {

         return $this->render('aboutus');
    }

      public function actionFaq()
    {

         return $this->render('faq');
    }

    public function actionProfile()
    {

         return $this->render('myprofile');
    }
   

   public function actionTab_profile()
    {
         if (isset($_POST['biography'])) 
         {
            $model = User::find()->where(['id'=>Yii::$app->User->id])->one();

            // $photo = $_FILES["photo"]["name"];
            // var_dump($_FILES);die();

            // $model->file = \yii\web\UploadedFile::getInstance($model, 'file');
            // $model->file->saveAs('user_photos/'.$model->username.'.'.$model->file->extension);
            // $model->photo = 'user_photos/'.$model->username.'.'.$model->file->extension;


              $file_name = $_FILES['photo']['name'];
              $file_size =$_FILES['photo']['size'];
              $file_tmp =$_FILES['photo']['tmp_name'];
              $file_type=$_FILES['photo']['type'];
              

               $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
      
              $expensions= array("jpeg","jpg","png","");
              
              if(in_array($file_ext,$expensions)=== false){
                  Yii::$app->session->setFlash('error', 'extension not allowed, please choose a JPG or PNG file');
              }
              
              else if($file_size > 2097152){
                 Yii::$app->session->setFlash('error', 'File Size Is Exceed 2 Mb');
              }
              
              else if(empty($errors)==true){

                if(file_exists("documenti/$file_name"))
                {
                    unlink("documenti/$file_name");
                }

                 move_uploaded_file($file_tmp,"user_photos/".$model->email.'.'.$file_ext);

                 if(!empty($file_name))
                 {
                    $model->photo = 'user_photos/'.$model->email.'.'.$file_ext;
                }

                 $model->biography = $_POST['biography'];
                $model->website = $_POST['website'];
                $model->instagram = $_POST['instagram'];
                $model->twitter = $_POST['twitter'];
                $model->facebook = $_POST['facebook'];

               
                Yii::$app->session->setFlash('success', 'Your Profile Has Been Updated');
                

                $model->save();
                
              }

            
            
            return $this->render('tab_profile');
        } 
        else 
        {
             return $this->render('tab_profile');
        }

        
    }


   


    public function actionTab_resume()
    {

         return $this->render('tab_resume');
    }

    public function actionTab_general_setting()
    {

          if (isset($_POST['firstname'])) 
         {
                $model = User::find()->where(['id'=>Yii::$app->User->id])->one();

  

                $model->username = $_POST['firstname']." ".$_POST['lastname'];
                $model->gender = $_POST['gender'];
                $model->phone = $_POST['phone'];
               

               if($model->validate())
               {
                  Yii::$app->session->setFlash('success', 'Your Profile Has Been Updated');
                }

                $model->save();
                
              

            
            
            return $this->render('tab_general_setting');
        } 
        else 
        {
             return $this->render('tab_general_setting');
        }
    }
   


     public function actionTab_address()
    {
         if (isset($_POST['address'])) 
         {
                $model = User::find()->where(['id'=>Yii::$app->User->id])->one();

               

                $model->address = $_POST['address'];
                $model->city = $_POST['city'];
               
               

               if($model->validate())
               {
                  Yii::$app->session->setFlash('success', 'Your Profile Has Been Updated');
                }

                $model->save();
                
              

            
            
            return $this->render('tab_address');
        } 
        else 
        {
             return $this->render('tab_address');
        }
         
    }



    public function actionContactus()
    {
        $model = new Contactus();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model = new Contactus();
            $model->check = 1;
            return $this->render('contactus', [
                'model' => $model,
            ]);
        } else {
            return $this->render('contactus', [
                'model' => $model,
            ]);
        }
    }



    public function actionCategories()
    {

         return $this->render('categories');
            }
    

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $modelsignup = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'modelsignup' => $modelsignup,'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

     public function actionForgot()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        if(isset($_GET['usr']))
        {
            var_dump($_GET['usr']);die();
        }
        

        
        else{
                return $this->render('forgotpassword');
        }
    }

    //   public function actionSendpassword()
    // {
      


    //     return $this->render('forgotpassword');
        
    // }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
