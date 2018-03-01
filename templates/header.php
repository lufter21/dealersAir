<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="/css/styles.css">

	<title><?php echo $get->meta['title']; ?></title>

</head>
<body>

<!--WRAPPER/-->
<div class="wrapper">

<!--HEADER/-->
<header class="header">
	<div class="row-col-mid wrap header__wrap">
		<div class="header__logo col-3">
			<div class="middle-img-wrap">
				<a href="index.html"><img src="../../images/dealersair.svg" alt="logo" class="middle-img"></a>
			</div>
		</div>
		<div class="col-9">
			
			<!--<div id="header-mob-menu" class="header__nav-wrap">
				<nav class="header__nav">
					<?php echo $get->getMenu(array(
						'services' => 'Услуги',
						)); ?>
					<ul class="menu">
						<li class="menu__item menu__item_has-children">
							<a href="index.html" class="menu__a">Home</a>
							<button class="menu__arr"></button>
							<ul class="menu__sub-menu">
								<li class="menu__sub-menu-item">
									<a href="#" class="menu__sub-menu-a">Submenu 1</a>
								</li>
								<li class="menu__sub-menu-item">
									<a href="#" class="menu__sub-menu-a">Submenu 2</a>
								</li>
								<li class="menu__sub-menu-item">
									<a href="#" class="menu__sub-menu-a">Submenu 3</a>
								</li>
								<li class="menu__sub-menu-item">
									<a href="#" class="menu__sub-menu-a">Submenu 4</a>
								</li>
							</ul>
						</li>
						<li class="menu__item">
							<a href="grid.html" class="menu__a">Grid</a>
						</li>
						<li class="menu__item">
							<a href="content.html" class="menu__a">Content</a>
						</li>
						<li class="menu__item">
							<a href="form.html" class="menu__a">Form</a>
						</li>
						<li class="menu__item">
							<a href="accordion.html" class="menu__a">Accordeon</a>
						</li>
						<li class="menu__item">
							<a href="popup.html" class="menu__a">Popups</a>
						</li>
						<li class="menu__item">
							<a href="#popup-2" class="js-open-popup menu__a">open popup</a>
						</li>
					</ul>
				</nav>
				<div class="header__user user middle">
					<span class="user__name">
						<a href="#" class="js-toggle user__link" data-target-elements="#user-menu,.user__thumb a">Lufter</a><br>
						<a href="#" class="user__link-logout">Выйти</a>
					</span>
					<span class="user__thumb">
						<a href="#" class="js-toggle" data-target-elements="#user-menu,.user__link"><img src="../../images/avatar.png" alt="avatar" class="cover-img"></a>
					</span>

					<div id="user-menu" class="user__bubble bubble">
						
					</div>

				</div>
			</div>-->
			
		</div>

		<button class="js-toggle toggle header__toggle" data-target-elements="#header-mob-menu,.header"><span></span><span></span><span></span><span></span></button>
	</div>
</header>
<!--/HEADER-->