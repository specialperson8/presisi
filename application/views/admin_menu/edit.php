<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Menu</h1>

    <div class="col-8">

        <form action="<?= base_url('admin_menu/edit/') . $admin_menu['id']; ?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $admin_menu['id']; ?>">
            <div class="modal-body">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $admin_menu['nama']; ?>">
                </div>

                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $admin_menu['icon']; ?>">
                </div>

                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="url" name="url" value="<?= $admin_menu['url']; ?>">
                </div>
            </div>


            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->