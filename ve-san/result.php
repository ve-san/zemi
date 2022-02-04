<?php
$y = $_POST['year'];
$m = $_POST['month'];
$d = $_POST['day'];
$ho = $_POST['hour'];
$mi = $_POST['minuts'];
$se = $_POST['second'];
$nanboku = $_POST['nanboku'];
$ido = $_POST['ido'];
$touzai = $_POST['touzai'];
$keido = $_POST['keido'];

$command="python planet_math.py $y $m $d $ho $mi $se $nanboku $ido $touzai $keido";
exec($command,$output);
?>

<!doctype html>
<html lang="jp">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>惑星位置＿結果</title>
</head>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="result_style.css">

<body>
	<div id="header">
		<div class="inner">
			<p><a href= "top.html" >>top page</a> </p>
			<form action="result.php" method="post">
			西暦
			<select name="year">
				<option value="2009"<?php if ( $_POST['year'] === '2009' ) { echo ' selected'; } ?>>2009</option>
				<option value="2010"<?php if ( $_POST['year'] === '2010' ) { echo ' selected'; } ?>>2010</option>
				<option value="2011"<?php if ( $_POST['year'] === '2011' ) { echo ' selected'; } ?>>2011</option>
				<option value="2012"<?php if ( $_POST['year'] === '2012' ) { echo ' selected'; } ?>>2012</option>
				<option value="2013"<?php if ( $_POST['year'] === '2013' ) { echo ' selected'; } ?>>2013</option>
				<option value="2014"<?php if ( $_POST['year'] === '2014' ) { echo ' selected'; } ?>>2014</option>
				<option value="2015"<?php if ( $_POST['year'] === '2015' ) { echo ' selected'; } ?>>2015</option>
				<option value="2016"<?php if ( $_POST['year'] === '2016' ) { echo ' selected'; } ?>>2016</option>
				<option value="2017"<?php if ( $_POST['year'] === '2017' ) { echo ' selected'; } ?>>2017</option>
				<option value="2018"<?php if ( $_POST['year'] === '2018' ) { echo ' selected'; } ?>>2018</option>
				<option value="2019"<?php if ( $_POST['year'] === '2019' ) { echo ' selected'; } ?>>2019</option>
				<option value="2020"<?php if ( $_POST['year'] === '2020' ) { echo ' selected'; } ?>>2020</option>
				<option value="2021"<?php if ( $_POST['year'] === '2021' ) { echo ' selected'; } ?>>2021</option>
				<option value="2022"<?php if ( $_POST['year'] === '2022' ) { echo ' selected'; } ?>>2022</option>
			</select>
			年

			<select name="month">
				<option value="1"<?php if ( $_POST['month'] === '1' ) { echo ' selected'; } ?>>1</option>
				<option value="2"<?php if ( $_POST['month'] === '2' ) { echo ' selected'; } ?>>2</option>
				<option value="3"<?php if ( $_POST['month'] === '3' ) { echo ' selected'; } ?>>3</option>
				<option value="4"<?php if ( $_POST['month'] === '4' ) { echo ' selected'; } ?>>4</option>
				<option value="5"<?php if ( $_POST['month'] === '5' ) { echo ' selected'; } ?>>5</option>
				<option value="6"<?php if ( $_POST['month'] === '6' ) { echo ' selected'; } ?>>6</option>
				<option value="7"<?php if ( $_POST['month'] === '7' ) { echo ' selected'; } ?>>7</option>
				<option value="8"<?php if ( $_POST['month'] === '8' ) { echo ' selected'; } ?>>8</option>
				<option value="9"<?php if ( $_POST['month'] === '9' ) { echo ' selected'; } ?>>9</option>
				<option value="10"<?php if ( $_POST['month'] === '10' ) { echo ' selected'; } ?>>10</option>
				<option value="11"<?php if ( $_POST['month'] === '11' ) { echo ' selected'; } ?>>11</option>
				<option value="12"<?php if ( $_POST['month'] === '12' ) { echo ' selected'; } ?>>12</option>
			</select>
			月

			<select name="day">
				<option value="1"<?php if ( $_POST['day'] === '1' ) { echo ' selected'; } ?>>1</option>
				<option value="2"<?php if ( $_POST['day'] === '2' ) { echo ' selected'; } ?>>2</option>
				<option value="3"<?php if ( $_POST['day'] === '3' ) { echo ' selected'; } ?>>3</option>
				<option value="4"<?php if ( $_POST['day'] === '4' ) { echo ' selected'; } ?>>4</option>
				<option value="5"<?php if ( $_POST['day'] === '5' ) { echo ' selected'; } ?>>5</option>
				<option value="6"<?php if ( $_POST['day'] === '6' ) { echo ' selected'; } ?>>6</option>
				<option value="7"<?php if ( $_POST['day'] === '7' ) { echo ' selected'; } ?>>7</option>
				<option value="8"<?php if ( $_POST['day'] === '8' ) { echo ' selected'; } ?>>8</option>
				<option value="9"<?php if ( $_POST['day'] === '9' ) { echo ' selected'; } ?>>9</option>
				<option value="10"<?php if ( $_POST['day'] === '10' ) { echo ' selected'; } ?>>10</option>
				<option value="11"<?php if ( $_POST['day'] === '11' ) { echo ' selected'; } ?>>11</option>
				<option value="12"<?php if ( $_POST['day'] === '12' ) { echo ' selected'; } ?>>12</option>
				<option value="13"<?php if ( $_POST['day'] === '13' ) { echo ' selected'; } ?>>13</option>
				<option value="14"<?php if ( $_POST['day'] === '14' ) { echo ' selected'; } ?>>14</option>
				<option value="15"<?php if ( $_POST['day'] === '15' ) { echo ' selected'; } ?>>15</option>
				<option value="16"<?php if ( $_POST['day'] === '16' ) { echo ' selected'; } ?>>16</option>
				<option value="17"<?php if ( $_POST['day'] === '17' ) { echo ' selected'; } ?>>17</option>
				<option value="18"<?php if ( $_POST['day'] === '18' ) { echo ' selected'; } ?>>18</option>
				<option value="19"<?php if ( $_POST['day'] === '19' ) { echo ' selected'; } ?>>19</option>
				<option value="20"<?php if ( $_POST['day'] === '20' ) { echo ' selected'; } ?>>20</option>
				<option value="21"<?php if ( $_POST['day'] === '21' ) { echo ' selected'; } ?>>21</option>
				<option value="22"<?php if ( $_POST['day'] === '22' ) { echo ' selected'; } ?>>22</option>
				<option value="23"<?php if ( $_POST['day'] === '23' ) { echo ' selected'; } ?>>23</option>
				<option value="24"<?php if ( $_POST['day'] === '24' ) { echo ' selected'; } ?>>24</option>
				<option value="25"<?php if ( $_POST['day'] === '25' ) { echo ' selected'; } ?>>25</option>
				<option value="26"<?php if ( $_POST['day'] === '26' ) { echo ' selected'; } ?>>26</option>
				<option value="27"<?php if ( $_POST['day'] === '27' ) { echo ' selected'; } ?>>27</option>
				<option value="28"<?php if ( $_POST['day'] === '28' ) { echo ' selected'; } ?>>28</option>
				<option value="29"<?php if ( $_POST['day'] === '29' ) { echo ' selected'; } ?>>29</option>
				<option value="30"<?php if ( $_POST['day'] === '30' ) { echo ' selected'; } ?>>30</option>
				<option value="31"<?php if ( $_POST['day'] === '31' ) { echo ' selected'; } ?>>31</option>
			</select>
			日　
			
			<select name="hour">
				<option value="0"<?php if ( $_POST['hour'] === '0' ) { echo ' selected'; } ?>>0</option>
				<option value="1"<?php if ( $_POST['hour'] === '1' ) { echo ' selected'; } ?>>1</option>
				<option value="2"<?php if ( $_POST['hour'] === '2' ) { echo ' selected'; } ?>>2</option>
				<option value="3"<?php if ( $_POST['hour'] === '3' ) { echo ' selected'; } ?>>3</option>
				<option value="4"<?php if ( $_POST['hour'] === '4' ) { echo ' selected'; } ?>>4</option>
				<option value="5"<?php if ( $_POST['hour'] === '5' ) { echo ' selected'; } ?>>5</option>
				<option value="6"<?php if ( $_POST['hour'] === '6' ) { echo ' selected'; } ?>>6</option>
				<option value="7"<?php if ( $_POST['hour'] === '7' ) { echo ' selected'; } ?>>7</option>
				<option value="8"<?php if ( $_POST['hour'] === '8' ) { echo ' selected'; } ?>>8</option>
				<option value="9"<?php if ( $_POST['hour'] === '9' ) { echo ' selected'; } ?>>9</option>
				<option value="10"<?php if ( $_POST['hour'] === '10' ) { echo ' selected'; } ?>>10</option>
				<option value="11"<?php if ( $_POST['hour'] === '11' ) { echo ' selected'; } ?>>11</option>
				<option value="12"<?php if ( $_POST['hour'] === '12' ) { echo ' selected'; } ?>>12</option>
				<option value="13"<?php if ( $_POST['hour'] === '13' ) { echo ' selected'; } ?>>13</option>
				<option value="14"<?php if ( $_POST['hour'] === '14' ) { echo ' selected'; } ?>>14</option>
				<option value="15"<?php if ( $_POST['hour'] === '15' ) { echo ' selected'; } ?>>15</option>
				<option value="16"<?php if ( $_POST['hour'] === '16' ) { echo ' selected'; } ?>>16</option>
				<option value="17"<?php if ( $_POST['hour'] === '17' ) { echo ' selected'; } ?>>17</option>
				<option value="18"<?php if ( $_POST['hour'] === '18' ) { echo ' selected'; } ?>>18</option>
				<option value="19"<?php if ( $_POST['hour'] === '19' ) { echo ' selected'; } ?>>19</option>
				<option value="20"<?php if ( $_POST['hour'] === '20' ) { echo ' selected'; } ?>>20</option>
				<option value="21"<?php if ( $_POST['hour'] === '21' ) { echo ' selected'; } ?>>21</option>
				<option value="22"<?php if ( $_POST['hour'] === '22' ) { echo ' selected'; } ?>>22</option>
				<option value="23"<?php if ( $_POST['hour'] === '23' ) { echo ' selected'; } ?>>23</option>
				<option value="24"<?php if ( $_POST['hour'] === '24' ) { echo ' selected'; } ?>>24</option>
			</select>
			時

			<select name="minuts">
				<option value="0"<?php if ( $_POST['minuts'] === '0' ) { echo ' selected'; } ?>>0</option>
				<option value="1"<?php if ( $_POST['minuts'] === '1' ) { echo ' selected'; } ?>>1</option>
				<option value="2"<?php if ( $_POST['minuts'] === '2' ) { echo ' selected'; } ?>>2</option>
				<option value="3"<?php if ( $_POST['minuts'] === '3' ) { echo ' selected'; } ?>>3</option>
				<option value="4"<?php if ( $_POST['minuts'] === '4' ) { echo ' selected'; } ?>>4</option>
				<option value="5"<?php if ( $_POST['minuts'] === '5' ) { echo ' selected'; } ?>>5</option>
				<option value="6"<?php if ( $_POST['minuts'] === '6' ) { echo ' selected'; } ?>>6</option>
				<option value="7"<?php if ( $_POST['minuts'] === '7' ) { echo ' selected'; } ?>>7</option>
				<option value="8"<?php if ( $_POST['minuts'] === '8' ) { echo ' selected'; } ?>>8</option>
				<option value="9"<?php if ( $_POST['minuts'] === '9' ) { echo ' selected'; } ?>>9</option>
				<option value="10"<?php if ( $_POST['minuts'] === '10' ) { echo ' selected'; } ?>>10</option>
				<option value="11"<?php if ( $_POST['minuts'] === '11' ) { echo ' selected'; } ?>>11</option>
				<option value="12"<?php if ( $_POST['minuts'] === '12' ) { echo ' selected'; } ?>>12</option>
				<option value="13"<?php if ( $_POST['minuts'] === '13' ) { echo ' selected'; } ?>>13</option>
				<option value="14"<?php if ( $_POST['minuts'] === '14' ) { echo ' selected'; } ?>>14</option>
				<option value="15"<?php if ( $_POST['minuts'] === '15' ) { echo ' selected'; } ?>>15</option>
				<option value="16"<?php if ( $_POST['minuts'] === '16' ) { echo ' selected'; } ?>>16</option>
				<option value="17"<?php if ( $_POST['minuts'] === '17' ) { echo ' selected'; } ?>>17</option>
				<option value="18"<?php if ( $_POST['minuts'] === '18' ) { echo ' selected'; } ?>>18</option>
				<option value="19"<?php if ( $_POST['minuts'] === '19' ) { echo ' selected'; } ?>>19</option>
				<option value="20"<?php if ( $_POST['minuts'] === '20' ) { echo ' selected'; } ?>>20</option>
				<option value="21"<?php if ( $_POST['minuts'] === '21' ) { echo ' selected'; } ?>>21</option>
				<option value="22"<?php if ( $_POST['minuts'] === '22' ) { echo ' selected'; } ?>>22</option>
				<option value="23"<?php if ( $_POST['minuts'] === '23' ) { echo ' selected'; } ?>>23</option>
				<option value="24"<?php if ( $_POST['minuts'] === '24' ) { echo ' selected'; } ?>>24</option>
				<option value="25"<?php if ( $_POST['minuts'] === '25' ) { echo ' selected'; } ?>>25</option>
				<option value="26"<?php if ( $_POST['minuts'] === '26' ) { echo ' selected'; } ?>>26</option>
				<option value="27"<?php if ( $_POST['minuts'] === '27' ) { echo ' selected'; } ?>>27</option>
				<option value="28"<?php if ( $_POST['minuts'] === '28' ) { echo ' selected'; } ?>>28</option>
				<option value="29"<?php if ( $_POST['minuts'] === '29' ) { echo ' selected'; } ?>>29</option>
				<option value="30"<?php if ( $_POST['minuts'] === '30' ) { echo ' selected'; } ?>>30</option>
				<option value="31"<?php if ( $_POST['minuts'] === '31' ) { echo ' selected'; } ?>>31</option>
				<option value="32"<?php if ( $_POST['minuts'] === '32' ) { echo ' selected'; } ?>>32</option>
				<option value="33"<?php if ( $_POST['minuts'] === '33' ) { echo ' selected'; } ?>>33</option>
				<option value="34"<?php if ( $_POST['minuts'] === '34' ) { echo ' selected'; } ?>>34</option>
				<option value="35"<?php if ( $_POST['minuts'] === '35' ) { echo ' selected'; } ?>>35</option>
				<option value="36"<?php if ( $_POST['minuts'] === '36' ) { echo ' selected'; } ?>>36</option>
				<option value="37"<?php if ( $_POST['minuts'] === '37' ) { echo ' selected'; } ?>>37</option>
				<option value="38"<?php if ( $_POST['minuts'] === '38' ) { echo ' selected'; } ?>>38</option>
				<option value="39"<?php if ( $_POST['minuts'] === '39' ) { echo ' selected'; } ?>>39</option>
				<option value="40"<?php if ( $_POST['minuts'] === '40' ) { echo ' selected'; } ?>>40</option>
				<option value="41"<?php if ( $_POST['minuts'] === '41' ) { echo ' selected'; } ?>>41</option>
				<option value="42"<?php if ( $_POST['minuts'] === '42' ) { echo ' selected'; } ?>>42</option>
				<option value="43"<?php if ( $_POST['minuts'] === '43' ) { echo ' selected'; } ?>>43</option>
				<option value="44"<?php if ( $_POST['minuts'] === '44' ) { echo ' selected'; } ?>>44</option>
				<option value="45"<?php if ( $_POST['minuts'] === '45' ) { echo ' selected'; } ?>>45</option>
				<option value="46"<?php if ( $_POST['minuts'] === '46' ) { echo ' selected'; } ?>>46</option>
				<option value="47"<?php if ( $_POST['minuts'] === '47' ) { echo ' selected'; } ?>>47</option>
				<option value="48"<?php if ( $_POST['minuts'] === '48' ) { echo ' selected'; } ?>>48</option>
				<option value="49"<?php if ( $_POST['minuts'] === '49' ) { echo ' selected'; } ?>>49</option>
				<option value="50"<?php if ( $_POST['minuts'] === '50' ) { echo ' selected'; } ?>>50</option>
				<option value="51"<?php if ( $_POST['minuts'] === '51' ) { echo ' selected'; } ?>>51</option>
				<option value="52"<?php if ( $_POST['minuts'] === '52' ) { echo ' selected'; } ?>>52</option>
				<option value="53"<?php if ( $_POST['minuts'] === '53' ) { echo ' selected'; } ?>>53</option>
				<option value="54"<?php if ( $_POST['minuts'] === '54' ) { echo ' selected'; } ?>>54</option>
				<option value="55"<?php if ( $_POST['minuts'] === '55' ) { echo ' selected'; } ?>>55</option>
				<option value="56"<?php if ( $_POST['minuts'] === '56' ) { echo ' selected'; } ?>>56</option>
				<option value="57"<?php if ( $_POST['minuts'] === '57' ) { echo ' selected'; } ?>>57</option>
				<option value="58"<?php if ( $_POST['minuts'] === '58' ) { echo ' selected'; } ?>>58</option>
				<option value="59"<?php if ( $_POST['minuts'] === '59' ) { echo ' selected'; } ?>>59</option>
			</select>
			分

			<select name="second">
				<option value="0"<?php if ( $_POST['second'] === '0' ) { echo ' selected'; } ?>>0</option>
				<option value="1"<?php if ( $_POST['second'] === '1' ) { echo ' selected'; } ?>>1</option>
				<option value="2"<?php if ( $_POST['second'] === '2' ) { echo ' selected'; } ?>>2</option>
				<option value="3"<?php if ( $_POST['second'] === '3' ) { echo ' selected'; } ?>>3</option>
				<option value="4"<?php if ( $_POST['second'] === '4' ) { echo ' selected'; } ?>>4</option>
				<option value="5"<?php if ( $_POST['second'] === '5' ) { echo ' selected'; } ?>>5</option>
				<option value="6"<?php if ( $_POST['second'] === '6' ) { echo ' selected'; } ?>>6</option>
				<option value="7"<?php if ( $_POST['second'] === '7' ) { echo ' selected'; } ?>>7</option>
				<option value="8"<?php if ( $_POST['second'] === '8' ) { echo ' selected'; } ?>>8</option>
				<option value="9"<?php if ( $_POST['second'] === '9' ) { echo ' selected'; } ?>>9</option>
				<option value="10"<?php if ( $_POST['second'] === '10' ) { echo ' selected'; } ?>>10</option>
				<option value="11"<?php if ( $_POST['second'] === '11' ) { echo ' selected'; } ?>>11</option>
				<option value="12"<?php if ( $_POST['second'] === '12' ) { echo ' selected'; } ?>>12</option>
				<option value="13"<?php if ( $_POST['second'] === '13' ) { echo ' selected'; } ?>>13</option>
				<option value="14"<?php if ( $_POST['second'] === '14' ) { echo ' selected'; } ?>>14</option>
				<option value="15"<?php if ( $_POST['second'] === '15' ) { echo ' selected'; } ?>>15</option>
				<option value="16"<?php if ( $_POST['second'] === '16' ) { echo ' selected'; } ?>>16</option>
				<option value="17"<?php if ( $_POST['second'] === '17' ) { echo ' selected'; } ?>>17</option>
				<option value="18"<?php if ( $_POST['second'] === '18' ) { echo ' selected'; } ?>>18</option>
				<option value="19"<?php if ( $_POST['second'] === '19' ) { echo ' selected'; } ?>>19</option>
				<option value="20"<?php if ( $_POST['second'] === '20' ) { echo ' selected'; } ?>>20</option>
				<option value="21"<?php if ( $_POST['second'] === '21' ) { echo ' selected'; } ?>>21</option>
				<option value="22"<?php if ( $_POST['second'] === '22' ) { echo ' selected'; } ?>>22</option>
				<option value="23"<?php if ( $_POST['second'] === '23' ) { echo ' selected'; } ?>>23</option>
				<option value="24"<?php if ( $_POST['second'] === '24' ) { echo ' selected'; } ?>>24</option>
				<option value="25"<?php if ( $_POST['second'] === '25' ) { echo ' selected'; } ?>>25</option>
				<option value="26"<?php if ( $_POST['second'] === '26' ) { echo ' selected'; } ?>>26</option>
				<option value="27"<?php if ( $_POST['second'] === '27' ) { echo ' selected'; } ?>>27</option>
				<option value="28"<?php if ( $_POST['second'] === '28' ) { echo ' selected'; } ?>>28</option>
				<option value="29"<?php if ( $_POST['second'] === '29' ) { echo ' selected'; } ?>>29</option>
				<option value="30"<?php if ( $_POST['second'] === '30' ) { echo ' selected'; } ?>>30</option>
				<option value="31"<?php if ( $_POST['second'] === '31' ) { echo ' selected'; } ?>>31</option>
				<option value="32"<?php if ( $_POST['second'] === '32' ) { echo ' selected'; } ?>>32</option>
				<option value="33"<?php if ( $_POST['second'] === '33' ) { echo ' selected'; } ?>>33</option>
				<option value="34"<?php if ( $_POST['second'] === '34' ) { echo ' selected'; } ?>>34</option>
				<option value="35"<?php if ( $_POST['second'] === '35' ) { echo ' selected'; } ?>>35</option>
				<option value="36"<?php if ( $_POST['second'] === '36' ) { echo ' selected'; } ?>>36</option>
				<option value="37"<?php if ( $_POST['second'] === '37' ) { echo ' selected'; } ?>>37</option>
				<option value="38"<?php if ( $_POST['second'] === '38' ) { echo ' selected'; } ?>>38</option>
				<option value="39"<?php if ( $_POST['second'] === '39' ) { echo ' selected'; } ?>>39</option>
				<option value="40"<?php if ( $_POST['second'] === '40' ) { echo ' selected'; } ?>>40</option>
				<option value="41"<?php if ( $_POST['second'] === '41' ) { echo ' selected'; } ?>>41</option>
				<option value="42"<?php if ( $_POST['second'] === '42' ) { echo ' selected'; } ?>>42</option>
				<option value="43"<?php if ( $_POST['second'] === '43' ) { echo ' selected'; } ?>>43</option>
				<option value="44"<?php if ( $_POST['second'] === '44' ) { echo ' selected'; } ?>>44</option>
				<option value="45"<?php if ( $_POST['second'] === '45' ) { echo ' selected'; } ?>>45</option>
				<option value="46"<?php if ( $_POST['second'] === '46' ) { echo ' selected'; } ?>>46</option>
				<option value="47"<?php if ( $_POST['second'] === '47' ) { echo ' selected'; } ?>>47</option>
				<option value="48"<?php if ( $_POST['second'] === '48' ) { echo ' selected'; } ?>>48</option>
				<option value="49"<?php if ( $_POST['second'] === '49' ) { echo ' selected'; } ?>>49</option>
				<option value="50"<?php if ( $_POST['second'] === '50' ) { echo ' selected'; } ?>>50</option>
				<option value="51"<?php if ( $_POST['second'] === '51' ) { echo ' selected'; } ?>>51</option>
				<option value="52"<?php if ( $_POST['second'] === '52' ) { echo ' selected'; } ?>>52</option>
				<option value="53"<?php if ( $_POST['second'] === '53' ) { echo ' selected'; } ?>>53</option>
				<option value="54"<?php if ( $_POST['second'] === '54' ) { echo ' selected'; } ?>>54</option>
				<option value="55"<?php if ( $_POST['second'] === '55' ) { echo ' selected'; } ?>>55</option>
				<option value="56"<?php if ( $_POST['second'] === '56' ) { echo ' selected'; } ?>>56</option>
				<option value="57"<?php if ( $_POST['second'] === '57' ) { echo ' selected'; } ?>>57</option>
				<option value="58"<?php if ( $_POST['second'] === '58' ) { echo ' selected'; } ?>>58</option>
				<option value="59"<?php if ( $_POST['second'] === '59' ) { echo ' selected'; } ?>>59</option>
			</select>
			秒
			<input type="submit" value="変更">				
		</div>
	</div>

	<div class="page">
	
		<div class="ziten" id="top">
			<p>
				西暦<span><?php echo $y ?></span>年<span><?php echo $m ?></span>月<span><?php echo $d ?></span>日
			</p>
			<p class="p2">
				<span><?php echo $ho ?></span>時<span><?php echo $mi ?></span>分<span><?php echo $se ?></span>秒 時点
			</p>
		</div>
		<div>
			<table class="table">
				<tr class="tr_color">
					<th></th> <th>視赤経(時/分/秒)</th> <th>視赤緯(度/分/秒) °= a</th> <th>地心距離(au)</th> <th>グリニッジ時角(時/分/秒)</th>
				</tr>
				<tr>
					<th>太陽</th> <td><?php echo $output[3] ?></td> <td><?php echo $output[4] ?></td> <td><?php echo $output[5] ?></td> <td><?php echo $output[7] ?></td>
				</tr>
				<tr>
					<th>金星</th> <td><?php echo $output[11] ?></td> <td><?php echo $output[12] ?></td> <td><?php echo $output[13] ?></td> <td><?php echo $output[15] ?></td>
				</tr>
				<tr>
					<th>火星</th> <td><?php echo $output[19] ?></td> <td><?php echo $output[20] ?></td> <td><?php echo $output[21] ?></td> <td><?php echo $output[23] ?></td>
				</tr>
				<tr>
					<th>木星</th> <td><?php echo $output[27] ?></td> <td><?php echo $output[28] ?></td> <td><?php echo $output[29] ?></td> <td><?php echo $output[31] ?></td>
				</tr>
				<tr>
					<th>土星</th> <td><?php echo $output[35] ?></td> <td><?php echo $output[36] ?></td> <td><?php echo $output[37] ?></td> <td><?php echo $output[39] ?></td>
				</tr>
			</table>
		</div>
		
		<div class="gf1">
			<div>
				<img src='fig_data/plot.png'>
			</div>
			<div class="setumei">
				<div class="setumei_1">
					<div>
						<p>
							右図で示した矢印方向に春分点があると仮定し、赤経・赤緯・
							地心距離を元に、惑星の位置関係を図示しています。
						</p>
					</div>
					<div>
						<img src='img_data/se1.png' class="gazou2">
					</div>
				</div>
				<div class="setumei_2">
					<div>
						<p class="mi"><span>⚠</span>図中の円は軌道の線ではありません<span>⚠</span></p>
						<p>右の図のように太陽系を真上から見た際の惑星の位置となります。
						惑星を認識しやすいように、太陽を中心に各惑星を通る円を描画しました。</p>
					</div>
					<div>
						<img src='img_data/se2.png' class="gazou2">
					</div>
				</div>	
			</div>
		</div>
		
		<div class="gf2">
			<div>
				<img src='fig_data/plot2.png'>
			</div>
			<div class="setumei">
				<div class="mi">
					<p>
						Z軸方向の惑星の位置関係を可視化した図です。<br>
						右図で示した矢印の方向に太陽系を見ています。<br>
						上の図と照らし合わせてみましょう。
					</p>
				</div>
				<div>
					<img src='img_data/se3.png'>
				</div>
			</div>	
		</div>
		
		
		<div class="gf3">
			<iframe src="fig_data/tenkyu.html" width="100%", height="800"></iframe>
			<div class="setumei">
				<div>
					<p>
						グリニッジ時角と赤緯を元に、天球上に太陽と惑星を描画した3Dグラフです。<br>
						<span class="red">赤い実線</span>はロンドンのグリニッジ天文台を通るグリニッジ子午線です。<br>
						<span class="blue">青い実線</span>は日本の明石市（東経135°）を通る子午線です。<br>
						灰色の点と<span class="blue">青い破線</span>は日本の天頂(東経135°、北緯35°)を示しています。
					</p>
					<p class="jmp">
						<a href= "#sousa">3Dグラフの操作方法</a>
					</p>
				</div>
			</div>
		</div>
		
		<div class="gf4">
			<iframe src="fig_data/tihei.html" width="100%", height="800"></iframe>
			<div class="setumei">
				<div>
					<p class='settei'>						
						緯度＝						
						<select name="nanboku" class="sentaku">
							<option value="1"<?php if ( $_POST['nanboku'] === '1' ) { echo ' selected'; } ?>>北緯</option>
							<option value="2"<?php if ( $_POST['nanboku'] === '2' ) { echo ' selected'; } ?>>南緯</option>
						</select>
						
						<select name="ido" class="sentaku2">
							<option value="1"<?php if ( $_POST['ido'] === '1' ) { echo ' selected'; } ?>>1</option>
							<option value="2"<?php if ( $_POST['ido'] === '2' ) { echo ' selected'; } ?>>2</option>
							<option value="3"<?php if ( $_POST['ido'] === '3' ) { echo ' selected'; } ?>>3</option>
							<option value="4"<?php if ( $_POST['ido'] === '4' ) { echo ' selected'; } ?>>4</option>
							<option value="5"<?php if ( $_POST['ido'] === '5' ) { echo ' selected'; } ?>>5</option>
							<option value="6"<?php if ( $_POST['ido'] === '6' ) { echo ' selected'; } ?>>6</option>
							<option value="7"<?php if ( $_POST['ido'] === '7' ) { echo ' selected'; } ?>>7</option>
							<option value="8"<?php if ( $_POST['ido'] === '8' ) { echo ' selected'; } ?>>8</option>
							<option value="9"<?php if ( $_POST['ido'] === '9' ) { echo ' selected'; } ?>>9</option>
							<option value="10"<?php if ( $_POST['ido'] === '10' ) { echo ' selected'; } ?>>10</option>
							<option value="11"<?php if ( $_POST['ido'] === '11' ) { echo ' selected'; } ?>>11</option>
							<option value="12"<?php if ( $_POST['ido'] === '12' ) { echo ' selected'; } ?>>12</option>
							<option value="13"<?php if ( $_POST['ido'] === '13' ) { echo ' selected'; } ?>>13</option>
							<option value="14"<?php if ( $_POST['ido'] === '14' ) { echo ' selected'; } ?>>14</option>
							<option value="15"<?php if ( $_POST['ido'] === '15' ) { echo ' selected'; } ?>>15</option>
							<option value="16"<?php if ( $_POST['ido'] === '16' ) { echo ' selected'; } ?>>16</option>
							<option value="17"<?php if ( $_POST['ido'] === '17' ) { echo ' selected'; } ?>>17</option>
							<option value="18"<?php if ( $_POST['ido'] === '18' ) { echo ' selected'; } ?>>18</option>
							<option value="19"<?php if ( $_POST['ido'] === '19' ) { echo ' selected'; } ?>>19</option>
							<option value="20"<?php if ( $_POST['ido'] === '20' ) { echo ' selected'; } ?>>20</option>
							<option value="21"<?php if ( $_POST['ido'] === '21' ) { echo ' selected'; } ?>>21</option>
							<option value="22"<?php if ( $_POST['ido'] === '22' ) { echo ' selected'; } ?>>22</option>
							<option value="23"<?php if ( $_POST['ido'] === '23' ) { echo ' selected'; } ?>>23</option>
							<option value="24"<?php if ( $_POST['ido'] === '24' ) { echo ' selected'; } ?>>24</option>
							<option value="25"<?php if ( $_POST['ido'] === '25' ) { echo ' selected'; } ?>>25</option>
							<option value="26"<?php if ( $_POST['ido'] === '26' ) { echo ' selected'; } ?>>26</option>
							<option value="27"<?php if ( $_POST['ido'] === '27' ) { echo ' selected'; } ?>>27</option>
							<option value="28"<?php if ( $_POST['ido'] === '28' ) { echo ' selected'; } ?>>28</option>
							<option value="29"<?php if ( $_POST['ido'] === '29' ) { echo ' selected'; } ?>>29</option>
							<option value="30"<?php if ( $_POST['ido'] === '30' ) { echo ' selected'; } ?>>30</option>
							<option value="31"<?php if ( $_POST['ido'] === '31' ) { echo ' selected'; } ?>>31</option>
							<option value="32"<?php if ( $_POST['ido'] === '32' ) { echo ' selected'; } ?>>32</option>
							<option value="33"<?php if ( $_POST['ido'] === '33' ) { echo ' selected'; } ?>>33</option>
							<option value="34"<?php if ( $_POST['ido'] === '34' ) { echo ' selected'; } ?>>34</option>
							<option value="35"<?php if ( $_POST['ido'] === '35' ) { echo ' selected'; } ?>>35</option>
							<option value="36"<?php if ( $_POST['ido'] === '36' ) { echo ' selected'; } ?>>36</option>
							<option value="37"<?php if ( $_POST['ido'] === '37' ) { echo ' selected'; } ?>>37</option>
							<option value="38"<?php if ( $_POST['ido'] === '38' ) { echo ' selected'; } ?>>38</option>
							<option value="39"<?php if ( $_POST['ido'] === '39' ) { echo ' selected'; } ?>>39</option>
							<option value="40"<?php if ( $_POST['ido'] === '40' ) { echo ' selected'; } ?>>40</option>
							<option value="41"<?php if ( $_POST['ido'] === '41' ) { echo ' selected'; } ?>>41</option>
							<option value="42"<?php if ( $_POST['ido'] === '42' ) { echo ' selected'; } ?>>42</option>
							<option value="43"<?php if ( $_POST['ido'] === '43' ) { echo ' selected'; } ?>>43</option>
							<option value="44"<?php if ( $_POST['ido'] === '44' ) { echo ' selected'; } ?>>44</option>
							<option value="45"<?php if ( $_POST['ido'] === '45' ) { echo ' selected'; } ?>>45</option>
							<option value="46"<?php if ( $_POST['ido'] === '46' ) { echo ' selected'; } ?>>46</option>
							<option value="47"<?php if ( $_POST['ido'] === '47' ) { echo ' selected'; } ?>>47</option>
							<option value="48"<?php if ( $_POST['ido'] === '48' ) { echo ' selected'; } ?>>48</option>
							<option value="49"<?php if ( $_POST['ido'] === '49' ) { echo ' selected'; } ?>>49</option>
							<option value="50"<?php if ( $_POST['ido'] === '50' ) { echo ' selected'; } ?>>50</option>
							<option value="51"<?php if ( $_POST['ido'] === '51' ) { echo ' selected'; } ?>>51</option>
							<option value="52"<?php if ( $_POST['ido'] === '52' ) { echo ' selected'; } ?>>52</option>
							<option value="53"<?php if ( $_POST['ido'] === '53' ) { echo ' selected'; } ?>>53</option>
							<option value="54"<?php if ( $_POST['ido'] === '54' ) { echo ' selected'; } ?>>54</option>
							<option value="55"<?php if ( $_POST['ido'] === '55' ) { echo ' selected'; } ?>>55</option>
							<option value="56"<?php if ( $_POST['ido'] === '56' ) { echo ' selected'; } ?>>56</option>
							<option value="57"<?php if ( $_POST['ido'] === '57' ) { echo ' selected'; } ?>>57</option>
							<option value="58"<?php if ( $_POST['ido'] === '58' ) { echo ' selected'; } ?>>58</option>
							<option value="59"<?php if ( $_POST['ido'] === '59' ) { echo ' selected'; } ?>>59</option>
							<option value="60"<?php if ( $_POST['ido'] === '60' ) { echo ' selected'; } ?>>60</option>
							<option value="61"<?php if ( $_POST['ido'] === '61' ) { echo ' selected'; } ?>>61</option>
							<option value="62"<?php if ( $_POST['ido'] === '62' ) { echo ' selected'; } ?>>62</option>
							<option value="63"<?php if ( $_POST['ido'] === '63' ) { echo ' selected'; } ?>>63</option>
							<option value="64"<?php if ( $_POST['ido'] === '64' ) { echo ' selected'; } ?>>64</option>
							<option value="65"<?php if ( $_POST['ido'] === '65' ) { echo ' selected'; } ?>>65</option>
							<option value="66"<?php if ( $_POST['ido'] === '66' ) { echo ' selected'; } ?>>66</option>
							<option value="67"<?php if ( $_POST['ido'] === '67' ) { echo ' selected'; } ?>>67</option>
							<option value="68"<?php if ( $_POST['ido'] === '68' ) { echo ' selected'; } ?>>68</option>
							<option value="69"<?php if ( $_POST['ido'] === '69' ) { echo ' selected'; } ?>>69</option>
							<option value="70"<?php if ( $_POST['ido'] === '70' ) { echo ' selected'; } ?>>70</option>
							<option value="71"<?php if ( $_POST['ido'] === '71' ) { echo ' selected'; } ?>>71</option>
							<option value="72"<?php if ( $_POST['ido'] === '72' ) { echo ' selected'; } ?>>72</option>
							<option value="73"<?php if ( $_POST['ido'] === '73' ) { echo ' selected'; } ?>>73</option>
							<option value="74"<?php if ( $_POST['ido'] === '74' ) { echo ' selected'; } ?>>74</option>
							<option value="75"<?php if ( $_POST['ido'] === '75' ) { echo ' selected'; } ?>>75</option>
							<option value="76"<?php if ( $_POST['ido'] === '76' ) { echo ' selected'; } ?>>76</option>
							<option value="77"<?php if ( $_POST['ido'] === '77' ) { echo ' selected'; } ?>>77</option>
							<option value="78"<?php if ( $_POST['ido'] === '78' ) { echo ' selected'; } ?>>78</option>
							<option value="79"<?php if ( $_POST['ido'] === '79' ) { echo ' selected'; } ?>>79</option>
							<option value="80"<?php if ( $_POST['ido'] === '80' ) { echo ' selected'; } ?>>80</option>
							<option value="81"<?php if ( $_POST['ido'] === '81' ) { echo ' selected'; } ?>>81</option>
							<option value="82"<?php if ( $_POST['ido'] === '82' ) { echo ' selected'; } ?>>82</option>
							<option value="83"<?php if ( $_POST['ido'] === '83' ) { echo ' selected'; } ?>>83</option>
							<option value="84"<?php if ( $_POST['ido'] === '84' ) { echo ' selected'; } ?>>84</option>
							<option value="85"<?php if ( $_POST['ido'] === '85' ) { echo ' selected'; } ?>>85</option>
							<option value="86"<?php if ( $_POST['ido'] === '86' ) { echo ' selected'; } ?>>86</option>
							<option value="87"<?php if ( $_POST['ido'] === '87' ) { echo ' selected'; } ?>>87</option>
							<option value="88"<?php if ( $_POST['ido'] === '88' ) { echo ' selected'; } ?>>88</option>
							<option value="89"<?php if ( $_POST['ido'] === '89' ) { echo ' selected'; } ?>>89</option>
							<option value="90"<?php if ( $_POST['ido'] === '90' ) { echo ' selected'; } ?>>90</option>							
						</select>°　　
						経度＝	
						
						<select name="touzai" class="sentaku">
							<option value="1"<?php if ( $_POST['touzai'] === '1' ) { echo ' selected'; } ?>>東経</option>
							<option value="2"<?php if ( $_POST['touzai'] === '2' ) { echo ' selected'; } ?>>西経</option>
						</select>
						
						<select name="keido" class="sentaku2">
							<option value="1"<?php if ( $_POST['keido'] === '1' ) { echo ' selected'; } ?>>1</option>
							<option value="2"<?php if ( $_POST['keido'] === '2' ) { echo ' selected'; } ?>>2</option>
							<option value="3"<?php if ( $_POST['keido'] === '3' ) { echo ' selected'; } ?>>3</option>
							<option value="4"<?php if ( $_POST['keido'] === '4' ) { echo ' selected'; } ?>>4</option>
							<option value="5"<?php if ( $_POST['keido'] === '5' ) { echo ' selected'; } ?>>5</option>
							<option value="6"<?php if ( $_POST['keido'] === '6' ) { echo ' selected'; } ?>>6</option>
							<option value="7"<?php if ( $_POST['keido'] === '7' ) { echo ' selected'; } ?>>7</option>
							<option value="8"<?php if ( $_POST['keido'] === '8' ) { echo ' selected'; } ?>>8</option>
							<option value="9"<?php if ( $_POST['keido'] === '9' ) { echo ' selected'; } ?>>9</option>
							<option value="10"<?php if ( $_POST['keido'] === '10' ) { echo ' selected'; } ?>>10</option>
							<option value="11"<?php if ( $_POST['keido'] === '11' ) { echo ' selected'; } ?>>11</option>
							<option value="12"<?php if ( $_POST['keido'] === '12' ) { echo ' selected'; } ?>>12</option>
							<option value="13"<?php if ( $_POST['keido'] === '13' ) { echo ' selected'; } ?>>13</option>
							<option value="14"<?php if ( $_POST['keido'] === '14' ) { echo ' selected'; } ?>>14</option>
							<option value="15"<?php if ( $_POST['keido'] === '15' ) { echo ' selected'; } ?>>15</option>
							<option value="16"<?php if ( $_POST['keido'] === '16' ) { echo ' selected'; } ?>>16</option>
							<option value="17"<?php if ( $_POST['keido'] === '17' ) { echo ' selected'; } ?>>17</option>
							<option value="18"<?php if ( $_POST['keido'] === '18' ) { echo ' selected'; } ?>>18</option>
							<option value="19"<?php if ( $_POST['keido'] === '19' ) { echo ' selected'; } ?>>19</option>
							<option value="20"<?php if ( $_POST['keido'] === '20' ) { echo ' selected'; } ?>>20</option>
							<option value="21"<?php if ( $_POST['keido'] === '21' ) { echo ' selected'; } ?>>21</option>
							<option value="22"<?php if ( $_POST['keido'] === '22' ) { echo ' selected'; } ?>>22</option>
							<option value="23"<?php if ( $_POST['keido'] === '23' ) { echo ' selected'; } ?>>23</option>
							<option value="24"<?php if ( $_POST['keido'] === '24' ) { echo ' selected'; } ?>>24</option>
							<option value="25"<?php if ( $_POST['keido'] === '25' ) { echo ' selected'; } ?>>25</option>
							<option value="26"<?php if ( $_POST['keido'] === '26' ) { echo ' selected'; } ?>>26</option>
							<option value="27"<?php if ( $_POST['keido'] === '27' ) { echo ' selected'; } ?>>27</option>
							<option value="28"<?php if ( $_POST['keido'] === '28' ) { echo ' selected'; } ?>>28</option>
							<option value="29"<?php if ( $_POST['keido'] === '29' ) { echo ' selected'; } ?>>29</option>
							<option value="30"<?php if ( $_POST['keido'] === '30' ) { echo ' selected'; } ?>>30</option>
							<option value="31"<?php if ( $_POST['keido'] === '31' ) { echo ' selected'; } ?>>31</option>
							<option value="32"<?php if ( $_POST['keido'] === '32' ) { echo ' selected'; } ?>>32</option>
							<option value="33"<?php if ( $_POST['keido'] === '33' ) { echo ' selected'; } ?>>33</option>
							<option value="34"<?php if ( $_POST['keido'] === '34' ) { echo ' selected'; } ?>>34</option>
							<option value="35"<?php if ( $_POST['keido'] === '35' ) { echo ' selected'; } ?>>35</option>
							<option value="36"<?php if ( $_POST['keido'] === '36' ) { echo ' selected'; } ?>>36</option>
							<option value="37"<?php if ( $_POST['keido'] === '37' ) { echo ' selected'; } ?>>37</option>
							<option value="38"<?php if ( $_POST['keido'] === '38' ) { echo ' selected'; } ?>>38</option>
							<option value="39"<?php if ( $_POST['keido'] === '39' ) { echo ' selected'; } ?>>39</option>
							<option value="40"<?php if ( $_POST['keido'] === '40' ) { echo ' selected'; } ?>>40</option>
							<option value="41"<?php if ( $_POST['keido'] === '41' ) { echo ' selected'; } ?>>41</option>
							<option value="42"<?php if ( $_POST['keido'] === '42' ) { echo ' selected'; } ?>>42</option>
							<option value="43"<?php if ( $_POST['keido'] === '43' ) { echo ' selected'; } ?>>43</option>
							<option value="44"<?php if ( $_POST['keido'] === '44' ) { echo ' selected'; } ?>>44</option>
							<option value="45"<?php if ( $_POST['keido'] === '45' ) { echo ' selected'; } ?>>45</option>
							<option value="46"<?php if ( $_POST['keido'] === '46' ) { echo ' selected'; } ?>>46</option>
							<option value="47"<?php if ( $_POST['keido'] === '47' ) { echo ' selected'; } ?>>47</option>
							<option value="48"<?php if ( $_POST['keido'] === '48' ) { echo ' selected'; } ?>>48</option>
							<option value="49"<?php if ( $_POST['keido'] === '49' ) { echo ' selected'; } ?>>49</option>
							<option value="50"<?php if ( $_POST['keido'] === '50' ) { echo ' selected'; } ?>>50</option>
							<option value="51"<?php if ( $_POST['keido'] === '51' ) { echo ' selected'; } ?>>51</option>
							<option value="52"<?php if ( $_POST['keido'] === '52' ) { echo ' selected'; } ?>>52</option>
							<option value="53"<?php if ( $_POST['keido'] === '53' ) { echo ' selected'; } ?>>53</option>
							<option value="54"<?php if ( $_POST['keido'] === '54' ) { echo ' selected'; } ?>>54</option>
							<option value="55"<?php if ( $_POST['keido'] === '55' ) { echo ' selected'; } ?>>55</option>
							<option value="56"<?php if ( $_POST['keido'] === '56' ) { echo ' selected'; } ?>>56</option>
							<option value="57"<?php if ( $_POST['keido'] === '57' ) { echo ' selected'; } ?>>57</option>
							<option value="58"<?php if ( $_POST['keido'] === '58' ) { echo ' selected'; } ?>>58</option>
							<option value="59"<?php if ( $_POST['keido'] === '59' ) { echo ' selected'; } ?>>59</option>
							<option value="60"<?php if ( $_POST['keido'] === '60' ) { echo ' selected'; } ?>>60</option>
							<option value="61"<?php if ( $_POST['keido'] === '61' ) { echo ' selected'; } ?>>61</option>
							<option value="62"<?php if ( $_POST['keido'] === '62' ) { echo ' selected'; } ?>>62</option>
							<option value="63"<?php if ( $_POST['keido'] === '63' ) { echo ' selected'; } ?>>63</option>
							<option value="64"<?php if ( $_POST['keido'] === '64' ) { echo ' selected'; } ?>>64</option>
							<option value="65"<?php if ( $_POST['keido'] === '65' ) { echo ' selected'; } ?>>65</option>
							<option value="66"<?php if ( $_POST['keido'] === '66' ) { echo ' selected'; } ?>>66</option>
							<option value="67"<?php if ( $_POST['keido'] === '67' ) { echo ' selected'; } ?>>67</option>
							<option value="68"<?php if ( $_POST['keido'] === '68' ) { echo ' selected'; } ?>>68</option>
							<option value="69"<?php if ( $_POST['keido'] === '69' ) { echo ' selected'; } ?>>69</option>
							<option value="70"<?php if ( $_POST['keido'] === '70' ) { echo ' selected'; } ?>>70</option>
							<option value="71"<?php if ( $_POST['keido'] === '71' ) { echo ' selected'; } ?>>71</option>
							<option value="72"<?php if ( $_POST['keido'] === '72' ) { echo ' selected'; } ?>>72</option>
							<option value="73"<?php if ( $_POST['keido'] === '73' ) { echo ' selected'; } ?>>73</option>
							<option value="74"<?php if ( $_POST['keido'] === '74' ) { echo ' selected'; } ?>>74</option>
							<option value="75"<?php if ( $_POST['keido'] === '75' ) { echo ' selected'; } ?>>75</option>
							<option value="76"<?php if ( $_POST['keido'] === '76' ) { echo ' selected'; } ?>>76</option>
							<option value="77"<?php if ( $_POST['keido'] === '77' ) { echo ' selected'; } ?>>77</option>
							<option value="78"<?php if ( $_POST['keido'] === '78' ) { echo ' selected'; } ?>>78</option>
							<option value="79"<?php if ( $_POST['keido'] === '79' ) { echo ' selected'; } ?>>79</option>
							<option value="80"<?php if ( $_POST['keido'] === '80' ) { echo ' selected'; } ?>>80</option>
							<option value="81"<?php if ( $_POST['keido'] === '81' ) { echo ' selected'; } ?>>81</option>
							<option value="82"<?php if ( $_POST['keido'] === '82' ) { echo ' selected'; } ?>>82</option>
							<option value="83"<?php if ( $_POST['keido'] === '83' ) { echo ' selected'; } ?>>83</option>
							<option value="84"<?php if ( $_POST['keido'] === '84' ) { echo ' selected'; } ?>>84</option>
							<option value="85"<?php if ( $_POST['keido'] === '85' ) { echo ' selected'; } ?>>85</option>
							<option value="86"<?php if ( $_POST['keido'] === '86' ) { echo ' selected'; } ?>>86</option>
							<option value="87"<?php if ( $_POST['keido'] === '87' ) { echo ' selected'; } ?>>87</option>
							<option value="88"<?php if ( $_POST['keido'] === '88' ) { echo ' selected'; } ?>>88</option>
							<option value="89"<?php if ( $_POST['keido'] === '89' ) { echo ' selected'; } ?>>89</option>
							<option value="90"<?php if ( $_POST['keido'] === '90' ) { echo ' selected'; } ?>>90</option>
							<option value="91"<?php if ( $_POST['keido'] === '91' ) { echo ' selected'; } ?>>91</option>
							<option value="92"<?php if ( $_POST['keido'] === '92' ) { echo ' selected'; } ?>>92</option>
							<option value="93"<?php if ( $_POST['keido'] === '93' ) { echo ' selected'; } ?>>93</option>
							<option value="94"<?php if ( $_POST['keido'] === '94' ) { echo ' selected'; } ?>>94</option>
							<option value="95"<?php if ( $_POST['keido'] === '95' ) { echo ' selected'; } ?>>95</option>
							<option value="96"<?php if ( $_POST['keido'] === '96' ) { echo ' selected'; } ?>>96</option>
							<option value="97"<?php if ( $_POST['keido'] === '97' ) { echo ' selected'; } ?>>97</option>
							<option value="98"<?php if ( $_POST['keido'] === '98' ) { echo ' selected'; } ?>>98</option>
							<option value="99"<?php if ( $_POST['keido'] === '99' ) { echo ' selected'; } ?>>99</option>
							<option value="100"<?php if ( $_POST['keido'] === '100' ) { echo ' selected'; } ?>>100</option>
							<option value="101"<?php if ( $_POST['keido'] === '101' ) { echo ' selected'; } ?>>101</option>
							<option value="102"<?php if ( $_POST['keido'] === '102' ) { echo ' selected'; } ?>>102</option>
							<option value="103"<?php if ( $_POST['keido'] === '103' ) { echo ' selected'; } ?>>103</option>
							<option value="104"<?php if ( $_POST['keido'] === '104' ) { echo ' selected'; } ?>>104</option>
							<option value="105"<?php if ( $_POST['keido'] === '105' ) { echo ' selected'; } ?>>105</option>
							<option value="106"<?php if ( $_POST['keido'] === '106' ) { echo ' selected'; } ?>>106</option>
							<option value="107"<?php if ( $_POST['keido'] === '107' ) { echo ' selected'; } ?>>107</option>
							<option value="108"<?php if ( $_POST['keido'] === '108' ) { echo ' selected'; } ?>>108</option>
							<option value="109"<?php if ( $_POST['keido'] === '109' ) { echo ' selected'; } ?>>109</option>
							<option value="110"<?php if ( $_POST['keido'] === '110' ) { echo ' selected'; } ?>>110</option>
							<option value="111"<?php if ( $_POST['keido'] === '111' ) { echo ' selected'; } ?>>111</option>
							<option value="112"<?php if ( $_POST['keido'] === '112' ) { echo ' selected'; } ?>>112</option>
							<option value="113"<?php if ( $_POST['keido'] === '113' ) { echo ' selected'; } ?>>113</option>
							<option value="114"<?php if ( $_POST['keido'] === '114' ) { echo ' selected'; } ?>>114</option>
							<option value="115"<?php if ( $_POST['keido'] === '115' ) { echo ' selected'; } ?>>115</option>
							<option value="116"<?php if ( $_POST['keido'] === '116' ) { echo ' selected'; } ?>>116</option>
							<option value="117"<?php if ( $_POST['keido'] === '117' ) { echo ' selected'; } ?>>117</option>
							<option value="118"<?php if ( $_POST['keido'] === '118' ) { echo ' selected'; } ?>>118</option>
							<option value="119"<?php if ( $_POST['keido'] === '119' ) { echo ' selected'; } ?>>119</option>
							<option value="120"<?php if ( $_POST['keido'] === '120' ) { echo ' selected'; } ?>>120</option>
							<option value="121"<?php if ( $_POST['keido'] === '121' ) { echo ' selected'; } ?>>121</option>
							<option value="122"<?php if ( $_POST['keido'] === '122' ) { echo ' selected'; } ?>>122</option>
							<option value="123"<?php if ( $_POST['keido'] === '123' ) { echo ' selected'; } ?>>123</option>
							<option value="124"<?php if ( $_POST['keido'] === '124' ) { echo ' selected'; } ?>>124</option>
							<option value="125"<?php if ( $_POST['keido'] === '125' ) { echo ' selected'; } ?>>125</option>
							<option value="126"<?php if ( $_POST['keido'] === '126' ) { echo ' selected'; } ?>>126</option>
							<option value="127"<?php if ( $_POST['keido'] === '127' ) { echo ' selected'; } ?>>127</option>
							<option value="128"<?php if ( $_POST['keido'] === '128' ) { echo ' selected'; } ?>>128</option>
							<option value="129"<?php if ( $_POST['keido'] === '129' ) { echo ' selected'; } ?>>129</option>
							<option value="130"<?php if ( $_POST['keido'] === '130' ) { echo ' selected'; } ?>>130</option>
							<option value="131"<?php if ( $_POST['keido'] === '131' ) { echo ' selected'; } ?>>131</option>
							<option value="132"<?php if ( $_POST['keido'] === '132' ) { echo ' selected'; } ?>>132</option>
							<option value="133"<?php if ( $_POST['keido'] === '133' ) { echo ' selected'; } ?>>133</option>
							<option value="134"<?php if ( $_POST['keido'] === '134' ) { echo ' selected'; } ?>>134</option>
							<option value="135"<?php if ( $_POST['keido'] === '135' ) { echo ' selected'; } ?>>135</option>
							<option value="136"<?php if ( $_POST['keido'] === '136' ) { echo ' selected'; } ?>>136</option>
							<option value="137"<?php if ( $_POST['keido'] === '137' ) { echo ' selected'; } ?>>137</option>
							<option value="138"<?php if ( $_POST['keido'] === '138' ) { echo ' selected'; } ?>>138</option>
							<option value="139"<?php if ( $_POST['keido'] === '139' ) { echo ' selected'; } ?>>139</option>
							<option value="140"<?php if ( $_POST['keido'] === '140' ) { echo ' selected'; } ?>>140</option>
							<option value="141"<?php if ( $_POST['keido'] === '141' ) { echo ' selected'; } ?>>142</option>
							<option value="142"<?php if ( $_POST['keido'] === '142' ) { echo ' selected'; } ?>>142</option>
							<option value="143"<?php if ( $_POST['keido'] === '143' ) { echo ' selected'; } ?>>143</option>
							<option value="144"<?php if ( $_POST['keido'] === '144' ) { echo ' selected'; } ?>>144</option>
							<option value="145"<?php if ( $_POST['keido'] === '145' ) { echo ' selected'; } ?>>145</option>
							<option value="146"<?php if ( $_POST['keido'] === '146' ) { echo ' selected'; } ?>>146</option>
							<option value="147"<?php if ( $_POST['keido'] === '147' ) { echo ' selected'; } ?>>147</option>
							<option value="148"<?php if ( $_POST['keido'] === '148' ) { echo ' selected'; } ?>>148</option>
							<option value="149"<?php if ( $_POST['keido'] === '149' ) { echo ' selected'; } ?>>149</option>
							<option value="150"<?php if ( $_POST['keido'] === '150' ) { echo ' selected'; } ?>>150</option>							
							<option value="151"<?php if ( $_POST['keido'] === '151' ) { echo ' selected'; } ?>>151</option>
							<option value="152"<?php if ( $_POST['keido'] === '152' ) { echo ' selected'; } ?>>152</option>
							<option value="153"<?php if ( $_POST['keido'] === '153' ) { echo ' selected'; } ?>>153</option>
							<option value="154"<?php if ( $_POST['keido'] === '154' ) { echo ' selected'; } ?>>154</option>
							<option value="155"<?php if ( $_POST['keido'] === '155' ) { echo ' selected'; } ?>>155</option>
							<option value="156"<?php if ( $_POST['keido'] === '156' ) { echo ' selected'; } ?>>156</option>
							<option value="157"<?php if ( $_POST['keido'] === '157' ) { echo ' selected'; } ?>>157</option>
							<option value="158"<?php if ( $_POST['keido'] === '158' ) { echo ' selected'; } ?>>158</option>
							<option value="159"<?php if ( $_POST['keido'] === '159' ) { echo ' selected'; } ?>>159</option>				
							<option value="160"<?php if ( $_POST['keido'] === '160' ) { echo ' selected'; } ?>>160</option>
							<option value="161"<?php if ( $_POST['keido'] === '161' ) { echo ' selected'; } ?>>161</option>
							<option value="162"<?php if ( $_POST['keido'] === '162' ) { echo ' selected'; } ?>>162</option>
							<option value="163"<?php if ( $_POST['keido'] === '163' ) { echo ' selected'; } ?>>163</option>
							<option value="164"<?php if ( $_POST['keido'] === '164' ) { echo ' selected'; } ?>>164</option>
							<option value="165"<?php if ( $_POST['keido'] === '165' ) { echo ' selected'; } ?>>165</option>
							<option value="166"<?php if ( $_POST['keido'] === '166' ) { echo ' selected'; } ?>>166</option>
							<option value="167"<?php if ( $_POST['keido'] === '167' ) { echo ' selected'; } ?>>167</option>
							<option value="168"<?php if ( $_POST['keido'] === '168' ) { echo ' selected'; } ?>>168</option>
							<option value="169"<?php if ( $_POST['keido'] === '169' ) { echo ' selected'; } ?>>169</option>
							<option value="170"<?php if ( $_POST['keido'] === '170' ) { echo ' selected'; } ?>>170</option>
							<option value="171"<?php if ( $_POST['keido'] === '171' ) { echo ' selected'; } ?>>171</option>
							<option value="172"<?php if ( $_POST['keido'] === '172' ) { echo ' selected'; } ?>>172</option>
							<option value="173"<?php if ( $_POST['keido'] === '173' ) { echo ' selected'; } ?>>173</option>
							<option value="174"<?php if ( $_POST['keido'] === '174' ) { echo ' selected'; } ?>>174</option>
							<option value="175"<?php if ( $_POST['keido'] === '175' ) { echo ' selected'; } ?>>175</option>
							<option value="176"<?php if ( $_POST['keido'] === '176' ) { echo ' selected'; } ?>>176</option>
							<option value="177"<?php if ( $_POST['keido'] === '177' ) { echo ' selected'; } ?>>177</option>
							<option value="178"<?php if ( $_POST['keido'] === '178' ) { echo ' selected'; } ?>>178</option>
							<option value="179"<?php if ( $_POST['keido'] === '179' ) { echo ' selected'; } ?>>179</option>
							<option value="180"<?php if ( $_POST['keido'] === '180' ) { echo ' selected'; } ?>>180</option>
						</select>°　　
						
						<input type="submit" value="変更" class="btn">
						</form>
					</p>
					<p>
						観測地点を中心にした3Dグラフです。赤道座標を地平座標に変換して描画しています。<br>
						球上を通る黒線は地平線です。<br>
						緯度・経度を設定して観測地点を変えてみましょう。<br>
					</p>
					<p class="mi" id="sousa">
						<span>⚠</span>緯度・経度を変更しても常に日本時間(UT-9)で計算します<span>⚠</span>
					</p>
				</div>
			</div>
		</div>
		
		<div class="sousa">
			<h2>～3Dグラフ操作～</h2>
			<div class="list">
				<ul>
					<li>
						ドラッグで天球を回転（Z軸固定）することができます。
					</li>
					<li>
						スクロールでズームイン・ズームアウトができます。<br>
						ズームインで天球の中に入ることもできます。
					</li>
					<li>
						右側の図形の説明をクリックすることで、<br>
						任意の図形の表示・非表示を切り替えることができます。
					</li>
					<li>
						図上にカーソルを当てると右上に複数の操作が表示さ<br>
						れます。通常はドラッグが回転（Z軸固定）モードです。
					</li>
					<li>
						左から２番目の虫眼鏡マークは、ドラッグをズームモード<br>
						に切り替えます。
					</li>
					<li>
						左から３番目の十字の矢印マークは、ドラッグを天球を<br>
						上下左右移動できるモードに切り替えます。
					</li>
					<li>
						左から４番目の２つの矢印マークは、Z軸方向の回転も<br>
						可能にします。
					</li>
					<li>
						左から5番目は、ドラッグをデフォルトの回転（Z軸固定）<br>
						モードに切り替えます。
					</li>
					<li>
						左から６番目のホームマークは、3Dグラフを操作する<br>
						前の最初の状態に戻します。<br><br>
					</li>
				</ul>
			</div>
		</div>
		<p class="last">
				<a href= "#top" >ページの最上部へ</a>
		</p>
	</div>


</body>

</html>