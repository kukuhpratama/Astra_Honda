<table style="border-style:solid">
    <thead>
    <tr>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Dealer</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. Rangka</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Mesin</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. Mesi</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tgl Mohon</th>	
        <th style="width:40px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Nama</th>	
        <th style="width:60px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Alamat</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kel</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kec</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Kota</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Cash/Credit</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Finance Company</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Down Payment</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tenor</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Email</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Jenis Sales</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Gender</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tgl Lahir</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Agama</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Pekerjaan</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Pengeluaran</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Pendidikan</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No.HP</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No. Telp</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">diHubungi?</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">SalesPerson</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Umur</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Range Umur</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">TIPE</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">6JENIS</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">3JENIS</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">DP Aktual</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tenor</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Cicilan</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tipe ATPM</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Warna</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Tipe Var Plus</th>	
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">No KK</th>
        <th style="width:20px; text-align:center; background-color:#337ab7; color:#ffffff; font-weight:bold">Kode Pekerjaan 2</th>
    </tr>
    </thead>
    <tbody>
    @foreach($database_h1 as $dbh1)
        <tr>
             <td style="text-align:left">{{ $dbh1->kode_dealer }}</td>
            <td style="text-align:left">{{ $dbh1->no_rangka }}</td>
            <td style="text-align:center">{{ $dbh1->kode_mesin }}</td>
            <td style="text-align:center">{{ $dbh1->no_mesi }}</td>
            <td style="text-align:center">{{ $dbh1->tgl_mohon }}</td>
            <td style="text-align:left">{{ $dbh1->nama }}</td>
            <td style="text-align:left">{{ $dbh1->alamat }}</td>
            <td style="text-align:left">{{ $dbh1->kel }}</td>
            <td style="text-align:left">{{ $dbh1->kec }}</td>
            <td style="text-align:center">{{ $dbh1->kode_kota }}</td>
            <td style="text-align:center">{{ $dbh1->cash_credit }}</td>
            <td style="text-align:center">{{ $dbh1->finance_company }}</td>
            <td style="text-align:center">{{ $dbh1->down_payment }}</td>
            <td style="text-align:center">{{ $dbh1->tenor }}</td>
            <td style="text-align:center">{{ $dbh1->email }}</td>
            <td style="text-align:center">{{ $dbh1->jenis_sales }}</td>
            <td style="text-align:center">{{ $dbh1->gender }}</td>
            <td style="text-align:center">{{ $dbh1->tgl_lahir }}</td>
            <td style="text-align:center">{{ $dbh1->agama }}</td>
            <td style="text-align:center">{{ $dbh1->pekerjaan }}</td>
            <td style="text-align:center">{{ $dbh1->pengeluaran }}</td>
            <td style="text-align:center">{{ $dbh1->pendidikan }}</td>
            <td style="text-align:left">{{ $dbh1->no_hp }}</td>
            <td style="text-align:left">{{ $dbh1->no_telp }}</td>
            <td style="text-align:center">{{ $dbh1->dihubungi }}</td>
            <td style="text-align:left">{{ $dbh1->sales_person }}</td>
            <td style="text-align:left">{{ $dbh1->umur }}</td>
            <td style="text-align:left">{{ $dbh1->range_umur }}</td>
            <td style="text-align:left">{{ $dbh1->tipe }}</td>
            <td style="text-align:left">{{ $dbh1->enam_jenis }}</td>
            <td style="text-align:left">{{ $dbh1->tiga_jenis }}</td>
            <td style="text-align:left">{{ $dbh1->DP_aktual }}</td>
            <td style="text-align:left">{{ $dbh1->tenor2 }}</td>
            <td style="text-align:left">{{ $dbh1->cicilan }}</td>
            <td style="text-align:left">{{ $dbh1->tipe_ATPM }}</td>
            <td style="text-align:left">{{ $dbh1->warna }}</td>
            <td style="text-align:left">{{ $dbh1->tipe_var_plus }}</td>
            <td style="text-align:left">{{ $dbh1->no_KK }}</td>
            <td style="text-align:left">{{ $dbh1->kode_pekerjaan2 }}</td>
        </tr>
    @endforeach
    </tbody>
</table>