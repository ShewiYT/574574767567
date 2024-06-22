<span class="bg-play"></span>
	<span class="bg-pt1"></span>

	<div class="feature-area bg-color1 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Настройки</b> персонажа</h3>
				<span class="hr-bottom"></span>
			</div>


				<div class="feature-container">
				<div class="row">
					
					<div class="col-md-4 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<img src="https://evolve-rp.ru/img/avatars/299.png" width="200px" height="200px" class="ava-bills"></img>
							<a href="/profile/exit" class="logout"><span class="ic-exits"></span> Выйти</a>
							<h3 class="ava-name"><?php FixName($data[$user['name']]) ?></h3>
							<a href="#" class="settings">Баланс: <b><?=$data[$user['donate']]?> Руб.</b></a>
						</div>
					</div>
					
					<div class="col-md-8 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<div class="in-messenger-vk">
								<span class="ic-google"></span>
								<p class="text-pt">Для лучшей безопасности аккаунта<br> Вам нужно настроить Google Authenticator</p>
								
								<a href="#" class="vk-submots">Подключить</a>
							</div>
							 <br>
							 <span id="info">
							 	
							 </span>
							<form method="POST">
								<div class="form-group row">
									<label for="text" class="col-sm-4 col-form-label">Старый пароль:</label>
									<div class="col-sm-8">
										<input id="oldpass" type="password" class="form-control text" placeholder="Введите старый пароль">
									</div>
								</div>
								<div class="form-group row">
									<label for="text" class="col-sm-4 col-form-label">Новый пароль:</label>
									<div class="col-sm-8">
										<input id="newpass" type="text" class="form-control text" placeholder="Введите новый пароль">
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group centers">
											<button class="btn-saves" id="change" name="change" value="change" type="button"><span class="ic-savesd"></span> Сохранить</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>

			<!-- <div class="feature-container">
				<div class="row">
					<div class="col-md-4 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<img src="https://evolve-rp.ru/img/avatars/299.png" width="200px" height="200px" class="ava-bills"></img>
							<a href="?logout" class="logout"><span class="ic-exits"></span> Выйти</a>
							<h3 class="ava-name">REINER GHOST</h3>
							<a href="#" class="settings">Баланс: <b>0 Руб.</b></a>
						</div>
					</div>
					<div class="col-md-8 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<div class="col-md-6 lf">
								<table style=" width: 100%; ">
									<tbody>
										<tr>
											<td class="dds">Имя:</td>
											<td class="ssd">Дима Шефер</td>
										</tr>
										<tr>
											<td class="dds">Баланс:</td>
											<td class="ssd">0 Руб.</td>
										</tr>
										<tr>
											<td class="dds">Статус:</td>
											<td class="ssd">Покупатель</td>
										</tr>
										<tr>
											<td class="dds">Сумма покупок:</td>
											<td class="ssd">0 Руб.</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="hr-gosx"></div>
							<div class="col-md-6 lf" style="min-height: 328px;">
								<a href="/settings" class="menu">Настройки</a>
								<a href="/dialogid" class="menu">ID диалогов</a>
															</div>
							<div class="hr-gos"></div>
							<div class="col-md-6 lf bt">
								<a class="orange-btn" href="/addbalance">
									<span class="ic-pluse"></span> Пополнить счёт
								</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	
	<span class="bg-pt2"></span>
