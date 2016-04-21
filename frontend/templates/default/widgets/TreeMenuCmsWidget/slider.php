<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $trees  \skeeks\cms\models\Tree[] */


\frontend\assets\MasterSliderAsset::register($this);

$this->registerJs(<<<JS
if($('#cat-slider').length > 0) {
    var categorySlider = new MasterSlider();
	categorySlider.control('arrows');
    categorySlider.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:164,height:200, align:'bottom', space:30 , margin:13, hideUnder:400});
    categorySlider.setup('cat-slider' , {
        width:1170,
        height:400,
        space:0,
        speed: 25,
        layout: 'fullwidth',
        preload:'all',
		loop:true,
        view:'basic',
        instantStartLayers: true
    });
	
	$('.ms-thumb ').hover(function(){
		$(this).find('.img-top').css('display','block');
		$(this).find('.img-orig').css('opacity','0');
	},function(){
		$(this).find('.img-top').css('display','none');
		$(this).find('.img-orig').css('opacity','1');
	});
	
	$('.ms-thumb').click(function( eventObject ) {
			var elem = $( this );
			if ( elem.hasClass( "clicked" ) ) {
			href = elem.find( "a" ).attr( "href" );
			if (href){ window.location.href = href};
		}else{
			$('.ms-thumb-frame').removeClass( "clicked" );
			elem.addClass( "clicked" );
		}
	});
}
JS
);

?>


    <div class="master-slider" id="cat-slider">
        <? if ($trees = $widget->activeQuery->all()) : ?>
			<? $i=0; ?>
            <? foreach ($trees as $model) : ?>

                <? if ($model->image) : ?>

                    <div class="ms-slide">
                        <img src="images/bg_2.png" data-src="images/bg_2.png" alt=""/>
                        <!--Text-->
                        <div class="ms-layer   text-block" data-effect="left(50,true)" data-duration="800" data-delay="250" data-ease="easeOutQuad">
                          <h3 class=" sl-title cl-green condensed mt-0 mb-0"><?= $model->name; ?></h3>
                          <div class=" hidden-xs  sl-desrc mt-20 mb-20"><?= $model->description_short; ?></div>
                          <a class="btn btn-success mt-20 btn-3d btn-lg btn-reveal" href="<?= $model->url; ?>">Выбрать</a>
                        </div>
                        <!--Image-->
                        <img style="right:0; width:auto!important; height:400px;" class="ms-layer " alt="<?= $model->name; ?>"		
							data-effect="back(500)" data-duration="800" data-delay="350" data-ease="easeOutQuad"
							src="<?= $model->fullImage->src; ?>"
							data-src="<?= $model->fullImage->src; ?>"
						/>
                        <div class="ms-thumb">
                            <img src="<?= $model->image->src; ?>" class="img-orig" alt="<?= $model->name; ?>"/>
							<? $i++; ?>
							<img src="/images/<?= $i; ?>_2.png" class="img-top" alt="<?= $model->name; ?>"/>
                            <h3><?= $model->name; ?></h3>
                            <a href="<?= $model->url; ?>"></a>
                        </div>
                    </div>

                <? endif;  ?>


            <? endforeach; ?>
        <? endif; ?>
    </div>
