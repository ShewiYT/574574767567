
<span class="bg-play"></span>
	<span class="bg-pt1"></span>
	<div class="feature-area bg-color3 skew-section-spacing section-spacing">
		<div class="container">
			<div class="names">
				<h3><b>Мониторинг</b> Игроков</h3>
				<span class="hr-bottom"></span>
			</div>
			<div class="info-re">
				<span class="ic-wars"></span>
				<p class="inf-ws">На этой странице можно посмотреть мониторинг игроков <br>Для просмотра нажмите на нужную вам категорию.</p>
			</div>
			<div class="w3-container">
				<div class="w3-bar w3-black white-bgs">
					<button class="w3-bar-item w3-button tablink w3-red" onclick="SelectTab(event,'mont1')">ВСЕ ИГРОКИ</button>
					<button class="w3-bar-item w3-button tablink" onclick="SelectTab(event,'mont2')">ЛИДЕРЫ</button>
					
				</div>
				<div id="mont1" class="w3-container w3-border city">
					<div class="col-md-12">

						<?php 	$sql = "SELECT * FROM `{$user['table']}` WHERE `{$user['online']}` = '1'";
							$result = $connect->query($sql);
							if($result->num_rows > 0)
							{	
								while($data=$result->fetch_assoc())
								{ 
									echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">'.$data[$user['name']].'</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$data[$user['level']].' LVL</span>
											</div>
										</div>';
								}
								}	else echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">Данных нет</span>
											</div></div>'; ?>
					</div>
					
				</div>
				<div id="mont2" class="w3-container w3-border city" style="display:none">
					<div class="col-md-12">
						<?php 	
							$sqls = "SELECT * FROM `{$user['table']}` WHERE `{$user['leader']}` != '0' AND `{$user['online']}` = '1'";
							$results = $connect->query($sqls);
							if($results->num_rows > 0)
							{


								while($datas=$results->fetch_assoc())
								{
									switch($datas[$user['member']])
									{
										case 0: $frac = "Безработный"; break; 
										case 1: $frac = "Мэрия LS"; break;
										case 2: $frac = "LSPD"; break;
										case 3: $frac = "SFPD"; break;
										case 4: $frac = "ФБР"; break;
										case 5: $frac = "Больница LS"; break; 
										case 6: $frac = "Автошкола"; break;
										case 7: $frac = "Grove Street"; break;
										case 8: $frac = "The Ballas"; break;
										case 9: $frac = "The Rifa"; break;
										case 10: $frac = "Varios Los Aztecas"; break; 
										case 11: $frac = "Los Santos Vagos"; break;
										case 12: $frac = "Национальная гвардия"; break;
										case 13: $frac = "Национальная гвардия"; break;
										case 14: $frac = "Национальная гвардия"; break;
										case 15: $frac = "La Cosa Nostra"; break;
										case 16: $frac = "Yakuza"; break;
										case 17: $frac = "Русская мафия"; break; 
										case 18: $frac = "LS News"; break;
										case 19: $frac = "SF News"; break;
										case 20: $frac = "LV News"; break;
										case 21: $frac = "LVPD"; break;
										case 22: $frac = "Больница SF"; break;
										case 23: $frac = "Больница LV"; break;
										case 24: $frac = "Мэрия SF"; break;
										case 25: $frac = "Мэрия LV"; break;

									}
									echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">'.$datas[$user['name']].'</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$datas[$user['level']].' LVL</span>
											</div>
											<div class="col-md-4 xss">
												<span class="rodse">'.$frac.'</span>
											</div>
										</div>';
								}
							

							}	else echo '<div class="bg-faka">
											
											<div class="col-md-4 xss">
												<span class="rodse">Данных нет</span>
											</div></div>';
							?>
					</div>
					
					
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	<span class="bg-pt2"></span>
	<br><br>