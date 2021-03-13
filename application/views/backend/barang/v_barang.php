<div class="container">
    <h2  class="m-0 font-weight-bold text text-secondary  text-center">Data Barang</h2>
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
                    
                       <div class="card-body">
                         <div class="table-responsive">

                            <table id="example" class="table table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>tanggal Masuk</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                $i = 1;
                                foreach ($barang as $item ) :?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $item['nama_barang']?></td>
                                <td><?= date('d-M-y',strtotime($item['tgl']))?></td>
                               <td><?php if( $item['status'] == "dibuka"):?>
                                <p class="text text-success" ><?= strtoupper( $item['status'])?></p>
                                <?php else :?>
                                <p class="text text-danger" ><?= strtoupper( $item['status'])?></p>
                               <?php endif?>
                               
                               </td>
                                <td> 
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#deskripsi<?=$item['id_barang']?>">Deskripsi</a>


                                <a data-toggle='modal' data-target='#hapus<?=$item['id_barang']?>' href="" class="btn btn-danger">Hapus</a> </td>                                
                            </tr>
                                <?php endforeach; ?>   
                            </tbody>
                            </table>
                            </div>
                        </div>
        </div>
</div>


<?php foreach ($barang as $item ) :?>
<!-- Modal -->
<div class="modal fade" id="deskripsi<?=$item['id_barang']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="jumbotron">
    <h1 class="display-4 text text-primary"><?=$item['nama_barang']?></h1>
    <ul class="list-group lead">
      <li class="list-group-item">Tanggal Masuk: <label class="text text-success"> <?= date('d-M-y',strtotime($item['tgl']))?></label> </li>
      <li class="list-group-item">Harga Awal: <label class="text text-success"> <?= 'Rp. ' . number_format($item['harga_awal'])?></label></li>
      <li class="list-group-item">Deskripsi Barang: <p class="text text-success my-1"><?= $item['deskripsi_barang']?></p></li>
      <li class="list-group-item">tanggal lelang: <label class="text text-success"> <?= date('d-M-y',strtotime($item['tgl_lelang']))?></label> </li>
      <li class="list-group-item">Harga Akhir: <label class="text text-success"> <?= 'Rp. ' . number_format($item['harga_akhir'])?></label></li>
      <li class="list-group-item">Status lelang: <label class="text text-success my-1"><?= $item['status']?></label></li>
    </ul>
   
</div>
  </div>
</div>

<?php endforeach; ?>



<?php foreach ($barang as $item ) :?>


<!-- Modal -->
<div class="modal fade" id="hapus<?=$item['id_barang']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Apakah anda yakin ingin menghapus <label class="text-danger"><?=$item['nama_barang']?></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

        <form action="<?=base_url()?>admin/barang/hapusbarang/<?=$item['id_barang']?>" method="POST">
        <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>