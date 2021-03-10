
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
            <form class="" action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="tambahnama" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="tambahusername" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="tambahpassword" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telpon</label>
                    <input type="number" name="tambahnomer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
        </form>
        </div>
        </div>



        </div>
    </div>
</div>
 