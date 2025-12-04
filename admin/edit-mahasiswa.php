 <?php
$idx=$_GET['id'];
require_once "../config.php";
$sql="select * from mahasiswa where id='$idx'";
$data=$db->query($sql);
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Edit Mahasiswa</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Edit Mahasiswa
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
                        <div class="col-lg-12">
                            <div id="sidebar-color-code" class="w-100"></div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6">
                        <form method ="post" action="#">
                            <?php
                            if($_POST['simpanEdit']){
                                $nim=$_POST['nim'];
                                $nama=$_POST['nama'];
                                $jk=$_POST['gender'];
                                $prodi=$_POST['prodi'];
                                $alamat=$_POST['alamat'];
                                $sql="update mahasiswa set nim='$nim', nama='$nama', gender='$jk', prodi='$prodi', alamat='$alamat' where id='$idx'";

                                $hasil=$db->query($sql);

                                if($hasil){
                                    echo "<div class='alert alert-success'>Data berhasil diupdate</div>. ";
                                } else {
                                    echo "<div class='alert alert-danger'>Data gagal diupdate</div>. ";
                                }
                            }
                            ?>
                            <table class="table table-bordered">
                              <?php
                                foreach($data as $d){
                               if($d['gender']=='M'){
                                   $jkM="checked";
                               } else {
                                   $jkF="checked";
                               }
                               switch($d['prodi']){
                                   case'1':
                                       $prodi1="Teknik Informatika";
                                       break;
                                   case'2':
                                       $prodi2="Sistem Informasi";
                                       break;
                                   default:
                                       $prodi0="Tidak Diketahui";
                                       break;
                               }
                                 echo"<tr><td>NIM</td><td><input type='number' name='nim' value='$d[nim]' class='form-control'></td></tr>";
                                 echo"<tr><td>Nama</td><td><input type='text' name='nama' value='$d[nama]' class='form-control'></td></tr>";
                                 echo"<tr><td>Jenis Kelamin</td><td><input type='radio' name='gender' value='M' $jkM>Laki-laki<input type='radio' name='gender' value='F' $jkF>Perempuan</td></tr>";
                                 echo"<tr><td>Alamat</td><td><textarea name='alamat' class='form-control'>$d[alamat]</textarea></td></tr>";
                                 echo"<tr><td>Program Studi</td><td>
                                 <select name='prodi' class='form-control'>
                                     <option value='1'"; if($d['prodi']=='1') echo"selected"; echo">Teknik Informatika</option>
                                     <option value='2'"; if($d['prodi']=='2') echo"selected"; echo">Sistem Informasi</option>
                                    </select></td></tr>";
                                    echo"<tr><td></td><td>
                                    <input type='submit' name='simpanEdit' value='Simpan Perubahan' class='btn btn-primary'>
                                    </td></tr>";
                            }
                            ?>
                            </table>
                            <a href="./?p=mahasiswa" class="btn btn-secondary">Kembali</a>
                        </div>
                        </form>
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