<div>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No Anggota</th>
            <th>Nama Anggota</th>
            <th>Tanggal Lahir</th>
            <th> jenis kelamin</th>
            <th>alamat</th>
            <th>No Telp</th>
            <th span="2">Tools</th>
        </thead>
        @foreach($anggotas AS $ags)
        <tbody>
            <td>#</td>
            <td>#</td>
           
            <td><a href="#">Edit</a></td>
            <td><a href="#">Hapus</a></td>
        </tbody>
    </table>
    @endforeach
</div>
