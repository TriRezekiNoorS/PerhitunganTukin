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


                 <th> <img src="{{ asset('AdminLTE/img/PENGAYOMAN.PNG') }}" width="80px"> </th>

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
          @foreach($laporan as $item)
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->satker->namasatker }}</td>
          <td>{{ $item->saldotukin }}</td>
          <td>{{ $item->usulantukin }}</td>
          <td>{{ $item->totalkebutuhan }}</td>
          <td>{{ $item->pajak }}</td>
          <td>{{ $item->potongan }}</td>
          <td>{{ $item->tunjangandibayar }}</td>
          <td>{{ $item->jumlah }}</td>
        </tr>
        @endforeach
    </table>
    </div>


</div>

</body>

</html>