<?php
$ver = rand(100, 999);
ob_start();
session_start();

include '../../config.inc.php';
if (isset($_POST)) {
    foreach ($_POST as $k =>
        $v) {
        ${$k} = $v;
    }

}
if (isset($_GET)) {
    foreach ($_GET as $k => $v) {
        ${$k} = $v;
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=$wwwroot?>/healthmenu/css/healStyleBackEnd.css?v=<?=$ver?>" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>เมนูสุขภาพ</title>

	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>
<body>
	<div id="mainContent">
		<header id="header" class="">
			เมนูสุขภาพ
		</header><!-- /header -->
		<nav>
			<ul id="listGroup">
			</ul>
		</nav>
		<section>
			<div class="formAddMenu showFormAddMenu">
			<form>
				<label>รายการ : <input type="text" name="" value=""></label>
				<div style="clear: both;"></div>
				<div class="labelText">ชนิด</div>
				<div id="modeType">

					<select id="listType">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
				</div>
				<!-- <label>วิธีทำ :  <textarea id="testa" name="" value=""></textarea></label> -->

<div class="labelText">ส่วนผสม</div>
			<!-- Create the editor container -->
<div id="editor"></div>
<div class="labelText">วิธีทำ</div>
<div id="editor2"></div>
<div class="labelText">สรรพคุณ</div>
<div id="editor3"></div>
</form>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
  var quill2 = new Quill('#editor2', {
    theme: 'snow'
  });
  var quill3 = new Quill('#editor3', {
    theme: 'snow'
  });
</script>

<div id="listHeal">
	<ul id="chListHeal">
		<li><input type="checkbox" name="vehicle" value="Bike">I have a bike</li>
	</ul>
</div>
<button id="submitAdd" onclick="submitAdd()">บันทึก</button>
			<div id="ans">ANS</div>
		</div>
		</section>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				var xx = document.getElementById("editor")
				var c = document.getElementById("editor").childNodes;
				console.log(xx)
				$('#submitAdd').click(function(event) {
					// console.log(c[0].innerHTML)
					document.getElementById('ans').innerHTML = c[0].innerHTML
					// var chk = document.getElementsByName('Fruit[0]').value;
					// console.log(chk)
				});
			});
		</script>


	</div>

</body>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		$.ajax({
			url: './dataJson/listGroup.php',
			type: 'GET',
			dataType: 'json',
		})
		.done(function(data) {
			var addTag = ''
			console.log(data);
			for (var i = 0; i < data.length; i++) {
				addTag += "<li onclick='selectGroup("+data[i].id+")'>"+data[i].name+"</li>"
			}
			document.getElementById('listGroup').innerHTML = addTag
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		console.log('Start')
	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.ql-toolbar').addClass('addCl')
		$('.ql-editor').addClass('addQl')
	});
</script>

<script type="text/javascript">
	function selectGroup(id){
		switch (id) {
			case  4:
			jQuery(document).ready(function($) {
				$('.formAddMenu').removeClass('showFormAddMenu')
					});
			document.getElementById('header').innerHTML = 'หมวดผลไม้'
			loadListHeal()
			loadListType()
				break;
			default:
			alert("Id"+id)
				// statements_def
				break;
		}

	}
</script>
<script type="text/javascript">
	function loadListHeal(){
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataJson/listHeal.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				var text = ''
				for (var i = 0; i < data.length; i++) {
					text += "<li>"+"<input type='checkbox' name='Fruit' value='"+data[i].id+"'>"+"<span style='color:red;'>"+data[i].code_heal+"</span>"+"&nbsp;"+data[i].name+"</li>"
				}
				document.getElementById('chListHeal').innerHTML = text;
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function loadListType(){
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataJson/listType.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				var text = ''
				for (var i = 0; i < data.length; i++) {
					text += "<option value='"+data[i].id+"'>"+data[i].name+"</option>}"
				}
				document.getElementById('listType').innerHTML = text;
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function submitAdd(){
		// alert('submit')
		// var xx = document.getElementById("editor")
		var nodeName = document.getElementById("editor").childNodes
		var dataEdit1 = nodeName[0].innerHTML
		var nodeName = document.getElementById("editor2").childNodes
		var dataEdit2 = nodeName[0].innerHTML
		var nodeName = document.getElementById("editor3").childNodes
		var dataEdit3 = nodeName[0].innerHTML
		console.log(dataEdit1)
	}
</script>
<script type="text/javascript">

$(document).ready(function () {
});
</script>
</html>


