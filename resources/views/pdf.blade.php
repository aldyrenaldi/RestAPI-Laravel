<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <title>Rekam Medis </title>
  </head>
  <body>
    <h5 class="text-center my-4">Data Rekam Medis</h5>
    <table class="table table-bordered table-striped">
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
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$show->id_rekammedis}}
        </td>
        <td>
          {{$show->pasien->nama_pasien}}
        </td>
        <td>
          {{$show->dokter->nama_dokter}}
        </td>
        <td>
          {{$show->petugas->nama_petugas}}
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