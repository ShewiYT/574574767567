<span class="bg-play"></span>
	<span class="bg-pt1"></span>

	<div class="feature-area bg-color1 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Панель</b> администратора</h3>
				<span class="hr-bottom"></span>
			</div>


				<div class="feature-container">
				<div class="row">
					<!--  -->
					<div class="col-md-8 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							

							 <form method="POST">
							 	<span id="info">
								 
								 	<div class="in-messenger-vk" id="create-news" style="display:none">
								<span class="ic-warn"></span>
								<p class="text-pt">Если все отлично отобразилось<br> То подтвердите создание</p>
								<button type="button" id="cnews" value="cnews" class="vk-submots">Создать</button></div>
								</span> 
							
								<div class="form-group row">
									<label for="text" class="col-sm-2 col-form-label">Название:</label>
									<div class="col-sm-8">
										<input id="title" type="text" class="form-control text" placeholder="Введите название новости">
									</div>
								</div>
								<div class="form-group row">
									<label for="text" class="col-sm-2 col-form-label">Картинка:</label>
									<div class="col-sm-8">
										<input id="url" type="text" class="form-control text" placeholder="Введите ссылку на картинку">
									</div>
								</div>
								<div class="form-group row">
									<label for="text" class="col-sm-2 col-form-label">Новость:</label>
									<div class="col-sm-8">
										<input id="vk" type="text" class="form-control text" placeholder="Введите ссылку на новость VK">
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group centers">
											<button class="btn-reiner" id="view" name="view" value="view" type="button">Предпросмотр</button>
										</div>
									</div>
								</div>
								</form>
							</div>
						
					</div>

					<div class="col-md-4">
						
						<span id="view_box"> </span>
					</div>


				</div>
				<br><br>
				<div class="row">
					<div class="col-md-12 whites-bg" >
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<div class="names2">
								<h3><b>Список</b> новостей</h3>
								<span class="hr-bottom"></span>
							</div>

								<?
									global $connect;
		  							$sql_news = "SELECT * FROM `news` ORDER BY id DESC LIMIT 10";
									$result_news = $connect->query($sql_news);
									 if($result_news->num_rows > 0)
									{
										while($news=$result_news->fetch_assoc())
										{
											
											
											 echo '
											 <div class="ucp__info">
									<div class="col-md-2">
										<img src="'.$news['Url'].'" class="news_img circle">
										<!-- <i class="info__icon"></i>--></div>
									<div class="col-md-6">
										<h6>Название новости:</h6>
										<p>'.$news['Title'].'</p>
									</div>
									<div class="col-md-4">
										<a href="dellnews/'.$news['id'].'" class="info__btn">Удалить</a>
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

	
	<span class="bg-pt2"></span>
