<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */

\frontend\assets\MasterSliderAsset::register($this);

$this->registerJs(<<<JS
if($('#cat-slider').length > 0) {
    var categorySlider = new MasterSlider();
    categorySlider.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:164,height:280, align:'bottom', space:30 , margin:13, hideUnder:400});
    categorySlider.setup('cat-slider' , {
        width:1050,
        height:550,
        space:0,
        speed: 25,
        layout: 'fullwidth',
        preload:'all',
        view:'basic',
        instantStartLayers: true
    });
}
JS
);

?>
<!--Categories Slider-->
<section class="category-slider padding-top-0">
<div class="master-slider" id="cat-slider">

    <!--Category (Slide) 1-->
  <div class="ms-slide">
    <!--Background-->
    <img src="masterslider/blank.gif" data-src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/slides/bg_2.png" alt="lorem ipsum dolor sit"/>
    <!--Text-->
    <div class="ms-layer text-block" data-effect="left(50,true)" data-duration="800" data-delay="250" data-ease="easeOutQuad">
      <h2 class="light-color">Look for all macs<br/>in our shop!</h2>
      <p class="light-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
      <a class="btn btn-primary" href="#">Go to catalog</a>
      <a class="btn btn-success" href="#">Browse all PC</a>
    </div>
    <!--Image-->
    <img style="right: 50px;" class="ms-layer img-block" src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/slides/slide_1.png" alt="1" data-effect="back(500)" data-duration="800" data-delay="350" data-ease="easeOutQuad"/>
    <div class="ms-thumb">
        <img src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/thumbs/th_1.jpg" alt="1"/>
      <h3>Category</h3>
    </div>
  </div>
  <!--Category (Slide) 1-->
  <div class="ms-slide">
    <!--Background-->
    <img src="masterslider/blank.gif" data-src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/slides/bg_1.png" alt="lorem ipsum dolor sit"/>
    <!--Text-->
    <div class="ms-layer text-block" data-effect="left(50,true)" data-duration="800" data-delay="250" data-ease="easeOutQuad">
      <h2 class="light-color">Look for all macs<br/>in our shop!</h2>
      <p class="light-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
      <a class="btn btn-primary" href="#">Go to catalog</a>
      <a class="btn btn-success" href="#">Browse all PC</a>
    </div>
    <!--Image-->
    <img style="right: 50px;" class="ms-layer img-block" src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/slides/slide_1.png" alt="1" data-effect="back(500)" data-duration="800" data-delay="350" data-ease="easeOutQuad"/>
    <div class="ms-thumb">
        <img src="http://the8guild.com/themes/html/bushido/v1.3/img/categories/thumbs/th_1.jpg" alt="1"/>
      <h3>Category</h3>
    </div>
  </div>



</div>
</section><!--Categories Slider Close-->


