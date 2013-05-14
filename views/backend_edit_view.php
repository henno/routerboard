<div style="margin: 20px">
	<table class="table table-striped table-bordered" style="width: 0">
		<tr>
			<th>Product name: </th>
			<td><input type="text" id="product_name" value="<?= $product_info['name'] ?>"></td>
		</tr>
		<tr>
			<th>Group: </th>
			<td>
				<select>
					<? if (isset($group_names)) : foreach ($group_names as $group_name) : ?>
						<option id="<?= $group_name['group_id'] ?>"><?=$group_name['group_name']?></option>
					<? endforeach; endif ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Code:</th>
			<td><input type="text" id="product_code" value="<?=$product_info['code']?>"></td>
		</tr>
		<tr>
			<th>Description:</th>
			<td><textarea type="text" id="product_description"><?=$product_info['description']?></textarea></td>
		</tr>
		<tr>
			<th>Price:</th>
			<td><input type="text" id="product_price" value="<?=$product_info['price']?>"></td>
		</tr>
		<tr>
			<th>Info:</th>
			<td><textarea type="text" id="product_info"><?=$product_info['info']?></textarea></td>
		</tr>
		<tr>
			<th>Routerboot:</th>
			<td><input type="file" id="product_routerboot" value="<?=$product_info['routerboot']?>"></td>
		</tr>
		<tr>
			<th>Brochure:</th>
			<td><input type="file" id="product_brochure" value="<?=$product_info['brochure']?>"></td>
		</tr>
		<tr>
			<th>Design files PDF:</th>
			<td><input type="file" id="product_design_files_pdf" value="<?=$product_info['design_files_pdf']?>"></td>
		</tr>
		<tr>
			<th>Dimensions:</th>
			<td><input type="file" id="product_dimensions" value="<?=$product_info['dimensions']?>"></td>
		</tr>
		<tr>
			<th>Quick guide:</th>
			<td><input type="file" id="product_quick_guide" value="<?=$product_info['quick_guide']?>"></td>
		</tr>
		<tr>
			<th>High-res image:</th>
			<td><input type="file" id="product_high_res_image" value="<?=$product_info['high_res_image']?>"></td>
		</tr>
		<tr>
			<th>User guide:</th>
			<td><input type="file" id="product_user_guide" value="<?=$product_info['user_guide']?>"></td>
		</tr>
		<tr>
			<th>RB400L differences:</th>
			<td><input type="file" id="product_rb400l_differences" value="<?=$product_info['rb400l_differences']?>"></td>
		</tr>
		<tr>
			<th>Design files DXF-PDF:</th>
			<td><input type="file" id="product_design_files_dxf-pdf" value="<?=$product_info['design_files_dxf-pdf']?>"></td>
		</tr>
		<tr>
			<th>Design files DXF:</th>
			<td><input type="file" id="product_design_files_dxf" value="<?=$product_info['design_files_dxf']?>"></td>
		</tr>
		<tr>
			<th>Antenna pattern:</th>
			<td><input type="file" id="product_antenna_pattern" value="<?=$product_info['antenna_pattern']?>"></td>
		</tr>
		<tr>
			<th>Slideshow pic S:</th>
			<td><input type="file" id="product_slideshow_pic_s" value="<?=$product_info['slideshow_pic_s']?>"></td>
		</tr>
		<tr>
			<th>Slideshow pic M:</th>
			<td><input type="file" id="product_slideshow_pic_m" value="<?=$product_info['slideshow_pic_m']?>"></td>
		</tr>
		<tr>
			<th>Slideshow pic L:</th>
			<td><input type="file" id="product_slideshow_pic_l" value="<?=$product_info['slideshow_pic_l']?>"></td>
		</tr>
	</table>
</div>