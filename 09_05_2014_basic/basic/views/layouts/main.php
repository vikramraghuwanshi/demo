<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link href="<?php echo Yii::getAlias('@web').'/css/style.css'?>" rel="stylesheet">
</head>
<body>

<?php $this->beginBody() ?>
<div class="wrapper">
    <header id="header">
        <div class="inner_wrapper">
            <?php //echo Yii::$app->getSession()->set('test','');?>
            <?php $id = Yii::$app->getSession()->get('id');?>
            <nav>
                <ul>
<!--                <li><a href=""><img src="images/home.png" alt="" height="40" width="40" style="margin:-10px 0 0 0;"/></a></li>-->
                    <li><?php echo Html::a('<img src="images/home.png" alt="" height="40" width="40" style="margin:-10px 0 0 0;"/>', ['/site/index']); ?></li>
                    
                    <?php if(isset($id) and $id !=''){?>
                        <li><?php echo Html::a('Ebook', ['/ebook']); ?></li>
                        <li><?php echo Html::a('User', ['/user']); ?></li>
<!--                        <li><?php //echo Html::a('User Type', ['/user-type']); ?></li>-->
                        <li><?php echo Html::a('Category', ['/category']); ?></li>
                        <li><?php echo Html::a('Logout', ['/site/logout']); ?></li>
                    <?php }else{?>
                        <li><a href="javascript:;">Faq</a></li>
                        <li><a href="javascript:;">Blog</a></li>
                        <li><a href="javascript:;">Policy</a></li>
                        <li><a href="javascript:;">Map</a></li>
                        <li><a href="javascript:;">Contact Us</a></li>
                        <li><?php echo Html::a('Login', ['/site/login']); ?></li>
                    <?php }?>
                </ul>
            </nav>
        </div><!--inner_wrapper-->
    </header>
            <div class="bodySec">
                    <div class="inner_wrapper">
                        <div class="container">
                            <?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                            <div class="bodySec">
                                <div class="inner_wrapper">
                            <?= $content ?>
                                </div>
                            </div>
                        </div>
    <!--				<section class="sliderSec">
                                    <img src="images/banner.jpg" height="400" width="1000" alt=""/>
                            </section>
                            <section class="productSec">
                                    <h2>Your Welcome</h2>
                                    <div class="productFirst">
                                            <img src="images/1.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/2.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/3.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/4.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/5.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>					
                            </section>-->
                        <!--first productSec-->
    <!--				<section class="productSec">
                                    <h2>Your Welcome</h2>
                                    <div class="productFirst">
                                            <img src="images/1.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/2.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/3.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/4.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/5.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>					
                            </section>-->
                        <!--second productSec-->
    <!--				<section class="productSec">
                                    <h2>Your Welcome</h2>
                                    <div class="productFirst">
                                            <img src="images/1.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/2.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/3.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/4.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/5.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>					
                            </section>-->
                        <!--third productSec-->
    <!--				<section class="productSec">
                                    <h2>Your Welcome</h2>
                                    <div class="productFirst">
                                            <img src="images/1.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/2.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/3.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/4.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>
                                    <div class="productFirst">
                                            <img src="images/5.png"  alt=""/>
                                            <p>This is Our Product</p>
                                            <a href="" class="cost">Product Cost</a>
                                    </div>					
                            </section>-->
                        <!--fourth productSec-->

                    </div><!--inner_wrapper-->
            </div><!--bodySec-->	
	</div><!--wrapper-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
