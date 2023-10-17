<button type="button" name="button" class="btn btn-primary no-print"
  style="position: absolute; right : 75px; top : 200px; background-color: black; font-size: 20px;"
  onclick="cetak_lh()">Cetak</button>
<br><br><br><br>
<div class="salary-slip print">
  <table class="empDetail">
    <tr height="100px" style=''>
      <td colspan='4'>
        <img height="90px" src='<?=base_url()?>uploads/rsud_soekardjo.png' /></td>
      <td colspan='4' class="companyName">RSUD Soekardjo<br>Kota Tasikmalaya</td>
    </tr>
    <tr>
      <th>
        <p></p>
      </th>
      <td>

      </td>
      <td colspan="2"></td>
      <th>

      </th>
      <td>

      </td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th>
        Nama Lengkap
      </th>
      <td colspan="3">
        <?=$nama?>
      </td>
      <th>
        Bidang
      </th>
      <td colspan="3">
          -
      </td>
    </tr>
    <tr>
      <th>
        NRP KKWT
      </th>
      <td colspan="3">
        -
      </td>

      <th>
       -
      </th>
      <td colspan="3">
        -
      </td>
    </tr>
    <tr>
      <th>
        Jabatan
      </th>
      <td colspan="3">
        -
      </td>

      <th>
        Periode Gaji
      </th>
      <td colspan="3">
        <?php if ($bulan=="1") {?>
        Januari <?=$tahun?>
        <?php }elseif ($bulan=="2") { ?>
        Februari <?=$tahun?>
        <?php }elseif ($bulan=="3") { ?>
        Maret <?=$tahun?>
        <?php }elseif ($bulan=="4") { ?>
        April <?=$tahun?>
        <?php }elseif ($bulan=="5") { ?>
        Mei <?=$tahun?>
        <?php }elseif ($bulan=="6") { ?>
        Juni <?=$tahun?>
        <?php }elseif ($bulan=="7") { ?>
        Juli <?=$tahun?>
        <?php }elseif ($bulan=="8") { ?>
        Agustus <?=$tahun?>
        <?php }elseif ($bulan=="9") { ?>
        September <?=$tahun?>
        <?php }elseif ($bulan=="10") { ?>
        Oktober <?=$tahun?>
        <?php }elseif ($bulan=="11") { ?>
        November <?=$tahun?>
        <?php }else {?>
        Desember <?=$tahun?>
        <?php } ?>
      </td>

    </tr>
    <tr>
      <th>
        <p></p>
      </th>
      <td>

      </td>
      <td colspan="2"></td>
      <th>

      </th>
      <td>

      </td>
      <td colspan="2"></td>
    </tr>
    <tr class="myBackground">
      <th colspan="2">
        Pendapatan
      </th>
      <th>

      </th>
      <th class="table-border-right">
        Nilai (Rp.)
      </th>
      <th colspan="2">
        Potongan
      </th>
      <th>

      </th>
      <th>
        Nilai (Rp.)
      </th>
    </tr>
    <tr>
      <th colspan="2">
        Gaji Pokok
      </th>
      <td></td>
      <td class="myAlign">
        <?php
         $pokok = $gapok;
         $format_pokok =  number_format($pokok, 0, ',', '.');
         echo $format_pokok;$gapok?>
      </td>
      <th colspan="2">

      </th>
      <td></td>

      <td class="myAlign">
      </td>
    </tr>
    <tr>
      <th colspan="2">
        Tunjangan Makan
      </th>
      <td></td>

      <td class="myAlign">
        <?=$tjmkn?>
      </td>
      <th colspan="2">
        BPJS Keseharan
      </th>
      <td></td>

      <td class="myAlign">
        <?=$potbpjskes?>
      </td>
    </tr>
    <tr>
      <th colspan="2">
        Tunjangan Transportasi
      </th>
      <td></td>

      <td class="myAlign">
        <?=$tjtrans?>
      </td>
      <th colspan="2">
      BPJS Ketengakerjaan
      </th>
      <td></td>

      <td class="myAlign">
      <?=$potbpjsker?>
      </td>
    </tr>
    <tr>
      <th colspan="2">
        Tunjangan Jabatan
      </th>
      <td></td>
      <td class="myAlign">
        <?=$tjjab?>
      </td>
      <th colspan="2">
      Absensi
      </th>
      <td></td>
      <td class="myAlign">
      <?=$potabsen?>
      </td>
    </tr>
    <tr>
      <th colspan="2">
        Overtime
      </th>
      <td></td>

      <td class="myAlign">
        <?=$ovt?>
      </td>
      <th colspan="2">
       Cash Advance
      </th>
      <td></td>

      <td class="myAlign">
        <?=$potcashadv?>
      </td>
    </tr>
    <tr>
      <th colspan="2">
       
      </th>
      <td></td>

      <td class="myAlign">
       
      </td>
      <th colspan="2">
        Hari Kerja
      </th>
      <td></td>

      <td class="myAlign">
        <?=$pothrker?>
      </td>
    </tr>
    <tr class="myBackground">
      <th colspan="3">
        Total Pendapatan
      </th>
      <td class="myAlign">
        <?php
         $pokok = $gapok+$totaltunj;
         $format_pokok =  number_format($pokok, 0, ',', '.');
         echo $format_pokok?>
      </td>
      <th colspan="3">
        Total Potongan
      </th>
      <td class="myAlign">
      <?php
         $format_pot =  number_format($totalpot, 0, ',', '.');
         echo $format_pot?>
      </td>
    </tr>
    <tr height="40px">
      <th colspan="3">
        Pendapatan Bersih
      </th>
      <td style="text-align: center;">
        <?php
         $format_thp =  number_format($thp, 0, ',', '.');
         echo $format_thp?>
      </td>
      <th colspan="3">

      </th>
      <td class="myAlign">

      </td>
    </tr>
  </table>
</div>