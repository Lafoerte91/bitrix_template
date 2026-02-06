<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
if($arResult) : ?>
<div class="header-main-menu hidden-xs">
		<nav id="primary-menu">
				<ul class="main-menu text-right">
					<?php foreach($arResult as $item): ?>
						<?php if($item['SELECTED']): ?>
							<li>
									<a href="<?php echo $item['LINK'] ?>" style="color: #009cbb">
									<?php echo $item['TEXT'] ?>
									<?php if($item['subitems']) :?>
										<span class="indicator"><i class="fa fa-angle-down"></i></span>
									<?php endif; ?>
									</a>
									<?php if($item['subitems']) :?>
										<ul class="dropdown">
											<?php foreach($item['subitems'] as $subitem): ?>
												<li>
														<a href="<?= $subitem['LINK'] ?>"><?= $subitem['TEXT'] ?></a>
												</li>
												<?php endforeach; ?>
										</ul>
									<?php endif; ?>
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
