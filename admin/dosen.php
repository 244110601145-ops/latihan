<?php
require_once "../config.php";
$keyword=$_POST['keyword'];
$category=$_POST['category'];

if ($_POST['cari']){
  if($category=="matkul"){
    if($keyword=="Pemograman Web"){
      $matkul=1;
    }
    $sql="select * from dosen where $category like'%$matkul%'";
  }else{
    $sql="select * from dosen where $category like'%$keyword%'";
  }
}else{
  $sql="select * from dosen";
}
$data=$db->query($sql);
// var_dump($data);
?>

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Dashboard Dosen</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Dashboard Dosen
                  </li>
                </ol>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-12">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <!--begin::Card Title-->
                    <h3 class="card-title"></h3>
                    <!--end::Card Title-->
                    <!--begin::Card Toolbar-->
                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                      >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!--end::Card Toolbar-->
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="row">
                        <a href="./?p=add-dosen" class="btn btn-success btn-sm" style="width: 110px">+ Dosen</a>
</td><td width="50"></td><td>
  <form method="post" action="#">
    <input type="text" name="keyword" placeholder="Masukkan kata kunci" value ='<?=$keyword?>'>
    <select name='category'>
      <option value='nidn'<?php if($category=="nidn") echo"selected"?>>NIDN</option>
      <option value='nama'<?php if($category=="nama") echo"selected"?>>Nama</option>
      <option value='matkul'<?php if($category=="matkul") echo"selected"?>>Mata Kuliah</option>
      <option value='gender'<?php if($category=="gender") echo"selected"?>>Gender</option>
</select>
    <input type="submit" name="cari" value="Search" class="btn btn-default">
  </form>
</td><tr></table>
<?php
if (isset($_POST['cari'])){
 $count= mysqli_num_rows($data);
 echo"<div class='alert alert-info'><i>Ditemukan <b>$count</b> data dengan kata kunci <b>$keyword</b> pada <b>$category</b></i></div>";
}
?>
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr><th>No</th><th>NIDN</th><th>Nama</th><th>Mata Kuliah</th><th>Gender</th><th>Alamat</th><th>Opsi</th></tr>
                          </thead>
                          <tbody>
                            <?php
                            foreach($data as $d) { //foreach adalah perulangan khusus array
                              $no++;
                              if($d ['matkul']==1){
                                $matkul="Pemograman Web";
                              }elseif($d['matkul']==2){
                                $matkul="Sistem Informasi";
                              }else{
                                $matkul="Tidak diketahui";
                              }
                              echo"<tr><td>$no</td><td>$d[nidn]</td><td>$d[nama]</td><td>$matkul</td><td>$d[gender]</td><td>$d[alamat]</td>
                              <td>
                              <a href='./?p=detail-dosen&id=$d[id]' class='btn btn-xs btn-info'>Detail</a>
                              <a href='./?p=edit-dosen&id=$d[id]' class='btn btn-xs btn-warning'>Edit</a>
                              <a href='./?p=hapus-dosen&id=$d[id]' class='btn btn-xs btn-danger'>Hapus</a>
                              </td></tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6">
                        <div id="sidebar-color-code" class="w-100"></div>
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Card Body-->
                  <!--begin::Card Footer-->
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->

                <!--end::Card-->
                <!--begin::Card-->
                <!--end::Card-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>