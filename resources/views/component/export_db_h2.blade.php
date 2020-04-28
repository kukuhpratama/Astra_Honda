<table style="border-style:solid">
    <thead>
    <tr>	
        <th style="width:10px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nomor</th>
        <th style="width:17px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Dealer</th>
        <th style="width:45px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nomor Nama AHASS</th>
        <th style="width:28px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nomor Nota Servis</th>
        <th style="width:25px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tgl Nota Servis</th>
        <th style="width:25px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. PKB</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Np. Antrian</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama Tipe Kedatangan</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Alasan Ingat Service</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Dealer Sendiri</th>
        <th style="width:17px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. Polisi</th>
        <th style="width:25px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nomor Mesin</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nomor Rangka</th>
        <th style="width:25px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama Motor</th>
        <th style="width:35px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Warna</th>
        <th style="width:17px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tahun Rakit</th>
        <th style="width:40px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama Pemilik</th>
        <th style="width:60px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Alamat</th>
        <th style="width:30px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kelurahan</th>
        <th style="width:30px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kecamatan</th>
        <th style="width:30px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kabupaten</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. telp</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. HP</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Km Sekarang</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Km Berikut</th>
        <th style="width:17px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Jenis</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Jasa Part</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Grup Jasa Part</th>
        <th style="width:40px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama Jasa Part</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Satuan</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Jumlah</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Harga</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Total</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tipe Pembayaran</th>
        <th style="width:40px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama Mekanik</th>
        <th style="width:25px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">User Login</th>
        <th style="width:15px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Uang Bayar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($database_h2 as $dbh2)
        <tr>
            <td style="text-align:center">{{ $dbh2->nomor }}</td>
            <td style="text-align:left">{{ $dbh2->kode_dealer }}</td>
            <td style="text-align:left">{{ $dbh2->nomor_nama_AHASS }}</td>
            <td style="text-align:left">{{ $dbh2->nomor_nota_servis }}</td>
            <td style="text-align:left">{{ $dbh2->tgl_nota_servis }}</td>
            <td style="text-align:left">{{ $dbh2->no_PKB }}</td>
            <td style="text-align:left">{{ $dbh2->no_antrian }}</td>
            <td style="text-align:left">{{ $dbh2->nama_tipe_kedatangan }}</td>
            <td style="text-align:left">{{ $dbh2->alasan_ingat_service }}</td>
            <td style="text-align:center">{{ $dbh2->dealer_sendiri }}</td>
            <td style="text-align:left">{{ $dbh2->no_polisi }}</td>
            <td style="text-align:left">{{ $dbh2->nomor_mesin }}</td>
            <td style="text-align:left">{{ $dbh2->nomor_rangka }}</td>
            <td style="text-align:left">{{ $dbh2->nama_motor }}</td>
            <td style="text-align:left">{{ $dbh2->warna }}</td>
            <td style="text-align:left">{{ $dbh2->tahun_rakit }}</td>
            <td style="text-align:left">{{ $dbh2->nama_pemilik }}</td>
            <td style="text-align:left">{{ $dbh2->alamat }}</td>
            <td style="text-align:left">{{ $dbh2->kelurahan }}</td>
            <td style="text-align:left">{{ $dbh2->kecamatan }}</td>
            <td style="text-align:left">{{ $dbh2->kabupaten }}</td>
            <td style="text-align:left">{{ $dbh2->no_telp }}</td>
            <td style="text-align:left">{{ $dbh2->no_HP }}</td>
            <td style="text-align:left">{{ $dbh2->km_sekarang }}</td>
            <td style="text-align:left">{{ $dbh2->km_berikut }}</td>
            <td style="text-align:left">{{ $dbh2->jenis }}</td>
            <td style="text-align:left">{{ $dbh2->kode_jasa_part }}</td>
            <td style="text-align:left">{{ $dbh2->grup_jasa_part }}</td>
            <td style="text-align:left">{{ $dbh2->nama_jasa_part }}</td>
            <td style="text-align:left">{{ $dbh2->satuan }}</td>
            <td style="text-align:left">{{ $dbh2->jumlah }}</td>
            <td style="text-align:left">{{ $dbh2->harga }}</td>
            <td style="text-align:left">{{ $dbh2->total }}</td>
            <td style="text-align:left">{{ $dbh2->tipe_pembayaran }}</td>
            <td style="text-align:left">{{ $dbh2->nama_mekanik }}</td>
            <td style="text-align:left">{{ $dbh2->user_login }}</td>
            <td style="text-align:left">{{ $dbh2->uang_bayar }}</td>
        </tr>
    @endforeach
    </tbody>
</table>