    <!--Begin Page Content -->
    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="card-header py-3">
            <a href="<?= base_url('users/tambahh'); ?>" button class="btn btn-secondary">Tambah User</a>
        </div>
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
    <thead>
    <tbody>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">image</th>
                                <th scope="col">role_id</th>
                                <th scope="col">kode_kab</th>
                                <th scope="col">aksi</th>
                            </tr>

</thead>
<tbody>
<?php $i = 1; ?>
<?php foreach ($name as $n) : ?>
<tr>
    <th scope="row"><?= $i; ?></th>
    <td><?= $n['name'] ?></td>
    <td><?= $n['email'] ?></td>
    <td><?= $n['image'] ?></td>
    <td><?= $n['role_id'] ?></td>
    <td><?= $n['kode_kab'] ?></td>
    <td>
    <a href="" class="badge badge-success">edit</a>
        <a href=""class="badge badge-danger">delete</a>
    </td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</tbody>
</table>
                            </div>
                        </div>
                    </div>
                    