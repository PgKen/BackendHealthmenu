<?php
$ver = rand(100, 999);
ob_start();
session_start();

include '../config.inc.php';
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
        <link href="<?=$wwwroot?>/css/healStyle.css?v=<?=$ver?>" rel="stylesheet" type="text/css">
        <!-- <link href="<?=$wwwroot?>/css/W_healthStyle.css?v=<?=$ver?>" rel="stylesheet" type="text/css"> -->
            <title>
                เมนูสุขภาพ
            </title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
            </script>
        </link>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    </head>
    <body>
    	<div id="home"><a href="../" title=""><i class="material-icons" style="font-size: 60px;">home</i></a></div>
    	
        <div id="mainContent">
        	<div id="introMenu"><i class="material-icons" style="font-size: 60px;">menu</i>
        		<div class="cancel" onclick="cancelAll();"><i class="material-icons" style="    font-size: 53px; color: #ff0000a3;">cancel</i></div>
        	</div>
        	<div class="subMenuIntro">
        		<ul>
        			<li onclick="loadIntro1()">คำนำเมนูสุขภาพ</li>
        			<li onclick="loadIntro2()">คำแถลงยุทธศาสตร์ </li>
        			<li onclick="loadIntro3()">เอกสารอ้างอิง</li>
        		</ul>
        	</div>
        	<div class="boxShowAllinBoxIntro">
        		<div id="closeBoxAllIntro">X</div>
        		<div id="boxShowAllinBoxIntro_1"></div>
        	</div>
            <div class="menufood">
                <div id="headMenuFood">
                    เมนูสุขภาพ
                </div>
                <ul id="dataTbHeal">
                </ul>
            </div>
            <div class="menuFoodsHeal">
                <div id="headMenuFoodHeal">
                    เมนูสุขภาพเกี่ยวกับโรค
                </div>
                <ul id="dataHeal">
                </ul>
            </div>
            <div class="productVege">
                <div id="headProductVege">
                    
                </div>
                <ul id="dataVe">
                </ul>
            </div>
            <!-- <div class="productHerb">
                <div id="headProductHerb">
                    เมนูสมุนไพรเพื่อสุขภาพ
                </div>
                <ul id="dataVe">
                </ul>
            </div> -->
            <div class="productSubVege">
                <div id="headProductSubVege">
                    เมนู-สูตร
                </div>
                <ul id="dataSubVe">
                </ul>
                <div id="detailVe"></div>
            </div>
            <div id="textMenu">เมนูสุขภาพ กับหมอพรเทพ</div>
            <div id="textHeal">เมนูสุขภาพเกี่ยวกับโรค</div>
            <div id="textVe">เมนูผักผลไม้เพื่อสุขภาพ</div>
            <div id="textHerb">สมุนไพรเพื่อสุขภาพ</div>
            <div id="textFoods">เมนูอาหารสุขภาพ</div>
            <div class="boxDetailMenu">
            	<div id="DetailHeadMenu">เมนูสุขภาพ</div>
            	<div id="DetailBody"></div>
            	<div id="DetailLink"></div>
            	<div id="listHeal"></div>
            </div>

            <div id="boxIntro" onclick="closeAll();">
            	<div class="logoSrimuang">
                <img alt="" src="<?=$wwwroot?>/img/logo_srimaung.png"/>
            </div>
            	<div id="headIntro"></div>
            	<div id="bodyIntro"><div class="inBoxIntro">
            		<p style="text-align: center; font-size: 20px;"><b>คำนำเมนูสุขภาพ</b></p>
            		<p>ตลาดศรีเมืองได้ดำเนินการ “ยุทธศาสตร์อาหารปลอดภัยตลาดศรีเมือง”  มาตั้งแต่ ปี 2540
ด้วยตะหนักถึงความปลอดภัยของผู้บริโภคและเกษตรกร  ที่คุ้นเคยกับการใช้สารเคมีเพื่อให้ผลผลิตสวย ตามความต้องการของผู้บริโภค แต่ผลร้ายคือผลผลิตมีสารตกค้างสูง และก่อให้เกิดโรคภัยต่างๆมากมาย  ใน ปี พ.ศ. 2542 จึงร่วมมือกับหน่วยงานสังกัดกระทรวงการเกษตรฯในจังหวัด  จัดตั้งฝ่ายพัฒนาการผลิตขึ้น   โดยสนับสนุนองค์ความรู้ด้านการผลิตพืชปลอดภัยแก่เกษตรกร   มีการจัดตั้งกลุ่มเกษตรกร เพื่อส่งเสริมการใช้จุลินทรีย์ สมุนไพรในการผลิต  และประสานจัดหางบประมาณสนับสนุนการสร้างโรงผลิตปุ๋ยชีวภาพให้กับกลุ่มเกษตรกร  เพื่อลดต้นทุนการผลิตและได้ผลผลิตปลอดภัยตามมาตรฐาน (GAP) โดยมีวัตถุประสงค์หลักคือ เพื่อส่งเสริมการผลิตผักผลไม้ปลอดภัยของกลุ่มเกษตรกรให้เกิดความยั่งยืน  ให้ผู้บริโภคได้บริโภคอาหารที่สะอาด ปลอดภัย  ปราศจากสารพิษปนเปื้อนและมีสุขภาพดี  </p>

<p>ในปัจจุบัน จะพบว่ามีผู้ป่วยโรคเรื้อรังมาก  ซึ่งส่วนใหญ่เกิดจากการบริโภคอาหารที่ไม่ถูกต้อง ได้แก่ กินอาหารจำพวกแป้งมากเกินไป หรือ กินอาหารที่มีสารปนเปื้อนต่อเนื่อง  โดยรู้เท่าไม่ถึงการณ์  ดังนั้น เพื่อเป็นการส่งเสริมสุขภาพอนามัย และป้องกันโรค   ตลาดศรีเมืองจึงจัดทำ Web site เมนูสุขภาพ ขึ้น  เพื่อสนับสนุนให้ประชาชนหันมาบริโภค ผักผลไม้ ปลอดภัยมากยิ่งขึ้น   โดยผู้บริโภคสามารถเข้าถึงผลผลิตผักผลไม้ ปลอดภัยได้  จากแหล่งของเกษตรกรในโครงการผักปลอดภัยของตลาดศรีเมือง</p>

<p>เมนูสุขภาพนี้    ได้รวบรวมรายการอาหารและเครื่องดื่มที่ปรุงด้วยผัก และผลไม้ จากผู้เชี่ยวชาญด้านสุขภาพ  นักโภชนากร  และผู้มีประสบการณ์ด้านอาหาร  ซึ่งได้มีเผยแพร่ไว้ในสื่อต่างๆ    ด้วยคาดหวังให้ผู้รักษ์สุขภาพ และประชาชนทั่วไป  จะหันมากินผักผลไม้ให้เป็นยา    โดยการสมัครเป็นสมาชิกและเข้ามาศึกษาวิธีการปรุงเมนูแต่ละรายการที่ง่ายต่อการเตรียม  การหาวัตถุดิบ   และสามารถหาแหล่งซื้อได้ง่าย</p>

<p>การรวบรวมเมนูสุขภาพชุดนี้  ยังอยู่ในระหว่างการพัฒนา เพื่อให้ได้ข้อมูลที่สมบูรณ์ เป็นหมวดหมู่ยิ่งขึ้น   หากมีข้อบกพร่องใดๆ ขอท่านผู้รู้ได้โปรดชี้แนะ จักเป็นพระคุณอย่างสูง  ผู้รวบรวมขอน้อมรับด้วยความขอบคุณไว้ ณ โอกาสนี้</p>

<p>คณะผู้จัดทำหวังว่า  เมนูสุขภาพนี้ จะเป็นประโยชน์สำหรับผู้ที่สนใจ   ในการที่จะเลือกซื้ออาหารมารับประทาน  ซึ่งต้องขอขอบคุณผู้ทรงคุณวุฒิทุกท่าน  ที่ได้ทำเมนูเหล่านี้เผยแพร่ไว้</p>

<p>
<span style="float: right;">คณะผู้จัดทำ</span><br/>
<span style="float: right;">โครงการอาหารปลอดภัยตลาดศรีเมือง</span><br/>
<span style="float: right;">พฤษภาคม  2561</span><br/>
</p>
</div></div>
            </div>
            <!-- <div id="clu">
                <img alt="" src="<?=$wwwroot?>/img/clu.png"/>
            </div> -->
            <!-- <div id="clu2">
                <img alt="" src="<?=$wwwroot?>/img/clu.png"/>
            </div> -->
            <div id="menuHeal">
                <img alt="" src="<?=$wwwroot?>/img/foods.png"/>
            </div>
            <div id="menuHeal2">
                <img alt="" src="<?=$wwwroot?>/img/mainBody.png"/>
            </div>
            <div id="herb">
                <img alt="" src="<?=$wwwroot?>/img/herb.png"/>
            </div>
            <div id="spoon">
                <img alt="" src="<?=$wwwroot?>/img/spoon.gif"/>
            </div>
            <div id="veHeal">
                <img alt="" src="<?=$wwwroot?>/img/veHeal.png"/>
            </div>
            <div id="drPron">
                <img alt="" src="<?=$wwwroot?>/img/DrPornthap.png"/>
            </div>
        </div>
    </body>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
    		$('.inBoxIntro').addClass('moveBoxIntro');
    	});
    	setTimeout(function logoShow() {
    		$('.logoSrimuang').addClass('ShowLogo')
    	},1500);
    	setTimeout(function logoShow() {
    		$('.logoSrimuang').removeClass('ShowLogo')
    	},58000);
    </script>
    <!-- เมนู -->
    <script type="text/javascript">
    	$('#introMenu').click(function(event) {
    		$('.subMenuIntro').toggleClass('showSubMenuIntro');
    		closeAll();
    	});
    </script>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
    		$('#closeBoxAllIntro').click(function(event) {
    			$(".boxShowAllinBoxIntro").removeClass('showboxShowAllinBoxIntro');
    		});
    	});
    </script>
    <script type="text/javascript">
    	function loadIntro1(){
    		funcButtonCancel();
    		jQuery(document).ready(function($) {
    			$(".boxShowAllinBoxIntro").addClass('showboxShowAllinBoxIntro');
    			$("#boxShowAllinBoxIntro_1").load("inTro1.html");
    		});
    	}
    	function loadIntro2(){
    		funcButtonCancel();
    		jQuery(document).ready(function($) {
    			$(".boxShowAllinBoxIntro").addClass('showboxShowAllinBoxIntro');
    			$("#boxShowAllinBoxIntro_1").load("inTro2.html");
    		});
    	}
    	function loadIntro3(){
    		funcButtonCancel();
    		jQuery(document).ready(function($) {

    			$(".boxShowAllinBoxIntro").addClass('showboxShowAllinBoxIntro');
    			$("#boxShowAllinBoxIntro_1").load("inTro3.html");
    		});
    	}
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
		$('#menuHeal,#textMenu,#drPron').click(function(event){
			$('.productVege').removeClass('menuTop'); // Close Vege
			$('.boxDetailMenu').removeClass('showBox');// Close Detail
			$('.menufood').addClass('menuTop'); // Open Foods
			$('.menuFoodsHeal').removeClass('menuTop'); // Close Heal
			$('.productSubVege').removeClass('menuTop'); // Close Sub menu
 			document.getElementById('DetailLink').innerHTML = '';
			loadMenuTbHeal();
			funcButtonCancel();
		});
		$('#menuHeal2,#textHeal,#mainFoods').click(function(event) {
			/* Act on the event */
			// console.log('test');
			// alert('sssss');
			$('.productVege').removeClass('menuTop'); // Close Vege
			$('.boxDetailMenu').removeClass('showBox');// Close Detail
			$('.menuFoodsHeal').addClass('menuTop'); // Open Heal
			$('.menufood').removeClass('menuTop'); // Close Foods
			$('.productSubVege').removeClass('menuTop'); // Close Sub menu
			document.getElementById('DetailLink').innerHTML = '';
			loadMenuHeal();
			funcButtonCancel();
		});
		$('#veHeal,#textVe').click(function(event) {
			// console.log('test');
			$('.productVege').addClass('menuTop'); // Open Vege
//
			$('.boxDetailMenu').removeClass('showBox');// Close Detail
			$('.menufood').removeClass('menuTop'); // Close Foods
			$('.menuFoodsHeal').removeClass('menuTop'); // Close Heal
			$('.productSubVege').removeClass('menuTop'); // Close Heal
			// $('.productSubVege').addClass('menuTop'); // Close Sub menu
			document.getElementById('DetailLink').innerHTML = ''; // Close Youtube
			loadProductVe();
			funcButtonCancel();
		});
		$('#textHerb,#herb').click(function(event) {
			// alert('Update DATA');
			$('.productVege').addClass('menuTop'); // Open Vege
			loadProductHerb();
			funcButtonCancel();
		});
		$('#textFoods,#spoon').click(function(event) {
			/* Act on the event */
			console.log('Foods');
			loadFoods();
			funcButtonCancel();
		});
	});
    </script>
    <script type="text/javascript">
        function loadMenuTbHeal(){
		// alert('test');
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataTbHeal.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				console.log("success");
				var textTbHeal = '';
				for (var i = 0; i < data.length; i++) {
					textTbHeal += "<li onclick='selectIndexTbHealDetail("+data[i].id+");'>"+data[i].name_menu+"</li>";
				}
				document.getElementById('dataTbHeal').innerHTML = textTbHeal;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	// Data heal // ประโยชน์
	function loadMenuHeal(){
		// alert('test');
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataHeal.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				console.log("success");
				var textTbHeal = '';
				for (var i = 0; i < data.length; i++) {
					textTbHeal += "<li onclick='selectIndexHeal("+data[i].id+");'>"+data[i].name_heal+"</li>";
				}
				document.getElementById('dataHeal').innerHTML = textTbHeal;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function loadProductVe(){
		// alert('test');
		document.getElementById('headProductVege').innerHTML = 'เมนูผักผลไม้เพื่อสุขภาพ';
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataVe.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				// console.log("success");
				console.log(data);
				var textVe = '';
				for (var i = 0; i < data.length; i++) {
					textVe += "<li onclick='selectIndexVeDetail("+data[i].id+");'>"+data[i].name+"</li>";
				}
				document.getElementById('dataVe').innerHTML = textVe;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function loadProductHerb(){
		// alert('test');
		document.getElementById('headProductVege').innerHTML = 'สมุนไพรเพื่อสุขภาพ';
		document.getElementById('dataVe').innerHTML = '';
		$(".boxShowAllinBoxIntro").removeClass('showboxShowAllinBoxIntro');// Close Intro
		// $('.subMenuIntro').removeClass('showSubMenuIntro');
		$('.menuFoodsHeal').removeClass('menuTop');
		$('.menufood').removeClass('menuTop');
		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		$('.productVege').addClass('menuTop');// Close
		$('.productSubVege').removeClass('menuTop'); // Close Sub menu
		document.getElementById('DetailLink').innerHTML = '';



		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataHerb.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				// console.log("success");
				console.log(data);
				var textVe = '';
				for (var i = 0; i < data.length; i++) {
					textVe += "<li onclick='selectIndexVeDetail("+data[i].id+");'>"+data[i].name+"</li>";
				}
				document.getElementById('dataVe').innerHTML = textVe;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function loadFoods(){
		// alert('test');
		document.getElementById('headProductVege').innerHTML = 'เมนูอาหารเพื่อสุขภาพ';
		document.getElementById('dataVe').innerHTML = '';
		$(".boxShowAllinBoxIntro").removeClass('showboxShowAllinBoxIntro');// Close Intro
		// $('.subMenuIntro').removeClass('showSubMenuIntro');
		$('.menuFoodsHeal').removeClass('menuTop');
		$('.menufood').removeClass('menuTop');
		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		$('.productVege').addClass('menuTop');// Close
		$('.productSubVege').removeClass('menuTop'); // Close Sub menu
		document.getElementById('DetailLink').innerHTML = '';



		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataFoods.php',
				type: 'GET',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				// console.log("success");
				console.log(data);
				var textVe = '';
				for (var i = 0; i < data.length; i++) {
					textVe += "<li onclick='selectDetailFoods("+data[i].id+");'>"+data[i].name_mix+"</li>";
				}
				document.getElementById('dataVe').innerHTML = textVe;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	function selectDetailFoods(id){
		// alert(id);
		
		jQuery(document).ready(function($) {
			$('.productSubVege').addClass('menuTop');
		$.ajax({
			url: './detailFoods.php',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
		})
		.done(function(data) {
			// console.log("OK");
			console.log(data);
			//
			var textHead = '';
			var textHeal = '';
			// textHeal = "<span onclick='selectIndexVeDetail("+data[0].id_main+")'>"+data[0].name_product+"</span>";
			// textHeal += " - ";
			// textHeal += data[0].name_mix;
			
			document.getElementById('dataSubVe').innerHTML = '';
			document.getElementById('headProductSubVege').innerHTML = data[0].name_mix;
			var textMethod = '';
			// textMethod += "<img src='./img/"+data[0].img_mix+"' alt=''>"
			// textMethod += data[0].img_mix;
			textMethod += "<br/>";
			textMethod += "<span>ส่วนผสม</span><br/>"
			textMethod += data[0].detail_mix;
			textMethod += "<br/><br/>"
			textMethod += "<span>วิธีทำ</span><br/>";
			textMethod += data[0].method_mix;
			textMethod += "<br/><br/>";
			textMethod += "<span>สรรพคุณ</span><br/>";
			textMethod += data[0].properties;
			// document.getElementById('detailVe').innerHTML = data[0].method_mix;
			document.getElementById('detailVe').innerHTML = textMethod;
			//

		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});//
	}
	function selectIndexHeal(id){
		// alert(id);
		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		document.getElementById('DetailLink').innerHTML = ''; // Close Link Youtube
		$('.menufood').addClass('menuTop'); // Open Menu
		$('.menuFoodsHeal').removeClass('menuTop'); // Close Menu Heal
		// $('.productSubVege').addClass('menuTop');

		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataHealDetail.php',
				type: 'GET',
				dataType: 'json',
				data: {id: id},
			})
			.done(function(data) {
				var textHealDetail = '';
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					textHealDetail += "<li onclick='selectDetailSubMenu("+data[i].id+");'>"+data[i].name_mix+"</li>"
				}
				document.getElementById('dataTbHeal').innerHTML = textHealDetail;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	// Detail Tbheal ดุราบละเอียดเมนู
	function selectIndexTbHealDetail(id){
		// alert(id);
		jQuery(document).ready(function($) {
			$.ajax({
				url: './dataTbHealDetail.php',
				type: 'GET',
				dataType: 'json',
				data: {id: id},
			})
			.done(function(data) {
				// var textHealDetail = '';
				console.log(data);
				var textLink = '';
				//
				$('.menuFoodsHeal').removeClass('menuTop');
				$('.menufood').removeClass('menuTop');
				//
				$('.boxDetailMenu').addClass('showBox');
				document.getElementById('DetailHeadMenu').innerHTML = data[0].name_menu;
				document.getElementById('DetailBody').innerHTML = data[0].detail;
				// Link Youtube
				textLink += "<iframe id='iframeHealt' src='"+data[0].link+"' allowfullscreen ></iframe>";
				document.getElementById('DetailLink').innerHTML = textLink;
				var nameHeal = '<ul>';
				for (var i = 0; i < data.length; i++) {
					if(data[i].name_heal){
					nameHeal += "<li onclick='selectIndexHeal("+data[i].id_heal+")'>"+data[i].name_heal+"</li>";
					}
				}
		// 		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		// document.getElementById('DetailLink').innerHTML = '';
				// console.log(data.name_heal.length);
				// document.getElementById('listHeal').innerHTML = nameHeal+"</ul>";
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	}
	//
	function selectIndexVeDetail(id){
		// alert(id);
		$.ajax({
			url: './dataSubMenuVe.php',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
		})
		.done(function(data) {
			console.log(data);
			$('.menuFoodsHeal').removeClass('menuTop');
			$('.menufood').removeClass('menuTop');
			$('.boxDetailMenu').removeClass('showBox');// Close Detail
			// $('.productVege').removeClass('menuTop');// Close
			document.getElementById('DetailLink').innerHTML = '';
			// Open
			$('.productSubVege').addClass('menuTop');
			// document.getElementById('headProductSubVege').innerHTML = data[0]
			// headProductSubVege
			var textSub = '';
			for (var i = 0; i < data.length; i++) {
				textSub += "<li onclick='selectDetailSubMenu("+data[i].id+")'>"+data[i].name_mix+"</li>";
			}
			document.getElementById('headProductSubVege').innerHTML = data[0].product_name;
			document.getElementById('detailVe').innerHTML = '';
			document.getElementById('dataSubVe').innerHTML = textSub;
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}
	function selectDetailSubMenu(id){
		jQuery(document).ready(function($) {
			$('.productSubVege').addClass('menuTop');
		});
		// alert(id);
		$.ajax({
			url: './dataDetailSubVe.php',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
		})
		.done(function(data) {
			console.log("success");
			console.log(data);
			var textHead = '';
			var textHeal = '';
		// 	if(data[0].id_main == undefined){
		// 		textHeal = "<span id='mainFoods'>อาหารสุขภาพ</span>";
		// 	}else{
		// 	textHeal = "<span onclick='selectIndexVeDetail("+data[0].id+")'>"+data[0].name_product+"</span>";
		// }
		// 	textHeal += " - ";
			textHeal += data[0].name_mix;
			document.getElementById('headProductSubVege').innerHTML = textHeal;
			document.getElementById('dataSubVe').innerHTML = '';
			var textMethod = '';
			textMethod += "<img src='./img/"+data[0].img_mix+"' alt=''>"
			// textMethod += data[0].img_mix;
			textMethod += "<br/>";
			textMethod += "<span>ส่วนผสม</span><br/>"
			textMethod += data[0].detail_mix;
			textMethod += "<br/><br/>"
			textMethod += "<span>วิธีทำ</span><br/>";
			textMethod += data[0].method_mix;
			textMethod += "<br/><br/>";
			textMethod += "<span>สรรพคุณ</span><br/>";
			textMethod += data[0].properties;
			// document.getElementById('detailVe').innerHTML = data[0].method_mix;
			document.getElementById('detailVe').innerHTML = textMethod;
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}
	//
	function closeAll(){
		$(".boxShowAllinBoxIntro").removeClass('showboxShowAllinBoxIntro');// Close Intro
		$('.menuFoodsHeal').removeClass('menuTop');
		$('.menufood').removeClass('menuTop');
		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		$('.productVege').removeClass('menuTop');// Close
		$('.productSubVege').removeClass('menuTop'); // Close Sub menu
		document.getElementById('DetailLink').innerHTML = '';
	}
	function cancelAll(){
		$(".boxShowAllinBoxIntro").removeClass('showboxShowAllinBoxIntro');// Close Intro
		$('.subMenuIntro').removeClass('showSubMenuIntro');
		$('.menuFoodsHeal').removeClass('menuTop');
		$('.menufood').removeClass('menuTop');
		$('.boxDetailMenu').removeClass('showBox');// Close Detail
		$('.productVege').removeClass('menuTop');// Close
		$('.productSubVege').removeClass('menuTop'); // Close Sub menu
		document.getElementById('DetailLink').innerHTML = '';
	}
    </script>
    <script type="text/javascript">
    	function funcButtonCancel(){
    	jQuery(document).ready(function($) {
    		$('.cancel').addClass('showCancel');
    	});
    }
    </script>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
    		$('.cancel').click(function(event) {
    			$('.cancel').removeClass('showCancel');
    		});
    	});
    </script>
</html>