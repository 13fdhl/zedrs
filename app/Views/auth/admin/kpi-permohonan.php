<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
h4
	{mso-style-link:"Heading 4 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:205.55pt;
	text-align:center;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	font-weight:normal;
	font-style:italic;}
span.Heading4Char
	{mso-style-name:"Heading 4 Char";
	mso-style-link:"Heading 4";
	font-family:"Times New Roman",serif;
	font-style:italic;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body style='word-wrap:break-word'>
<button type="button" name="button" class="btn btn-primary no-print center" style="margin-left: 0px !important;" onclick="cetak_lj()">Cetak</button>

<div class='WordSection1 panel-white'>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=638
 style='width:478.25pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=334 valign=top style='width:250.7pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='line-height:115%'><a name="_Hlk95385606"><span
  lang=IN>&nbsp;</span></a></p>
  <p class=MsoNormal style='line-height:115%'><span lang=IN>&nbsp;</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=IN>&nbsp;</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US>Perihal :
  Permohonan Perpanjangan Kerjasama</span></p>
  </td>
  <td width=60 valign=top style='width:45.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-GB>&nbsp;</span></p>
  </td>
  <td width=243 valign=top style='width:182.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-GB>Tasikmalaya,        November
  2021</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=IN>&nbsp;</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US>Kepada : </span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US>Yth. Direktur
  RSUD dr. Soekardjo</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US>Kota Tasikmalaya</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=IN>di</span></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  lang=IN>Tempat</span></p>
  </td>
 </tr>
</table>

<h4 style='margin-left:0cm;text-align:justify;text-justify:inter-ideograph'><b><span
lang=IN style='color:white;font-style:normal'>            </span></b></h4>

<p class=MsoNormal style='line-height:150%'><span lang=EN-US>Yang
bertandatangan di bawah ini :</span></p>

<p class=MsoNormal style='line-height:150%'><span lang=EN-US>         Nama                             : <?=$user->first_name?></span><span
lang=EN-US> </span></p>

<p class=MsoNormal style='line-height:150%'><span lang=EN-US>         Tempat/Tgl.Lahir          : <?=$user->tempat_lahir?> / <?=$user->tgl_lahir?></span></p>

<?php
$from = new DateTime($user->tgl_lahir);
$to   = new DateTime('today');
$usia = $from->diff($to)->y;
?>
<p class=MsoNormal style='line-height:150%'><span lang=EN-US>         Usia
Sekarang               : <?=$usia?></span></p>

<p class=MsoNormal style='line-height:150%'><span lang=EN-US>         Alamat                           : <?=$user->alamat?> 
</span></p>

<p class=MsoNormal style='line-height:150%'><span lang=EN-US>         Unit
Kerja                     : <?=$user->jabatan?></span></p>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
text-indent:36.0pt;line-height:150%'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
text-indent:36.0pt;line-height:150%'><span lang=EN-US>Berdasarkan Peraturan
Walikota No. 78 Tahun 2011 mengenai Pedoman Pengelolaan Pegawai Non Pegawai
Negeri Sipil dan Dokter Tamu Pada Badan Layanan Umum Daerah Rumah Sakit Umum Daerah
Kota Tasikmalaya, maka dengan ini saya mengajukan surat permohonan perpanjangan
kontrak kerja mengingat usia saya belum melewati 56 (lima puluh enam) tahun
sebagaimana Pegawai Tidak Tetap yang usianya dibawah tersebut masih bisa
diperpanjang perjanjian kerjasamanya.</span></p>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
line-height:150%'><span lang=EN-US>            </span></p>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
line-height:150%'><span lang=EN-US>Demikian Surat Permohonan Perpanjangan Kerjasama
ini dibuat untuk digunakan sebagaimana mestinya.</span></p>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
line-height:150%'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center;
line-height:150%'><span lang=IN>Pemohon</span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center;
line-height:150%'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center;
line-height:150%'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center;
line-height:150%'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center'><span
lang=IN><?=$user->first_name?></span></p>

<p class=MsoNormal align=center style='margin-left:288.0pt;text-align:center'><span
lang=IN>NIPRS. <?=$user->username?></span></p>

<p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

</div>

</body>

</html>
