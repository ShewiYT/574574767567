<span class="bg-play"></span>
	<span class="bg-pt1"></span>
	<section class="skew skew-banner remove-top-skew">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="banner-content highlight">
						<h1 class="m1s">KINGSTON PROJECT</h1>
						<p class="m2s">
							 <b class="colrs">KINGSTON PROJECT</b> - это захватывающий и приятный для игры проект сетевой версии игры GTA SAMP. Окунувшись в игровой процесс на нашем сервере Вы сможете попробовать себя в разных игровых ролях, побыть сотрудником полиции, мэром города со всей его инфраструктурой или вообще пойти против закона и встать на сторону банды! Игра, приближенная к реальной жизни, общение, новые знакомые, множество продуманных организаций и работ. Всё это ждёт Ваc на игровом сервере Kingston Project, присоединяйтесь!<br><br>
							
						</p>
						<div class="banner-button-container">
							<a class="orange-btn" href="/faq">
								<span class="ic-video"></span> Начать игру
							</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="feature-area bg-color3 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Статистика</b> сервера</h3>
				<span class="hr-bottom"></span>
			</div>
						<div class="feature-container">
				<div class="row">
					
					<div class="col-md-6">
						<div class="feature-wrapper wow pulse" data-wow-duration="2s">
							<div class="st2"></div>
							<h4>Более 1170</h4>
							<p>Аккаунтов</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="feature-wrapper wow pulse m-0" data-wow-duration="1s">
							<div class="st3"></div>
							<h4>494</h4>
							<p>Максимальный онлайн</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="bg-pt2"></span>
	<div id="shop" class="post-area bg-color4 minus-30 section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Новости</b> проекта</h3>
				<span class="hr-bottom"></span>
			</div>
			<div class="w3-container">

				
				<div class="w3-container w3-border city category0">
					<div class="row">
						<div class="col-lg-12">
							<div class="post-container">
								<div class="row">
									<?
									global $connect;
		  							$sql_news = "SELECT * FROM `news` ORDER BY id DESC LIMIT 20";
									$result_news = $connect->query($sql_news);
									 if($result_news->num_rows > 0)
									{
										while($news=$result_news->fetch_assoc())
										{
											
											
											 echo '
											<div class="col-md-4">
										<div class="post-wrapper" data-wow-duration="1s">
											<div class="post-thumb">
												<img src="'.$news['Url'].'">
											</div>
											<div class="post-desc">
												
													<h4>'.$news['Title'].'</h4>
													
												<div class="semmer">
													<p class="description"></p>
													<div class="buy-cats">
														<div class="form-group centers">
															<a href="'.$news['Vk'].'" class="btn-news-go">Подробнее</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
											';
										
										}  
										
									}
									else echo "<div class='loader' align='center'></div>";
								  
								  ?>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>