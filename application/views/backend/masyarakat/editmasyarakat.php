
<div class="container">
    <div class="row">
        <div class="col-md-10">



        <div class="card">
        <div class="card-header">
            Tambah Data Masyarakat
        </div>
        <div class="card-body">
                     <?php if(validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    
                    </div>
                    <?php endif ?>

            <form class="" action="<?=base_url()?>admin/masyarakat/editmasyarakat/<?=$masyarakat['id_user']?>" method="POST">
                   
                    <div class="form-group">
                        <label for="exampleInputname">Nama Lengkap</label>
                        <input type="text" class="form-control" name="tambahnama" id="exampleInputname" aria-describedby="emailHelp" value="<?= $masyarakat['nama_lengkap'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputusername">Username</label>
                        <input type="text" class="form-control" name="tambahusername" id="exampleInputusername"  value="<?= $masyarakat['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" name="tambahpassword" class="form-control" id="exampleInputPassword1" value="<?= $masyarakat['password'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputpassword">Nomer Telpon</label>
                        <input type="number" name="tambahnomer" class="form-control" id="exampleInputpassword" aria-describedby="emailHelp" value="<?= $masyarakat['telp'] ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-lg btn-block" >Edit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
        