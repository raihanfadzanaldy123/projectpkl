<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angsam CI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <div class="row justify-center-content">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Ubah Data
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($pelajaran as $mpl) { ?>
                                <form action="<?= base_url() . 'dashboard_mapel/show'; ?>" method="post">

                                    <div class="form-group">
                                        <label>Mata Pelajaran</label>
                                        <input type="hidden" name="id" class="form-control" value="<?= $mpl->id ?>">
                                        <input type="text" name="mata_pelajaran" class="form-control" value="<?= $mpl->mata_pelajaran ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Guru</label>
                                        <input type="text" name="nm_guru" class="form-control" value="<?= $mpl->nama_guru ?>" readonly>
                                    </div>

                                    <button type="button" class="btn btn-success"><a href="<?= base_url('dashboard_mapel'); ?>">KEMBALI</a></button>
                        </ul>
                        </form>
                    </div>
                <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>