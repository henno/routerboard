<link rel="stylesheet" href="<?= ASSETS_URL ?>css/printProduct.css" type="text/css" media="print"/>
<link rel="stylesheet" href="<?= ASSETS_URL ?>css/products_view.css" type="text/css"/>

<div class="wrap-spot"></div>
<div class="wrap-body">
	<div class="proddescription container_16">
		<div class="grid_16">
			<div class="grid_5 alpha pictures_list">
				<div id="largeShow"></div>
				<div class="slideshow blinds_slideshow">
					<ul>
						<li style="display: none;"><img src="<?=ASSETS_URL?>img/<?=$more_info['slideshow_pic_m']?>" alt=""></li>
					</ul>
					<div class="blinds_container" onclick=""
					     style="position: relative; display: block; width: 200px; height: 200px; background-image: url(<?=ASSETS_URL?>img/<?=$more_info['slideshow_pic_m']?>); background-color: transparent; background-position: 0px 0px; background-repeat: no-repeat no-repeat;">
						<div class="outer_tile_0_0"
						     style="position: absolute; width: 16.666666666666668px; height: 200px; left: 0px; top: 0px;">
							<div class="tile_0_0"
							     style="position: absolute; width: 16.666666666666668px; height: 200px; left: 0px; top: 0px; background-image: url(<?=ASSETS_URL?>img/<?=$more_info['slideshow_pic_m']?>); background-color: transparent; display: block; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></div>
						</div>
					</div>
				</div>
				<div id="imgthumbs"></div>
				<br/><br/>

				<div class="filesbox" style="z-index:99;"><strong>More info:</strong>
					<ul>
						<li>Brochure : <a
								href="<?= ASSETS_URL ?>pdf/<?= $more_info['routerboot'] ?>"><?=$more_info['routerboot']?></a></li>
						<li>High-res image : <a href="<?= ASSETS_URL ?>img/<?= $more_info['high_res_image'] ?>">[1]</a></li>
						<li>Purchase questions: <a
								href="mailto:sales@mikrotik.com?subject=Question%20about%20<?= $products['name'] ?>">email
								sales</a>
						</li>
						<li><a href="http://wiki.mikrotik.com/wiki/Manual:TOC">RouterOS software manual</a></li>
					</ul>
				</div>
				<br/></div>
			<div class="grid_11 omega"><h1><?=$products['name']?></h1>

				<p><?=str_replace('/', '<br /><br />', $products['description'])?></p></div>
		</div>
	</div>
	<div class="prodtable container_16">
		<div class="grid_16">
			<div class="grid_16"><h2>Product specifications</h2>
				<table class="parameters_table">
					<tbody>

					<tr>
						<th colspan="2" class="alignleft">Details</th>
					</tr>
					<? if (isset($products_spec)) : foreach (array_slice($products_spec, 1) as $key => $product_spec) : ?>
						<? $products_spec[$key] = str_replace('_', ' ', $key) ?>
						<tr>
							<td><?=$products_spec[$key]?></td>
							<td><?=$product_spec?></td>
						</tr>
					<? endforeach; endif ?>
					</tbody>
				</table>
				<a name="tests"></a>

				<div class="related_products_title"></div>
			</div>
		</div>
	</div>
</div>