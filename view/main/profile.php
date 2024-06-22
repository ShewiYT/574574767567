<span class="bg-play"></span>
	<span class="bg-pt1"></span>

	<div class="feature-area bg-color1 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Личный</b> Кабинет</h3>
				<span class="hr-bottom"></span>
			</div>


				<div class="feature-container">
				<div class="row">
					<!-- <div class="ucp__info">
						<div class="col-md-2"><i class="info__icon"></i></div>
						<div class="col-md-6">
							<h6>Последняя сессия:</h3>
							<p>В ваш аккаунт был выполнен вход:  01.01.1970 в 03:00 IP:  (Страна: Россия)</p>
						</div>
						<div class="col-md-4">
							<a href="/auth.php?act=logout" class="info__btn">Завершить сеанс</a>
						</div>
					</div> -->
					<div class="col-md-4 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<img src="https://evolve-rp.ru/img/avatars/299.png" width="200px" height="200px" class="ava-bills"></img>
							<a href="/profile/exit" class="logout"><span class="ic-exits"></span> Выйти</a>
							<h3 class="ava-name"><?php FixName($data[$user['name']]) ?></h3>
							<a href="#" class="settings">Баланс: <b><?=$data[$user['donate']]?> Руб.</b></a>
						</div>
					</div>
					<div class="col-md-4 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
							<table style=" width: 100%; ">
								<tbody>
									<tr>
										<td class="dds">Имя:</td>
										<td class="ssd"><?php FixName($data[$user['name']]) ?></td>
									</tr>
									<tr>
										<td class="dds">Уровень:</td>
										<td class="ssd"><?=$data[$user['level']]?></td>
									</tr>
									<tr>
										<td class="dds">Деньги на руках:</td>
										<td class="ssd"><?=$data[$user['cash']]?>$</td>
									</tr>
									<tr>
										<td class="dds">Деньги в банке:</td>
										<td class="ssd"><?=$data[$user['bank']]?>$</td>
									</tr>
									<tr>
										<td class="dds">Организация:</td>
										<td class="ssd"><?=$frac?></td>
									</tr>
									<tr>
										<td class="dds">Подработка:</td>
										<td class="ssd"><?=$job?></td>
									</tr>
									<tr>
										<td class="dds">Предупреждений:</td>
										<td class="ssd"><?=$data[$user['warn']]?></td>
									</tr>
									<tr>
										<td class="dds">Статус:</td>
										<td class="ssd"><?=$status?></td>
									</tr>
								</tbody>
							</table>
							<!-- <div class="form-group row">
								<label for="text" class="col-sm-4 col-form-label">Никнейм:</label>
								<div class="col-sm-8">
									<input name="promo" type="text" class="form-control text" placeholder="Введите никнейм">
								</div>
							</div>

							<div class="form-group row">
								<label for="text" class="col-sm-4 col-form-label">Пароль:</label>
								<div class="col-sm-8">
									<input name="promo" type="password" class="form-control text" placeholder="Введите пароль">
								</div>
							</div>

							

							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<button name="buy" class="btn-sends" type="button"><span class="ic-sends"></span> Продолжить</button>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="col-md-4 whites-bg">
						<div class="feature-wrapper wow pulse" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: pulse;">
						
								<div class="row">
								<div class="col-md-12">
									<br>
									<div class="form-group">
										<a href="/donate">
										<button name="buy" class="btn-sends" type="button"><span class="ic-donate"></span> Пополнить счет</button></a>
									</div>
									
									<div class="form-group">
										<a href="/settings">
										<button name="buy" class="btn-sends" type="button"><span class="ic-setting"></span> Настройки</button></a>
									</div>
									<?php if($data[$user['admin']] > 0): ?>
										<div class="form-group">
											<a href="/admin">
											<button name="buy" class="btn-sends" type="button"><span class="ic-admin"></span> Панель Админа</button></a>
										</div>
									<?php endif;?>	
								</div>
							</div>
						</div>
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
