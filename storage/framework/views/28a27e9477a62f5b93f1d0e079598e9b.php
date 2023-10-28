<html>

<head>

    <title>Cetak Laporan Tukin</title>
    <style type= "text/css">

    body {background-color : #ccc }

    .rangkasurat {width : 930px;margin:0 auto;background-color : #fff;padding: 20px;}

    table {border-bottom : 5px solid # 000; padding: 2px}

    .tengah {text-align : center;line-height: 5px;}

    .table1 {
    color: #232323;
    border-collapse: collapse;
    }
 
    .table1, td {
    border: 2px solid #050505;
    padding: 8px 14px;
    }

     </style >

</head>

<body>

<div class = "rangkasurat">

     <table>


                 <th> <img src="<?php echo e(asset('AdminLTE/img/PENGAYOMAN.PNG')); ?>" width="80px"> </th>

                 <th class = "tengah">

                       <h3>LAPORAN PERTANGGUNGJAWABAN PEMBAYARAN TUNJANGAN KINERJA TAHUN 2023</h3>

                       <h2>TUNJANGAN KINERJA RUTIN/BULANAN</h2>

                       <p>TINGKAT KANTOR WILAYAH</p>

                       <p>KALIMANTAN SELATAN</p>

                       

                 </th>
                 
     </table >
     <br>

     <table class="table1">
        <tr>
        <th>Tanggal</th>
        <th>Nama Satuan Kerja</th>
        <th>Saldo Awal</th>
        <th>Usulan Tukin</th>
        <th>Total Kebutuhan</th>
        <th>Pajak (Pph21)</th>
        <th>Potongan (Pph21)</th>
        <th>Tunjangan Dibayar</th>
        <th>Jumlah</th>
        </tr>
        <tr>
          <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td><?php echo e($item->tanggal); ?></td>
          <td><?php echo e($item->satker->namasatker); ?></td>
          <td><?php echo e($item->saldotukin); ?></td>
          <td><?php echo e($item->usulantukin); ?></td>
          <td><?php echo e($item->totalkebutuhan); ?></td>
          <td><?php echo e($item->pajak); ?></td>
          <td><?php echo e($item->potongan); ?></td>
          <td><?php echo e($item->tunjangandibayar); ?></td>
          <td><?php echo e($item->jumlah); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>


</div>

</body>

</html><?php /**PATH C:\laragon\www\PerhitunganTukin\resources\views/laporan/cetak-laporan.blade.php ENDPATH**/ ?>