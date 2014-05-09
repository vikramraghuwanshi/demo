<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'My Yii Application';
?>
<section class="sliderSec">
    <img src="images/banner.jpg" height="400" width="1137" alt=""/>
</section>

<section class="productSec">
    <?php if(!empty($ebook_data)){?>
    <h2>New Books</h2>
    <?php $i=0; foreach($ebook_data as $ebook){ if($i==5) break;?>
    <div class="productFirst">
        <a href="<?php echo Yii::getAlias('@web').'/cover_pages/'.$ebook->file_location;?>">
            <img src="cover_pages/<?php echo $ebook->cover_pages; ?>" width="100" height="130" alt=""/>
        </a>
        <p><?php echo $ebook->book_name; ?></p>
        <a href="javascript:;" class="cost"><?php echo $ebook->sale_price; ?></a>
    </div>
    <?php $i++; } }?>
</section>
<!--first productSec-->
<?php if(!empty($ebook_data[5])){  ?>
<section class="productSec">
    <h2>New Books</h2>
      <?php 
        for($i=5; $i<10;$i++){
            if(!empty($ebook_data[$i])){
     ?>
        <div class="productFirst">
            <a href="<?php echo Yii::getAlias('@web').'/cover_pages/'.$ebook_data[$i]->file_location;?>">
                <img src="cover_pages/<?php echo $ebook_data[$i]->cover_pages; ?>" width="100" height="130" alt=""/>
            </a>
            <p><?php echo $ebook_data[$i]->book_name; ?></p>
            <a href="javascript:;" class="cost"><?php echo $ebook_data[$i]->sale_price; ?></a>
        </div>
        <?php } } }?>
</section>

<?php if(!empty($ebook_data[10])){  ?>
<section class="productSec">
    <h2>FEATURED COLLECTIONS</h2>
      <?php 
        for($i=10; $i<15;$i++){
            if(!empty($ebook_data[$i])){
     ?>
        <div class="productFirst">
            <a href="<?php echo Yii::getAlias('@web').'/cover_pages/'.$ebook_data[$i]->file_location;?>">
                <img src="cover_pages/<?php echo $ebook_data[$i]->cover_pages; ?>" width="100" height="130" alt=""/>
            </a>
            <p><?php echo $ebook_data[$i]->book_name; ?></p>
            <a href="javascript:;" class="cost"><?php echo $ebook_data[$i]->sale_price; ?></a>
        </div>
        <?php } } }?>
</section>
<!--second productSec-->
<!--<section class="productSec">
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
<!--<section class="productSec">
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