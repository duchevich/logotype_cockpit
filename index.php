<?php	
	require_once("admin/bootstrap.php");
	$base = collection("base_site_structure")->find()->toArray();

	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogoType</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    <link rel="stylesheet" href="css/validationEngine.jquery.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top shadow-border-bottom">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo-h2 hidden-lg hidden-md hidden-sm" href="#">LogoType</a>
			</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="#one">Меню</a></li>
				<li><a href="#two">Меню</a></li>
				<li><a href="#three">Меню</a></li>
				<li><a href="#four">Меню</a></li>
				<li><a href="#five">Меню</a></li>
				<li><a href="#six">Меню</a></li>
			</ul>
			<div class="navbar-right hidden-xs">
				<p><a href="tel:+7(8495) 987 09 09">Тел. <?=$base[0]['phone']?></a></p>
			</div>
		</div>
		</div>
	</nav>
	<header>
	   <div class="container">
		  <div class="row">
			  <div class="col-xs-6 col-md-6">
				<div class="header-logo">
					<a href="#" class="logo-a"><h2 class="logo-h2 hidden-xs"><?=$base[0]['logo']?></h2></a>
				</div> 
			  </div>
			  <div class="col-xs-6 col-md-6">
				<div class="header-phone">
					<p>Тел. <?=$base[0]['phone']?></p>
					<a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Закажите звонок</a>
				</div>    
			  </div>
		  </div>
	   </div>
	</header>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close.png" alt=""></span></button>
			<h4 class="modal-title" id="myModalLabel">Оставьте заявку<br>и мы перезвоним Вам<br>в ближайшее время</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-modal" action="send.php" id="form-modal" method="post">
				<input type="text" name="name" placeholder="Введите имя:" id="nameFMod" class="validate[required] text-input">
				<input type="tel" name="phone" placeholder="Введите телефон:" id="phoneFMod" class="validate[required,custom[phone]]">
				<input type="email" name="email" placeholder="Введите e-mail:" class="validate[required,custom[email]]">   
				<input type="submit" value="Отправить заявку" class="button-submit" data-toggle="modal" data-target="#thanks">
				<p>Ваши контактные данные в безопасности<br> и не будут переданы третьим лицам</p>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header thanks-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close.png" alt=""></span></button>
			<h4 class="modal-title" id="myModalLabel">Спасибо,<br>Ваша заявка принята!</h4>
		  </div>
		  <div class="thanks-line"></div>
		  <div class="modal-body">
			<p>Наш менеджер свяжется с Вами <br>в ближайшее время</p>
		  </div>
		</div>
	  </div>
	</div>
	<section class="section-main shadow-border" id="one">
		<div class="container">
			<h1><?=$base[0]['title']?></h1>
			<h2><?=$base[0]['subtitle']?>!</h2>
			<div class="main-line"></div>
			<div class="messages"></div>
			<div class="form-main" id="form-main">
			<?php form('contact'); ?>
				<h2 class="form-title">Оставьте заявку <span>прямо сейчас</span> и вы получите полный пакет <span>бесплатно</span>!</h2>
				<input type="text" name="form[name]" placeholder="Введите имя:" id="nameFM" class="validate[required] text-input">
				<input type="tel" name="form[phone]" placeholder="Введите телефон:" id="phoneFM" class="validate[required,custom[phone]]">
				<input type="email" name="form[email]" placeholder="Введите e-mail:" class="validate[required,custom[email]]">
				<input type="submit" value="Отправить заявку" class="button-submit" id="submitFM">
				<div class="help-box">
					<div class="help-body">
						я появляюсь, при наведении на кнопку
					</div>
					<div class="help-arrow"></div>
				</div>
				<p>Ваши контактные данные в безопасности и не будут переданы третьим лицам</p>
			</form>
			</div>
		</div>
	</section>
	<section class="section-after grey-bg shadow-border-bottom">
	  <div class="container">
		  <div class="row">
		   <?php foreach(collection("section_after")->find() as $item): ?>
			  <div class="col-xs-12 col-md-1 no-padding">
			  	<?=thumbnail($item["img"][0]['path'])?> 
			  </div>
			  <div class="col-xs-12 col-md-3 no-padding"><p><?=$item["text"]?></p></div>
			<?php endforeach;?>			 
		  </div>
	  </div>
	</section>
	<section class="section-about" id="two">
	   <div class="container">
		   <h3><?=$base[0]['about']?></h3>
		   <div class="wrap">
			   <div class="sign"></div>
		   </div>
			<div class="row">
				<div class="col-md-12 hidden-xs">
					<div id="carousel">
					  <?php foreach(gallery('about_company') as $image): ?>
						  <a href="#"><?php thumbnail($image["path"]) ?></a>
					<?php endforeach;?>
					</div>
					<div class="navi">
						<a href="#" id="prev"><img src="img/left.png" alt="to left"></a>
						<a href="#" id="next"><img src="img/right.png" alt="to right"></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
					<div class="slick-box">
					<?php foreach(gallery('about_company') as $image): ?>
						<div class="slick-item"><?php thumbnail($image["path"]) ?></div>
						
					<?php endforeach;?>
					</div>
				</div>
		   </div>
	   </div>
	</section>
	<section class="section-garanties grey-bg shadow-border" id="three">
	   <div class="container">
		   <h3><?=$base[0]['garanties']?></h3>
		   <div class="wrap">
			   <div class="sign"></div>
		   </div>
		   <div class="row">
		   <?php foreach(collection("section_garanties")->find() as $item): ?>
			   <div class="col-md-4">
				   <img class="gar-img" src="img/gar1.png" alt="">
				   <h4><?=$item["text_strong"]?></h4>
				   <p><?=$item["text"]?></p>
				   <p><?=$item["text_cursive"]?></p>
			   </div>
			<?php endforeach;?>	
		   </div>
	   </div>
	</section>
	<section class="section-whywe" id="four">
	   <div class="container">
		   <h3><?=$base[0]['why_we']?></h3>
		   <div class="wrap">
			   <div class="sign"></div>
		   </div>
		   <?php foreach(collection("section_why_we")->find() as $item): ?>
		   <div class="whywe-block">
		   
			   <div class="whywe-num <?=$item["class"]?>"></div>
			   <div class="whywe-text">
				   <p><strong><?=$item["text_strong"]?></strong><br>
				   <?=$item["text"]?><br>
				   <em><?=$item["text_cursive"]?></em></p>
				   <a href="">Подробнее</a>
			   </div>
			
		   </div>
		<?php endforeach;?>   
	   </div>
	</section>
	<section class="section-calculator grey-bg shadow-border" id="five">
	   <div class="container">
		   <h3><?=$base[0]['calculator']?></h3>
		   <div class="wrap">
			   <div class="sign"></div>
		   </div>
		   <form class="form-calc" action="">
			   <div class="form-box box1">
					<input type="text" name="enter" placeholder="Введите данные..." class="enter">
					<br>
					<input type="checkbox" id="c1" name="cc" class="chk" />
					<label for="c1" class="chk-label">Со всем согласен... <span></span></label>
			   </div>
			   <div class="form-box box2">
					<div class="slider-box">
						<div id="slider">
							<div id="custom-handle" class="ui-slider-handle"></div>
						</div>
					</div>
					<div class="persent">
						<p>1%</p>
						<p>100%</p>
					</div>
					<div class="slider-box">
						<div id="slider-range"></div>
					</div>
					<div class="persent">
						<p>1%</p>
						<p>100%</p>
					</div>
			   </div>
			   <div class="form-box box3">
			   		<p>Параметр 1</p>
				   <div class="checkbox-box">
						<input type="checkbox" class="checkbox" id="checkbox1" />
						<label for="checkbox1"></label>
				   </div>
				   <div class="on-off">
						<img src="img/off.png" alt="" class="off">
						<img src="img/on.png" alt="" class="on">
				   </div>
					<p>Параметр 2</p>
					<div class="checkbox-box">
						<input type="checkbox" class="checkbox" id="checkbox2" />
						<label for="checkbox2"></label>
				   </div>
				   <div class="on-off">
						<img src="img/off.png" alt="" class="off">
						<img src="img/on.png" alt="" class="on">
				   </div>
			   </div>
		   </form>
	   </div>
	</section>
	<section class="section-reviews" id="six">
	   <div class="container">
		   <h3><?=$base[0]['rewievs']?></h3>
		   <div class="wrap">
			   <div class="sign"></div>
		   </div>
		   <div class="row">
			   <div class="col-md-6">
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew1.png" alt="">
						</div>
				   </div>
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew3.png" alt="">
						</div>
				   </div>
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew5.png" alt="">
						</div>
				   </div>
			   </div>
			   <div class="col-md-6">
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew2.png" alt="">
						</div>
				   </div>
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew4.png" alt="">
						</div>
				   </div>
				   <div class="rewievs-block">
					   <h4>Ключевой тезис</h4>
					   <hr>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
						quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
						vulputate commodo lectus, ac blandit elit tincidunt id. Sed
						rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum</p>
						<div class="rewievs-photo">
							<p><strong>ФИО, район Москвы, возраст,<br>должность</strong></p>
							<img src="img/rew6.png" alt="">
						</div>
				   </div>
			   </div>
		   </div>
	   </div>
	</section>
	<section class="section-map hidden-xs">
       <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d945.6604511822644!2d37.68428596796373!3d55.68599258343388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x414ab4943221f6ed%3A0xf4322589681c125d!2z0K_QutC-0YDQvdCw0Y8g0YPQuy4sIDXQujEsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMTU0MDc!3m2!1d55.686350999999995!2d37.684542!5e0!3m2!1sru!2sua!4v1498863773886" frameborder="0" style="border:0" allowfullscreen></iframe>
       <div class="map-box">
       		<h2 class="logo-h2"><?=$base[0]['logo']?></h2>
       		<div class="map-box-line"></div>
       		<p>Адрес: г. Москва,<br>ул. Уличная, 35, офис 54<br><br>тел.: .+7 495 888-88-88 <br>e-mail: info@lexonblitz.ru</p>
       </div>
   </section>
    <footer>
        <div class="container">
        	<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="footer-logo">
						<a href="#" class="logo-a">
							<h2 class="logo-h2"><?=$base[0]['logo']?></h2>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="#" class="logo-a">
						<img class="footer-img" src="img/footer-logo.png" alt="">
					</a>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="header-phone">
						<p>Тел. <?=$base[0]['phone']?></p>
						<a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Закажите звонок</a>
					</div>
				</div>
			</div>
        </div>
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <!-- скролинг ползунков на мобильных -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
	
	<script src="js/jquery.validationEngine.js"></script>
	<script src="js/jquery.validationEngine-ru.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>