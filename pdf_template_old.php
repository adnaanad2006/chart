<style>
body {
	width: 100%;
	height: auto;
	margin: 0 auto;
	text-align: center;
}
#ytd_mea_mcww, #frm5 {
	display: none;
}
.canvasjs-chart-container {
	float: left;
}
#chart-view-HC .canvasjs-chart-container {
	text-align: center !important;
}
#chart-view-HC .canvasjs-chart-canvas {
	position: relative !important;
}
h2 {
	color: #065567;
}
.form {
	display: block;
}
.chart1_img {
	margin-left: 3px;
}
.chart1_img1 {
	margin-left: -47px;
}
.submit_button {
	display: block;
}
.submit_button_no {
	display: none;
}
#back {
	display: none;
}
.hr_dis {
	display: none;
}
.hr_dis_all {
	display: block;
}
.main-content {
	width: 1000px;
	height: auto;
	margin: 0 auto;
	text-align: center;
}
#form_layout {
	width: 300px;
	float: left;
	height: 300px;
}
.form_no {
	display: none;
}
#chart-view {
	width: 500px;
	margin: 0 auto;
	position: relative;
}
.canvasjs-chart-toolbar {
	display: none!important;
}
.canvasjs-chart-credit {
	display: none!important;
}
.top_table td, .middle-table td {
	margin-bottom: 5px;
	float: left;
}
.top_table td:first-child {
	width: 80px;
	text-align: left;
}
.middle-table {
	width: 100%;
}
.middle-table tr {
	width: 100%;
}
.middle-table td {
	width: 10%;
	text-align: left;
}
</style>
<div class="wrapper" style="width:1000px; height:auto; margin:0 auto;">
  <div id="header" style="width:1000px; height:358px; margin:0 auto;position:relative; background-image:url(images/header_img.jpg); background-size:100%; background-repeat:no-repeat; background-position:top center;">
    <div style="position:relative; padding-top: 50px;"> <img src="images/mastercard-logo.png" width="150" height="111" style="" />
      <h1 style="font-size: 25px; margin:10px 0; padding:0; color: rgba(0,0,0,0.77);">MEA WORKFORCE<br />
        DASHBOARD</h1>
      <h5 style="font-size: 17px; margin:0; padding:0; color: rgba(0,0,0,0.77);">as of <?php echo $_POST['date']?></h5>
    </div>
  </div>
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  
  <!-- Section first Start -->
  <div class="main-content" style="width: 1000px;height: auto;margin: 0 auto;text-align: center; clear:both;">
    <h2 style="font-size:33px;">WORKFORCE BY BUSINESS UNIT</h2>
    <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;padding-bottom:20px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div id="chart-view" style="padding-top:10px;">
      <div style="position:relative;width:500px;height:290px; background-image:url(jgraph/jpgraph-3.5.0b1/piecex1.php?HR=<?php echo $_POST['hr']?>&LFI=<?php echo $_POST['lfi']?>&FINANCE=<?php echo $_POST['finance']?>&OT=<?php echo $_POST['ot']?>&GPS=<?php echo $_POST['gps']?>&IMK=<?php echo $_POST['imk']?>&<?php echo time()?>); background-repeat:no-repeat;  background-position: center;" id="chartContainer"><img style="width: 121px;padding-top: 82px;" src="images/img-1.png"></div>
    </div>
    <div style="margin-top: -4%px; padding-top:20px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    
    
    <img  src="images/business-2-img.png" style="position: relative;width: 51px;" /> </div>
  <!-- Section first End --> 
  
  <!-- Section Second Start --> 
  <!--WORKFORCE BY LOCATION -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;">
      <h2 style="font-size:33px;">WORKFORCE BY LOCATION</h2>
    </div>
    <div id="chart-view-2" style="position:relative;width:1000px;height:130px;float:left;">
      <div id="chart-view-2-inner" style="position:relative;width:90%; margin:0 auto;height:100px;float:left;">
      <?php 
	  
	  $country[] = array(
	  					'name' => 'UAE',
	  					'alias' => 'uae',
	  					'bgcolor' => '#FAA21B',
						);
	  $country[] = array(
	  					'name' => 'South Africa',
	  					'alias' => 'sa',
	  					'bgcolor' => '#ED1C24',
						);
	  $country[] = array(
	  					'name' => 'Nigeria',
	  					'alias' => 'nigeria',
	  					'bgcolor' => '#065567',
						);
	  $country[] = array(
	  					'name' => 'Egypt',
	  					'alias' => 'egypt',
	  					'bgcolor' => '#FEC00F',
						);
	  $country[] = array(
	  					'name' => 'Kenya',
	  					'alias' => 'kenya',
	  					'bgcolor' => '#B02D25',
						);
	  $country[] = array(
	  					'name' => 'Qatar',
	  					'alias' => 'qatar',
	  					'bgcolor' => '#307D99',
						);
	  $country[] = array(
	  					'name' => 'Morocco',
	  					'alias' => 'morocco',
	  					'bgcolor' => '#DA1C5C',
						);
	  $country[] = array(
	  					'name' => 'KSA',
	  					'alias' => 'ksa',
	  					'bgcolor' => '#754D29',
						);
	  $country[] = array(
	  					'name' => 'Pakistan',
	  					'alias' => 'pak',
	  					'bgcolor' => '#808285',
						);
	  $country[] = array(
	  					'name' => 'Jordan',
	  					'alias' => 'jordan',
	  					'bgcolor' => '#2BB673',
						);
	  $country[] = array(
	  					'name' => 'Lebanon',
	  					'alias' => 'lebanon',
	  					'bgcolor' => '#92278F',
						);
	$total_country = 0;
	
	foreach($country as $coun) {
		$total_country += $_POST[$coun['alias']];
	}
	
	  ?>
      
        <div style="width:100%">
        	<?php foreach($country as $k => $coun) {
				
				$width = $_POST[$coun['alias']] / $total_country * 100;
				if(($k+1) == count($country)) {
					$width = $_POST[$coun['alias']] / $total_country * 80;
				}
				?>
          <div style="float:left;width:<?php echo $width?>%; background-color:<?php echo $coun['bgcolor'];?>;height: 23px;  padding-top: 18px;text-align: left;font-weight: bold;color: #FFFFFF;"><span style="padding-left:4px;"><?php echo $_POST[$coun['alias']];?></span></div>
          <?php }?>
        </div>
      </div>
      <div style="height:200px;position:relative;width:1000px;float:left; font-size:30px;">
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
          <tr>
            <td align="center"><img src="images/pin_01.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_02.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_03.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_04.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_05.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_06.png" width="42" height="56" alt=""></td>
          </tr>
          <tr>
            <td align="center">UAE <span id="ua_span"><?php echo $_POST['uae'];?></span></td>
            <td align="center">South Africa <span id="sa_span"><?php echo $_POST['sa'];?></span></td>
            <td align="center">Nigeria <span id="ni_span"><?php echo $_POST['nigeria'];?></span></td>
            <td align="center">Egypt <span id="eg_span"><?php echo $_POST['egypt'];?></span></td>
            <td align="center">Kenya <span id="ke_span"><?php echo $_POST['kenya'];?></span></td>
            <td align="center">Qatar <span id="qa_span"><?php echo $_POST['qatar'];?></span></td>
          </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding-top:20px;">
          <tr>
            <td align="center"><img src="images/pin_07.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_08.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_09.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_10.png" width="42" height="56" alt=""></td>
            <td align="center"><img src="images/pin_11.png" width="42" height="56" alt=""></td>
          </tr>
          <tr>
            <td align="center">Morocco <span id="mo_span"><?php echo $_POST['morocco'];?></span></td>
            <td align="center">KSA <span id="ksa_span"><?php echo $_POST['ksa'];?></span></td>
            <td align="center">Pakistan <span id="pak_span"><?php echo $_POST['pak'];?></span></td>
            <td align="center">Jordan <span id="jrdn_span"><?php echo $_POST['jordan'];?></span></td>
            <td align="center">Lebanon <span id="lebn_span"><?php echo $_POST['lebanon'];?></span></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- Section Second End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <!-- Section Third Start --> 
  
  
  
  <!--MEA FRONT/MIDDLE/BACK* HC SUMMARY -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;">
      <h2 style="font-size:33px;">MEA FRONT/MIDDLE/BACK* HC SUMMARY</h2>
    </div>
    <div id="chart-view-HC" style="position:relative;width:1000px;height:300px;float:left;text-align:center;">
      <div id="chart-view-HC-SUMMARY" style="width:1000px;height:auto;float:none;"> <img style="" src="jgraph/jpgraph-3.5.0b1/example22.php?fny=60&mny=40&bny=30&fly=50&mly=30&bly=20&1428234447297"> </div>
    </div>
    <form id="frm3" method="post">
      <table width="90%" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="50"></td>
          <td style="width:100px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#F00;border-style:solid;border-radius:20px;background-color:#ed1c24;color:#ffffff;">2015 (YTD)</td>
          <td align="center" style="width:150px;background-color:transparent;border-collapse:collapse;border:2px solid red;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['front_newYear'];?></td>
          <td align="center" style="width:150px;background-color:transparent;border-collapse:collapse;border:2px solid red;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['middle_newYear'];?></td>
          <td align="center" style="width:150px;background-color:transparent;border-collapse:collapse;border:2px solid red;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['back_newYear'];?></td>
        </tr>
        <tr>
          <td colspan="2" style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#faa21b;border-style:solid;border-radius:20px;background-color:#faa21b;color:#ffffff;">2014 (CLOSING)</td>
          <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #faa21b;border-bottom:2px solid #faa21b;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['front_lastYear'];?></td>
          <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #faa21b;border-bottom:2px solid #faa21b;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['middle_lastYear'];?></td>
          <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #faa21b;border-bottom:2px solid #faa21b;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['back_lastYear'];?></td>
        </tr>
      </table>
    </form>
  </div>
  <!-- Section Third End -->
  
  
  <!-- Section Fourth Start -->
  <div class="main-content" style="width:1000px;float:left;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;">
      <ul>
        <li style="float: left; list-style-type:none; width: 30%; margin-right: 5%">
          <div style="width:100%; margin-bottom: 15px;"> <img src="images/star_fill.png" alt=""><img src="images/star_blank.png" alt=""><img src="images/star_blank.png" alt=""> </div>
          <h2 style="margin-bottom: 5px; font-weight: bold;">FRONT</h2>
          <p>Employees that spend 50% or more in direct contact with customers driving revenue in either selling activities, relationship management roles, delivery or providing routine post sale support.</p>
        </li>
        <li style="float: left; width: 30%; list-style-type:none; margin-right: 5%">
          <div style="width:100%; margin-bottom: 15px;"> <img src="images/star_blank.png" alt=""><img src="images/star_fill.png" alt=""><img src="images/star_blank.png" alt=""> </div>
          <h2 style="margin-bottom: 5px; font-weight: bold;">MIDDLE</h2>
          <p>Employees that spend less than 50 pct of time in direct contact with customers and do not support our core operating infrastructures (Communications, HR, Finance, Law, Marketing, Product Development, Risk Management)</p>
        </li>
        <li style="float: left; list-style-type:none; width: 30%;">
          <div style="width:100%; margin-bottom: 15px;"> <img src="images/star_blank.png" alt=""><img src="images/star_blank.png" alt=""><img src="images/star_fill.png" alt=""> </div>
          <h2 style="margin-bottom: 5px; font-weight: bold;">BACK</h2>
          <p>Employees that spend time supporting core infrastructure(O&T, Business Support)</p>
        </li>
      </ul>
    </div>
    <div> </div>
  </div>
  <!-- Section Fourth End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  
  
  <!-- Section Fifth Start -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;"> <img src="images/diversity-logo.png" style="position:relative;margin-bottom:-2%;margin-top:2%;width: 74px;"/>
      <h2 style="font-size:33px;">DIVERSITY</h2>
      <?php 
	  
	
	$total_female = $_POST['bb_female'] + $_POST['generation_female'] + $_POST['millenial_female'];
	$total_male = $_POST['bb_male'] + $_POST['generation_male'] + $_POST['millenial_male'];
	
	$total_person = $total_female + $total_male;
	
	$bb_female_per = get_percentage($_POST['bb_female'], $total_person);
	$bb_male_per = get_percentage($_POST['bb_male'], $total_person);
	
	$generation_female_per = get_percentage($_POST['generation_female'], $total_person);
	$generation_male_per = get_percentage($_POST['generation_male'], $total_person);
	
	$millenial_female_per = get_percentage($_POST['millenial_female'], $total_person);
	$millenial_male_per = get_percentage($_POST['millenial_male'], $total_person);
	
	$total_female_per = get_percentage($total_female, $total_person);
	$total_male_per = get_percentage($total_male, $total_person);
	
	
	
	$bb_female_per = number_format($bb_female_per, 2) . '%';
	$bb_male_per = number_format($bb_male_per, 2) . '%';
	
	$generation_female_per = number_format($generation_female_per, 2) . '%';
	$generation_male_per = number_format($generation_male_per, 2) . '%';
	
	$millenial_female_per = number_format($millenial_female_per, 2) . '%';
	$millenial_male_per = number_format($millenial_male_per, 2) . '%';
	
	$total_female_per = number_format($total_female_per, 2) . '%';
	$total_male_per = number_format($total_male_per, 2) . '%';
	
	
	function get_percentage($val, $total) {
		return $val / $total * 100;
	}
	
	  
	  ?>
      <form id="frm3" method="post" style="width:95%; text-align:center; padding-left:2.5%">
        <table  width="90%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#065567;border-style:solid;border-radius:20px;background-color:#065567;color:#ffffff;z-index:5;position:relative;">GENERATION</td>
            <td align="center" style="width:200px;background-color:#307d99;border-collapse:collapse;border:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-2%;text-align:right;z-index:4;color:#ffffff;">FEMALE</td>
            <td align="center" style="width:200px;background-color:#065567;border-collapse:collapse;border:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-4%;text-align:right;z-index:3;color:#ffffff;">MALE</td>
            <td align="center" style="width:200px;background-color:#307d99;border-collapse:collapse;border:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-6%;text-align:right;z-index:2;color:#ffffff;">FEMALE %</td>
            <td align="center" style="width:200px;background-color:#065567;border-collapse:collapse;border:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-8%;text-align:right;z-index:1;color:#ffffff;">MALE %</td>
          </tr>
        </table>
        <table  width="90%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#307d99;border-style:solid;border-radius:20px;background-color:#307d99;color:#ffffff;">Baby Boomer</td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-2%;"><?php echo $_POST['bb_female'];?></td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-4%;"><?php echo $_POST['bb_male'];?></td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-6%;"><?php echo $bb_female_per;?></td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-8%;"><?php echo $bb_male_per;?></td>
          </tr>
        </table>
        <table  width="90%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#065567;border-style:solid;border-radius:20px;background-color:#065567;color:#ffffff;">Generation X</td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #065567;border-bottom:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['generation_female'];?></td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #065567;border-bottom:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['generation_male'];?></td>
            <td align="center" style="width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #065567;border-bottom:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $generation_female_per;?></td>
            <td align="center" style="margin-top:-4%;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #065567;border-bottom:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $generation_male_per;?></td>
          </tr>
        </table>
        <table  width="90%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#307d99;border-style:solid;border-radius:20px;background-color:#307d99;color:#ffffff;">Millenial</td>
            <td align="center" style="text-align:center;width:200px;background-color:transparent;border-collapse:collapse;border-left:none;border-right:2px solid #307d99;border-radius:0px 20px 20px 0px;"><?php echo $_POST['millenial_female'];?></td>
            <td align="center" style="text-align:center;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $_POST['millenial_male'];?></td>
            <td align="center" style="text-align:center;width:200px;background-color:transparent;border-collapse:collapse;border-left:none;border-right:2px solid #307d99;border-radius:0px 20px 20px 0px;"><?php echo $millenial_female_per;?></td>
            <td align="center" style="text-align:center;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $millenial_female_per;?></td>
          </tr>
        </table>
        <table  width="90%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" style="width:150px;text-align:center;height:25px;border-collapse:collapse;border:2px;border-color:#ed1c24;border-style:solid;border-radius:20px;background-color:#ed1c24;color:#ffffff;">TOTAL</td>
            <td align="center" id="total_female" style="text-align:right;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #ed1c24;border-bottom:2px solid #ed1c24;border-top:2px solid #ed1c24;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $total_female;?></td>
            <td align="center" id="total_male" style="text-align:right;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #ed1c24;border-bottom:2px solid #ed1c24;border-top:2px solid #ed1c24;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $total_male;?></td>
            <td align="center" id="total_female_perct" style="text-align:right;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #ed1c24;border-bottom:2px solid #ed1c24;border-top:2px solid #ed1c24;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $total_female_per;?></td>
            <td align="center" id="total_male_perct" style="text-align:right;width:200px;background-color:transparent;border-collapse:collapse;border-right:2px solid #ed1c24;border-bottom:2px solid #ed1c24;border-top:2px solid #ed1c24;border-left:none;border-radius:0px 20px 20px 0px;"><?php echo $total_male_per;?></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <!-- Section Fifth Start --> 
  
  <!-- Section Sixth Start -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px; margin: 20px 0; display: inline-block;">
      <table cellpadding="0" cellspacing="0" border="0" width="100%"  style="margin:0; color:#065567;font-weight:normal;font-size:18px;">
        <tr>
          <td align="center"><img src="images/yellow-star.png" /></td>
          <td align="center"><img src="images/yellow-star.png" /></td>
          <td align="center"><img src="images/yellow-star.png" /></td>
        </tr>
        <tr>
          <td align="center">BABY BOOMER</td>
          <td align="center">GENERATION X</td>
          <td align="center">MILLENIAL</td>
        </tr>
        <tr>
          <td align="center">1946 - 1964</td>
          <td align="center">1965 - 1979</td>
          <td align="center">1980 - 2000</td>
        </tr>
      </table>
    </div>
  </div>
  <!-- Section Sixth End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  
  <!-- Section Seven Start --> 
  <!-- DIVERSITY BY ORIGIN -->
  <div class="main-content" style="width: 1000px;height: auto;margin: 0 auto;text-align: center; clear:both;">
    <h2 style="font-size:33px;">DIVERSITY BY ORIGIN</h2>
    <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    <div id="chart-view">
      <div style="position:relative;width:500px;height:291px; background-image:url(jgraph/jpgraph-3.5.0b1/diversity-by-origin.php?ad=<?php echo $_POST['america_diversity']?>&ed=<?php echo $_POST['europe_diversity']?>&md=<?php echo $_POST['mena_diversity']?>&afd=<?php echo $_POST['africa_diversity']?>&apd=<?php echo $_POST['asia_diversity']?>&1428234447297); background-repeat:no-repeat; background-position:center;" id="diversity_origin_chartContainer"> <img src="images/diversity-by-origin.png" style="padding-top: 87px;width: 122px;" /></div>
    </div>
  </div>
  <!-- Section Seven End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    
  <!-- Section Eight Start --> 
  
  <!-- YTD MEA ATTRITION Vs. MCWW -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;">
      <h2 style="font-size:33px;">YTD MEA ATTRITION Vs. MCWW</h2>
      <div id="ytd_container" style="margin-bottom: 20px;  width: 100%;  float: left; min-height:300px;"><img style="" src="jgraph/jpgraph-3.5.0b1/example23.php?vm4=<?php echo $_POST['vol_mea_jan_14']?>&amp;vm5=<?php echo $_POST['vol_mea_jan_15']?>&amp;vcj4=<?php echo $_POST['vol_mcww_jan_14']?>&vcj5=<?php echo $_POST['vol_mcww_jan_15']?>&ivm4=<?php echo $_POST['invol_mea_jan_14']?>&ivm5=<?php echo $_POST['invol_mea_jan_15']?>&ivcj4=<?php echo $_POST['invol_mcww_jan_14']?>&ivcj5=<?php echo $_POST['invol_mcww_jan_15']?>&1428234447298"></div>
      <div style="clear:both;"></div>
      <div class="preview_only"><img src="images/voluntary.png"></div>
    </div>
  </div>
  <!-- Section Eight End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  
  <!-- Section Nine Start --> 
  
  <!-- CAREER MOVES SUMMARY YTD -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;">
      <h2 style="font-size:33px;">CAREER MOVES SUMMARY YTD</h2>
      <div id="carrer_move_container" style="margin-bottom: 20px;  width: 100%;  float: left; min-height:300px;"><img style="" src="jgraph/jpgraph-3.5.0b1/carrier-moves.php?sm5=<?php echo $_POST['smart_move_2015']?>&u5=<?php echo $_POST['upward_2015']?>&t5=<?php echo $_POST['temp_2015']?>&sm4=<?php echo $_POST['smart_move_2014']?>&u4=<?php echo $_POST['upward_2014']?>&t4=<?php echo $_POST['temp_2014']?>&1428234447298"></div>
      <div style="clear:both;"></div>
      <div class="preview_only"><img src="images/year.png"></div>
    </div>
  </div>
  <!-- Section Nine End -->
  
  <div style="margin-top: -4%px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px; padding-bottom:20px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
    
  <!-- Section Tenth Start -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="font-size: 30px;color: #307d99;margin-bottom: 20px;">JAN 2015 MOVES</div>
    <form id="frm10" method="post" style="width:95%; padding-left:2.5%;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td style="width:150px;text-align: left;height:25px;border-collapse:collapse;border:2px;border-color:#065567;border-style:solid;border-radius:20px;background-color:#065567;color:#ffffff;z-index:5;position:relative;padding-left: 2%; ">NAME</td>
            <td style="width: 118px;background-color:#307d99;border-collapse:collapse;border:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left: -2%;text-align: left;z-index:4;padding-right:8%;padding-left: 28px;color: #FFFFFF; ">PREVIOUS UNIT</td>
            <td style="width:84px;background-color:#065567;border-collapse:collapse;border:2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left:-4%;text-align: left;z-index:3;padding-right: 12%;padding-left: 3%;color: #FFFFFF; ">New UNIT</td>
          </tr>
          <?php if(!empty($_POST['move']['name']))
		  foreach($_POST['move']['name'] as $key => $name) {
		  ?>
          
          <tr>
            <td style="width: 146px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:2px solid #307d99;border-radius:20px 20px 20px 20px;position:relative; padding-left:20px;"><?php echo $_POST['move']['name'][$key]?></td>
            <td style="width: 192px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px; padding-left:30px;"><?php echo $_POST['move']['prev_unit'][$key]?></td>
            <td style="width:200px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px; padding-left:25px;"><?php echo $_POST['move']['new_unit'][$key]?></td>
          </tr>
          
          <?php }?>
        </tbody>
      </table>
    </form>
  </div>
  <!-- Section Tenth Start -->
  
  <div style="margin-top: -4%px; padding-top:20px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  <div style="margin-top: -8px;text-align: left;width: 100%;clear: both;margin-left:49.9%;">|</div>
  
  <!-- Section Eleventh Start -->
  <div class="main-content" style="width:1000px;float:none;margin:0 auto; clear:both;">
    <div style="width:1000px;float:left;"> <img src="images/shake-hand.png" style="position:relative;margin-bottom:-2%;margin-top:2%;"/>
      <h2 style="font-size:33px; margin-bottom:5px;">NEW HIRES</h2>
      <div style="font-size: 18px;color: #065567;margin-bottom: 20px;">JAN 2015 MEA NEW HIRES (YTD: <span id="new_hire_count"><?php echo isset($_POST['hire']['name']) ? count($_POST['hire']['name']) : '1';?></span> NEW HIRES)</div>
      <form id="frm11" method="post" style="width:95%; padding-left:2.5%;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
              <td style="width: 157px;text-align: left;height:25px;border-collapse:collapse;border:2px;border-color:#065567;border-style:solid;border-radius:20px;background-color:#065567;color:#ffffff;z-index:5;position:relative;padding-left: 2%;">NAME</td>
              <td style="width: 54px;background-color:#307d99;border-collapse:collapse;border:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left: -2%;text-align: left;z-index:4;padding-right: 5%;padding-left: 28px;color: #FFFFFF;">BU</td>
              <td style="width: 118px;background-color: #065567;border-collapse:collapse;border: 2px solid #065567;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left: -4%;text-align: left;z-index: 3;padding-right:8%;padding-left: 28px;color: #FFFFFF;">POSITION TITLE</td>
              <td style="width: 205px;background-color: #307d99;border-collapse:collapse;border: 2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left: -6%;text-align: left;z-index: 2;padding-right: 3%;padding-left: 3%;color:#ffffff;">PHYSICAL WORK LOCATION</td>
            </tr>
            <?php if(!empty($_POST['hire']['name']))
		  foreach($_POST['hire']['name'] as $key => $name) {
		  ?>
            <tr>
              <td style="width: 112px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:2px solid #307d99;border-radius:20px 20px 20px 20px;position:relative;z-index: 5;padding-left: 20px;;"><?php echo $_POST['hire']['name'][$key]?></td>
              <td style="width: 66px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;position:relative;left: -2%;z-index: 4;padding-left: 30px;"><?php echo $_POST['hire']['bu'][$key]?></td>
              <td style="width: 138px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;padding-left: 30px;"><?php echo $_POST['hire']['pt'][$key]?></td>
              <td style="width: 170px;background-color:transparent;border-collapse:collapse;border-bottom:2px solid #307d99;border-right:2px solid #307d99;border-left:none;border-radius:0px 20px 20px 0px;padding-left: 30px;"><?php echo $_POST['hire']['pwl'][$key]?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <!-- Section Eleventh Start --> 
  
</div>
