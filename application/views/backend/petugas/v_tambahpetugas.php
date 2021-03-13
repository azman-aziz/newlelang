
<div class="container">
    <div class="row">
        <div class="col-md-10">


        <div class="card">
        <div class="card-header">
            Tambah Data petugas
        </div>
        <div class="card-body">
                     <?php if(validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors();?>
                    
                    </div>
                    <?php endif ?>
            <form class="" action="<?= base_url()?>admin/petugas/tambahpetugas" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="tambahnama" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="tambahusername" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputpassword">Password</label>
                    <input type="text" class="form-control" name="tambahpassword" id="exampleInputpasword" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                        <select class="custom-select" name="pilih">
                            <option selected>pilih level</option>
                            <option value="1">Administrator</option>
                            <option value="2">Petugas</option>
                        </select>
                </div>
                
                
                <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
        </form>
        </div>
        </div>



        </div>
    </div>
</div>
 