<h2>Lampiran untuk Satker: {{ $satker }}</h2>
<table>
    <!-- Header tabel tetap seperti yang Anda berikan -->
    @foreach ($items as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }} </td>
                  <td>{{ $item->id_pegawai }}</td>
                  <td>{{ $item->pegawai->namapegawai }}</td>
                  <td>{{ $item->pegawai->grade->grade }}</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->pegawai->satker->namasatker }}</td>
                  <td>{{ $item->jenispotongan->jenis }}</td>
                  <td>{{ $item->jumlahpotongan }}</td>
        <!-- ... kolom lainnya ... -->
    </tr>
    @endforeach
</table>