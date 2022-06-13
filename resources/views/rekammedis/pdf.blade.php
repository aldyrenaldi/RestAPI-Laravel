<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
            <th>ID REKAM MEDIS</th>
            <th>NAMA PASIEN</th>
            <th>NAMA DOKTER</th>
            <th>NAMA PETUGAS</th>
            <th>TGL PERIKSA</th>
            <th>DIAGNOSA</th>
            <th>KETERANGAN</th>
            <TH>BIAYA JASA</TH>
            <th>ACTION</th>    
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$show->id_rekammedis}}
        </td>
        <td>
          {{$show->nama_pasien}}
        </td>
        <td>
          {{$show->nama_dokter}}
        </td>
        <td>
          {{$show->nama_petugas}}
        </td>
        <td>
          {{$show->tgl_periksa}}
        </td>
        <td>
          {{$show->diagnosa}}
        </td>
        <td>
          {{$show->keterangan}}
        </td>
        <td>
          {{$show->biaya_jasa}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>