<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css"/>
<script>
	$(function () {
		$("#tabs").tabs();
	});
</script>
<form method="post" id="product_info">
<center><button style="margin: auto; margin-top: 30px" class="btn btn-primary btn-large" type="button" onclick="submit()">Save</button></center>
<input type="hidden" id="product_id" value="<?=$product_id?>">
<div style="width: 50%; margin: auto; margin-top: 30px" id="tabs">
<ul>
	<li><a href="#tabs-1">Product info</a></li>
	<li><a href="#tabs-2">Product specifications</a></li>
</ul>
<div style="margin: 20px" id="tabs-1">
<table class="table table-bordered table-striped" style="width:0">
<tr>
	<th>
		Product name:
	</th>
	<td>
		<input type="text" id="product_name" value="<?= $product_info['name'] ?>">
	</td>
</tr>
<tr>
	<th>
		Group:
	</th>
	<td>
		<select>
			<? if (isset($group_names)) : foreach ($group_names as $group_name) : ?>
				<option id="<?= $group_name['group_id'] ?>"><?=$group_name['group_name']?></option>
			<? endforeach; endif?>
		</select>
	</td>
</tr>
<tr>
	<th>Code:</th>
	<td>
		<input type="text" id="product_code" value="<?= $product_info['code'] ?>">
	</td>
</tr>
<tr>
	<th>Description:</th>
	<td>
		<textarea id="product_description"><?=$product_info['description']?></textarea>
	</td>
</tr>
<tr>
	<th>Price:</th>
	<td>
		<input type="text" id="product_price" value="<?= $product_info['price'] ?>">
	</td>
</tr>
<tr>
	<th>Info:</th>
	<td>
		<textarea id="product_info"><?=$product_info['info']?></textarea>
	</td>
</tr>
<tr>
	<th>Routerboot:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_routerboard">
				<span class="fileupload-preview"><?=$product_info['routerboot']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Brochure:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_brochure">
				<span class="fileupload-preview"><?=$product_info['brochure']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Design files PDF:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_design_files_pdf">
				<span class="fileupload-preview"><?=$product_info['design_files_pdf']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Dimensions:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_dimensions">
				<span class="fileupload-preview"><?=$product_info['dimensions']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Quick guide:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_quick_guide">
				<span class="fileupload-preview"><?=$product_info['quick_guide']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>High-res image:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_high_res_image">
				<span class="fileupload-preview"><?=$product_info['high_res_image']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>User guide:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_user_guide">
				<span class="fileupload-preview"><?=$product_info['user_guide']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>RB400L differences:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_rb400l_differences">
				<span class="fileupload-preview"><?=$product_info['rb400l_differences']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Design files DXF-PDF:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_design_files_dxf_pdf">
				<span class="fileupload-preview"><?=$product_info['design_files_dxf-pdf']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Design files DXF:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_design_files_pdf">
				<span class="fileupload-preview"><?=$product_info['design_files_dxf']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Antenna pattern:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_antenna_pattern">
				<span class="fileupload-preview"><?=$product_info['antenna_pattern']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Slideshow pic S:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_sliedshow_pic_s">
				<span class="fileupload-preview"><?=$product_info['slideshow_pic_s']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Slideshow pic M:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_sliedshow_pic_m">
				<span class="fileupload-preview"><?=$product_info['slideshow_pic_m']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
<tr>
	<th>Slideshow pic L:</th>
	<td>
		<div class="input-append">
			<div class="uneditable-input span2" id="product_sliedshow_pic_l">
				<span class="fileupload-preview"><?=$product_info['slideshow_pic_l']?></span>
			</div>
     <span class="btn btn-file"><span class="fileupload-new">Select file</span>
      <input type="file"></span>
		</div>
	</td>
</tr>
</table>

</div>
<div style="margin: 20px" id="tabs-2">
	<select id="product_spec_select" onchange="verify_specification()">
		<option disabled="disabled" selected="selected">Select specification...</option>
		<? if (isset($products_spec)) : foreach (array_slice($products_spec, 1) as $key => $product_spec) : ?>
			<? $products_spec[$key] = str_replace('_', ' ', $key) ?>
			<option id="<?= $products_spec[$key] ?>"><?=$products_spec[$key]?></option>
		<? endforeach; endif ?>
	</select>
	<table id="product_spec" class="table table-bordered table-striped" style="width:0">
		<tbody>
		<? if (isset($specs)) : foreach (array_slice($specs, 1) as $key => $spec) : ?>
			<tr id="product_<?= $key ?>">
			<? $specs[$key] = str_replace('_', ' ', $key) ?>
				<th><?=$specs[$key]?></th>
				<td><input type="text" value="<?= $spec ?>"></td>
				<td>
					<a href="#"
					   onclick="if (!confirm('Are you sure?')) return false;
						   remove_specification_ajax('<?= $key ?>', '<?= $specs['Product_id'] ?>');return false
						   "><i class="icon-trash"></i>Remove</a>
				</td>
			</tr>
		<? endforeach; endif ?>
		</tbody>
	</table>
</div>
</div>
<input id="product_spec" type="hidden" value="">
</form>
