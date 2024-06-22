<header class="header-area bg-color1">
   <div class="container">
	  <div class="row">
		 <div class="col-lg-12">
			<div class="header-container d-flex justify-content-between highlight">
			   <div class="header-brand highlight">
				  <a href="/"><img src="/style/images/header-brand-logo.png"/></a>
			   </div>
			   <nav class="highlight">
				  	<ul id="responsive-menu" class="slimmenu">
							<li><a href="/">ГЛАВНАЯ</a></li>
							<li><a href="/forum/">ФОРУМ</a></li>
							<li><a href="/faq">FAQ</a></li>
							<li><a href="/monitor">МОНИТОРИНГ</a></li>
							<!-- <li><a href="/contacts">КОНТАКТЫ</a></li> -->
							<li><a href="/donate">ДОНАТ</a></li>

							<?php
							global $user;
							global $connect;
							$name = $_SESSION['Nick'];
							$sql = "SELECT `{$user['skin']}` FROM `{$user['table']}` WHERE `{$user['name']}` = '$name' LIMIT 1";
							$result = $connect->query($sql);
								
								if($result->num_rows)
								{
									$data = $result->fetch_assoc();
								}	
							?>

							<?php if(isset($_SESSION['Nick'])) :?>
							 <li class="logind">
								<a class="login-vk" href="/profile">
									<img src="https://evolve-rp.ru/img/avatars/<?php echo $data[$user['skin']];?>.png" class="avaster"></img> <?php echo $_SESSION['Nick']?>							<span class="sp-vk">Профиль</span>
								</a>
							</li>
						<?php else: ?>

						<li class="logind">
							<a class="login-vk" href="/login">
								<span class="ic-vk"></span>Войти в Личный кабинет
								<span class="sp-vk">Управление игроком</span>
							</a>
						 </li>
						<?php endif;?>
					</ul>
			   </nav>
			</div>
		 </div>
	  </div>
   </div>
   <script type="text/javascript" src="https://vk.com/js/api/openapi.js?158"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 161091543, {expandTimeout: "10000",tooltipButtonText: "Тех. Поддержка"});
</script>
</header>