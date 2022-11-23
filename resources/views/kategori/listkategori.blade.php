<div>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>NOMOR</th>
            <th>Jenis Kategori</th>
            <th>Ket</th>
            <th colspan="2">Tools</th>
        </thead>
        @foreach($kategori AS $ktg)
        <tbody>
            <td>{{ $ktg->jenis}}</td>
            <td>{{ $ktg->ket}}</td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Hapus</a></td>
        </tbody>
    </table>
    @endforeach
</div>