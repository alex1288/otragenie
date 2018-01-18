<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<style>.top_line{box-shadow: none;}</style> 



<section class="main_box" style="" id="main_box">
<div data-parallax="scroll" data-speed="0.2" data-image-src="<?php bloginfo('template_directory'); ?>/img/bg/рюмка new51.jpg"  data-positionY="-100px" style="height: 100%; background-position: 50%;" >
<div class="container">
	<div class="col-lg-12">
		<div class="row">
<div class="main_text">

	<h1>Агентство Недвижимости</h1>
	<p>Поможем вернуть до 700 000 руб. от покупки квартиры<br> за счет государства</p>

	<a style="margin-top: 25px;" href="#form" class="popap">Записаться</a>

</div>
<div class="main_address">
<div class="col-md-4">
	<div class="row">
		<p><i class="fa fa-mobile" aria-hidden="true"></i></p>
		<span>(4822) 22-22-22</span>
	</div>
</div>
<div class="col-md-4">
	<div class="row">
		<p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
		<span>г.Тверь, пр-кт Чайковского, 9</span>
	</div>
</div>
<div class="col-md-4">
	<div class="row">
		<p><i class="fa fa-paper-plane-o" aria-hidden="true"></i></p>
		<span>email@email.ru</span>
	</div>
</div>


</div>
</div>
			
		</div>
	</div>
</div>

</section>
<section class="about_us" id="about_us">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="about_us_l">

			<h2 style="">100 слов о нас</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad perspiciatis non, porro</p>
</div>


<div class="about_us_r">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex numquam iure, deleniti nesciunt. Fugit rem autem nisi totam eius quam asperiores illum, consectetur enim similique cumque dicta, sit temporibus vero.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex numquam iure, deleniti nesciunt. Fugit rem autem nisi totam eius quam asperiores illum, consectetur enim similique cumque dicta, sit temporibus vero.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex numquam iure, deleniti nesciunt. Fugit rem autem nisi totam eius quam asperiores illum, consectetur enim similique cumque dicta, sit temporibus vero.</p>
</div>

		</div>
	</div>
</div>
</section>


<section class="staff" id="staff">
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="staff_l">

					<h2 style="">Наша <br>команда</h2>
					<p>Помогут подобрать жилье<br> и оформить ипотеку</p>

				</div>

				<div class="staff_r">
					<ul>
						<li><div class="staff_img">
							<img src="<?php bloginfo('template_directory'); ?>/img/staff1.jpg" alt="">
							</div>
								<h3>Валерий Новожилов</h3>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi delectus fugit suscipit totam itaque, voluptate blanditiis </p>
							</img></li>
						<li><div class="staff_img">
							<img src="<?php bloginfo('template_directory'); ?>/img/staff2.jpg" alt="">
							<h3>Алексей Артимович</h3>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi delectus fugit suscipit totam itaque, voluptate blanditiis </p>
							</img></li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="advantage" id="advantage">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="advantage_l">

			<h2 style="">Преимущества</h2>
			<p>Наши преимущества<br> или почему нам доверяют</p>
</div>


<div class="advantage_r">
	<ul>
		<li>
			<img src="" alt="">
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/0.png" alt="">
			<h3>Преимущество</h3>
			<p>описание преимущества</p>
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/1.png" alt="">
			<h3>Пеимущество</h3>
			<p>описание преимущества</p>
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/2.png" alt="">
			<h3>Преимущество</h3>
			<p>описание преимущества</p>
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/3.png" alt="">
			<h3>Преимущество</h3>
			<p>описание преимущества</p>
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/4.png" alt="">
			<h3>Преимущество</h3>
			<p>описание преимущества</p>
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/img/icon/5.png" alt="">
			<h3>Преимущество</h3>
			<p>описание преимущества</p>
		</li>
	</ul>
</div>

		</div>
	</div>
</div>
</section>


<section class="infobox" id="infobox">
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="infobox_l">
					<h2 style="">Инфографика</h2>
					<P>Немного цифр, которые раскажут<br> больше че слова</P>
				</div>
				<div class="infobox_r">
					<ul>
						<li>
							<h3>98<span>%</span></h3>
							<p>довольных клиентов</p>
						</li>
						<li>
							<h3><span>более</span>1000</h3>
							<p>квартир продано</p>
						</li>
						<li>
							<h3><span>более</span>10</h3>
							<p>застройщиков</p>
						</li>
						<li>
							<h3><span>более</span>10<span> млн. руб</h3>
							<p>сэкономили клиентам</p>
						</li>
						<li>
							<h3>3 <span>года</span></h3>
							<p>успешной работы</p>
						</li>
						<li>
							<h3><span>более</span>1000</h3>
							<p>какая-то сумма</p>
						</li>
					</div>


				</div>
			</div>
		</div>
	</section>

<section class="what_we_can" id="what_we_can">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="what_we_can_l">

			<h2 style="white-space: nowrap;">Какие жилищные<br> вопросы, мы <br>помогаем решить?</h2>
			<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, amet mollitia quidem cumque autem.</p>
</div>

			<div class="what_we_can_r">
<ul>
	<li>
		<div class="img_absolute what_1"></div>
		<p>Обменять старое<br> жилье на новое</p>
	</li>
	<li>
		<div class="img_absolute what_2"></div>
		<p>Объединить комнаты<br>  в квартиру</p>
	</li>
	<li>
		<div class="img_absolute what_3"></div>
		<p>Продать имеющиеся<br>  имущество</p>
	</li>
	<li>
		<div class="img_absolute what_4"></div>
		<p>Оформить<br>  ипотеку</p>
	</li>
	<li>
		<div class="img_absolute what_5"></div>
		<p>Купить квартиру<br>  в новостройке</p>
	</li>
	<li>
		<div class="img_absolute what_6"></div>
		<p>Купить квартиру<br>  во вторичке</p>
	</li>
	<li>
		<div class="img_absolute what_7"></div>
		<p>Произвести<br>  обмен жилья</p>
	</li>
</ul>

</div>

		</div>
	</div>
</div>
</section>


<section class="what_get" id="what_get">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="what_get_l">

			<h2 style="white-space: nowrap;">Что вы получаете,<br> работая с нами?</h2>
			<p>	Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit. Labore rerum cum quidem quibusdam nulla</p>
</div>


<div class="what_get_r">
	<ul>
		<li>
		<p>Оформляете ипотеку с первого раза за 1 час
“Услуга одно окно”
Оформляем ипотеку в офисе за 1 час
</p>
		</li>
		<li>
<p>Экономите время 
Предлагаем варианты на основе полного опроса, только в случае одобрения едим на экскурсию
</p>
		</li>
		<li>
<p>Выбираете с комфортом
Центр в офисе, предлагаем чай и кофе, экскурсия на нашем авто, оформляем без очередей.
</p>
		</li>

		<li>
<p>Получаете скидки и подарки
Наши партнеры предоставляют скидки для наших клиентов, застройщики дарят подарки и мы
</p>
		</li>
<li><p>		
Гарантия</p>
		</li>
		<li>
<p>Получаете соц. выплаты после покупки квартиры
Помогаем оформить...
</p>
		</li>
	</ul>
</div>

			

		</div>
	</div>
</div>
</section>











<section class="price" id="price">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="price_l">

			<h2 style="">Цены/Тарифы</h2>
</div>

<div class="price_r">
<ul>
	<li>
		<div class="price_h3" style="    background-color: rgb(236, 157, 45);"><h3>За счет застройщика</h3></div>
		<p>Описание услуги: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti modi dolorum atque ratione aspernatur doloremque eum.<br><br><br></p>
		<div class="price_span"><span>бесплатно</span></div>
		<div class="price_a"><a href="#form" class="popap">Заказать</a></div>
	</li>
	<li>
		<div class="price_h3" style="   background-color: rgb(45, 168, 236);"><h3>10% от стоимости</h3></div>
		<p>Описание услуги: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti modi dolorum atque ratione aspernatur doloremque eum.<br><br><br></p>
		<div class="price_span"><span>10% от застрой</span></div>
		<div class="price_a"><a href="#form" class="popap">Заказать</a></div>
	</li>
	<li>
		<div class="price_h3" style="        background-color: rgb(159, 144, 206);"><h3>Еще одна услуга</h3></div>
		<p>Описание услуги: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti modi dolorum atque ratione aspernatur doloremque eum.<br> <br><br></p>
		<div class="price_span"><span>20 000 руб</span></div>
		<div class="price_a"><a href="#form" class="popap">Заказать</a></div>
	</li>
</ul>

	</div>
		</div>
	</div>
</div>
</section>

<section class="reviews" id="reviews">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="reviews_l">

			<h2 style="">Отзывы клиентов</h2>
</div>

<div class="reviews_r">
								<div class="block-one-example">
					<div id="customNav" class="owl-my-nav"></div>
					<div class="owl-carousel block-items">
						<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-3">
									<img style="border-radius: 50%;" src="<?php bloginfo('template_directory'); ?>/img/staff1.jpg" alt="">
								</div>
								<div class="col-lg-9">
									<h3 class="city-name">клиент 1</h3>
									<p class="text-testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad perspiciatis non, porro numquam mollitia officia, ratione! Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?</p></div>
								</div>
							</div>
						<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-3">
									<img style="border-radius: 50%;" src="<?php bloginfo('template_directory'); ?>/img/staff2.jpg" alt="">
								</div>
								<div class="col-lg-9">
									<h3 class="city-name">клиент 2</h3>
									<p class="text-testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad perspiciatis non, porro numquam mollitia officia, ratione! Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?</p></div>
								</div>
							</div>
							<div class="item">
								<div class="inner-testimonial">
									<div class="col-lg-3">
									<img style="border-radius: 50%;" src="<?php bloginfo('template_directory'); ?>/img/staff1.jpg" alt="">
								</div>
									<div class="col-lg-9">
									<h3 class="city-name">клиент 3</h3>
									<p class="text-testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad perspiciatis non, porro numquam mollitia officia, ratione! Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?Temporibus explicabo, maiores ipsum natus laborum repellendus quibusdam perferendis facilis cum ad pariatur necessitatibus?</p>
									</div>
								</div>
							</div>
							
							

							

							

							

						</div>

					</div>
		<a href="http://xn--69-dlcatmvmjbd.xn--p1ai/%D0%BE%D1%82%D0%B7%D1%8B%D0%B2%D1%8B/">
								<p>Все отзывы</p>
							</a>
		</div>
	</div>
	</div>
</div>
</section>


<section class="partners" id="partners">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="partners_l">

			<h2 style="">Партнеры</h2>
			<p >Застройщики <br>с которыми мы работаем</p>
			</div>
<div class="partners_r">
				<div class="block-one-example" style="    margin: 90px 0px;">
					<div id="customNav2" class="owl-my-nav"></div>
					<div class="owl-carousel2 block-items">
						<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-12 aviator partners_item" >
									<img style="border-radius: 50%;" src="" alt="">
								</div>
								
								</div>
							</div>
						<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-12 brus partners_item">
									<img style="border-radius: 50%;" src="" alt="">
								</div>
								
								</div>
							</div>
							<div class="item">
								<div class="inner-testimonial">
									<div class="col-lg-12 les partners_item">
									<img style="border-radius: 50%;" src="" alt="">
								</div>
									
								</div>
							</div>
							<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-12 gus partners_item">
									<img style="border-radius: 50%;" src="" alt="">
								</div>
								
								</div>
							</div>
							<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-12 volga partners_item">
									<img style="border-radius: 50%;" src="" alt="">
								</div>
								
								</div>
							</div>
							<div class="item">
							<div class="inner-testimonial">
								<div class="col-lg-12 mich partners_item">
									<img style="border-radius: 50%;" src="" alt="">
								</div>
								
								</div>
							</div>
							

							

							

							

						</div>
					</div>
	<a href="http://xn--69-dlcatmvmjbd.xn--p1ai/%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8/">
								<p>Партнеры</p>
							</a>
</div>
		</div>



		<div class="row">
			<div class="partners_l">

				<h2 style="">Банки</h2>
				<p >К которым мы знаем подход</p>
			</div>
			<div class="partners_r">
				<Ul>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/img/sber.png" alt="">
						<h3>Сбербанк</h3>
						<p>от 8%</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/img/ross.jpg" alt="">
						<h3>Россельхозбанк</h3>
						<p>от 8%</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/img/vtb.png" alt="">
						<h3>ВТБ24</h3>
						<p>от 8%</p>
					</li>
				</Ul>


			</div>
		</div>

</div>
		</div>

</section>

<section class="question" id="question">
<div class="container">
	<div class="col-lg-12">
		<div class="row">
					<div class="question_l">

						<h2 style="">Остались вопросы?</h2>
						<p>Оставьте заявку и мы вам перезвоним</p>
			</div>
<div class="question_r">
	<div class="buttom_form_box">
								<form  id="form2" style="padding-bottom: 35px;">
									<input style="margin-top: 38px;" type="text" name="name" placeholder="Иванов Иван" required>
									<input type="text" id="phone2" name="phone" placeholder="+7 (___) ___-__-__" required>
									<button class="but_order" style="height: 53px; ">Отправить</button>
								</form>
							</div>

</div>


		</div>
	</div>
</div>
</section>
<!-- плавающее меню -->
<div class="sticky-header" id="blfix">
           <nav class="top-menu">
                <ul>
                    <li><a class="active" href="#main_box"><p>Главная</p></a></li>
                    <li><a class="active" href="#about_us"><p>О нас</p></a></li>
                    <li><a href="#staff"><p>Команда</p></a></li>
                    <li><a href="#advantage"><p>Преимущества</p></a></li>
                    <li><a href="#infobox"><p>Инфографика</p></a></li>
                    <li><a href="#what_we_can"><p>Помогаем решить</p></a></li>
                    <li><a href="#what_get"><p>Что вы получаете</p></a></li>
                    <li><a href="#price"><p>Цены/Тарифы</p></a></li>
                    <li><a href="#reviews"><p>Отзывы</p></a></li>
                    <li><a href="#partners"><p>Партнеры</p></a></li>
                    <li><a href="#question"><p>Заказать звонок</p></a></li>
                    <li><a href="#contacts"><p>Контакты</p></a></li>
                </ul>
            </nav> 
</div>  
<!-- плавающее меню -->


<?php get_footer(); // подключаем footer.php ?>