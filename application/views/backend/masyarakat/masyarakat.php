


<div class="container">
    <h2  class="m-0 font-weight-bold  text-center">Data Masyarakat</h2>
        <?php if($this->session->flashdata('status')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">data
                    <strong>Berhasil</strong> <?= $this->session->flashdata('status');?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            </div>
        </div>
          <?php endif; ?>

    <div class="card shadow mb-4">
                     <div class="card-header py-3">
                         <a type="button" href="<?=base_url()?>admin/masyarakat/tambahmasyarakat" class="btn btn-primary" >Tambah data Masyarakat</a>

                      </div>
                       <div class="card-body">
                         <div class="table-responsive">

                            <table id="example" class="table table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Telpon</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                $i = 1;
                                foreach ($masyarakat as $orang ) :?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $orang['nama_lengkap'] ?></td>
                                <td><?= $orang['username'] ?></td>
                                <td><?= $orang['password'] ?></td>
                                <td><?= $orang['telp'] ?></td>
                                <td> <a href="<?=base_url()?>admin/masyarakat/editmasyarakat/<?= $orang['id_user']?>" class="btn btn-success">Edit</a>

                                <a data-toggle='modal' data-target='#hapus<?= $orang['id_user']?>' href="" class="btn btn-danger">Hapus</a> </td>                                
                            </tr>
                                <?php endforeach; ?>   
                            </tbody>
                            </table>
                            </div>
                        </div>
        </div>
</div>


<?php
 $i = 1;
 foreach ($masyarakat as $orang ) :?>

<div class="modal fade" id="hapus<?= $orang['id_user']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-center-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin ingin menghapus data <label class="text-danger"><?=$orang['nama_lengkap']?></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <form action="<?=base_url()?>admin/masyarakat/hapusmasyarakat/<?=$orang['id_user']?>" method="POST">

        <button type="Submit" class="btn btn-primary">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>   


