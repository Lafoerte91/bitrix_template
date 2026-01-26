<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?php
if($arResult) : ?>
<div class="header-main-menu hidden-xs">
		<nav id="primary-menu">
				<ul class="main-menu text-right">
					<?php foreach($arResult as $item): ?>
						<?php if($item['SELECTED']): ?>
							<li>
									<a href="<?php echo $item['LINK'] ?>" style="color: #009cbb"><?php echo $item['TEXT'] ?></a>
							</li>
							<?php else: ?>
								<li>
									<a href="<?php echo $item['LINK'] ?>"><?php echo $item['TEXT'] ?></a>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
		</nav>
</div>
<?php endif; ?>

<!-- <li>
		<a href="services.html"> Услуги
				<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
		<ul class="dropdown">
				<li>
						<a href="services_landing.html">Лендинг</a>
				</li>
				<li>
						<a href="services_online_shop.html">Интернет-магазин</a>
				</li>
		</ul>
</li> -->