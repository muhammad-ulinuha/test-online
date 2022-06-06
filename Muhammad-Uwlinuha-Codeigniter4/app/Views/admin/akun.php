<?= $this->extend('admin/index') ?>

    <?= $this->section('content') ?>
            <div class="container">
                    <div class="row">
                        <div class="col card m-4">
                            <div class="card-body">
                            <h1 class="mt-2 mb-2">Daftar Akun</h1>
                            <button type="button" class="btn btn-outline-primary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#inlineForm"> Tambah Akun</button>
                            <hr>
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getAkun as $akun){ ?>
                                        <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $akun['username']; ?></td>
                                        <td><?= $akun['password']; ?></td>
                                        <td><?= $akun['name']; ?></td>
                                        <td><?= $akun['role']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-edit"
                                            data-username="<?= $akun['username']; ?>"
                                            data-password="<?= $akun['password']; ?>"
                                            data-name="<?= $akun['name']; ?>"
                                            data-role="<?= $akun['role']; ?>"
                                            > Edit</a>
                                            <a href="<?= base_url('akun/delete/'.$akun['username']);?>" 
                                            onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" class="btn btn-outline-danger">Hapus</a>
                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- modal tambah akun -->
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Form Tambah Akun </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('Akun/add') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>Username : </label>
                                <div class="form-group">
                                    <input type="text" id="username" name="username"  placeholder="username..." class="form-control"
                                        required>
                                </div>

                                <label>Password : </label>
                                <div class="form-group">
                                    <input type="text" id="password" name="password"  placeholder="password..." class="form-control"
                                        required>
                                </div>
                                
                                <label>Name : </label>
                                <div class="form-group">
                                    <input type="text" id="name" name="name"  placeholder="name..." class="form-control"
                                        required>
                                
                                    </div><label>Role : </label>
                                <div class="form-group">
                                    <input type="text" id="role" name="role"  placeholder="role..." class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>

                                <button type="submit" name="tombol" class="btn btn-primary ml-1" value="Simpan">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- end modal tambah akun -->

            <!-- modal edit akun -->
            <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Form Edit Post </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('Akun/edit') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>Username : </label>
                                <div class="form-group">
                                    <input type="text" placeholder="product username" class="form-control username" name="username" readonly>
                                </div>

                                <label>Password : </label>
                                <div class="form-group">
                                    <input type="text" name="password"  placeholder="password" class="form-control password"
                                        required>
                                </div>

                                <label>Name : </label>
                                <div class="form-group">
                                    <input type="text" name="name"  placeholder="name" class="form-control name"
                                        required>
                                </div>

                                <label>Role : </label>
                                <div class="form-group">
                                    <input type="text" name="role"  placeholder="role" class="form-control role"
                                        required>
                                </div>
                            </div>

                            <div class="modal-footer">
                            <input type="hidden" name="idpost" class="idpost">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>

                                <button type="submit" name="tombol" class="btn btn-primary ml-1" value="Simpan">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- end modal edit akun -->


            <script src="/js/jquery.min.js"></script>
            <script>
                $(document).ready(function(){

                    // get Edit
                    $('.btn-edit').on('click',function(){
                        // get data from button edit
                        const username = $(this).data('username');
                        const password = $(this).data('password');
                        const name = $(this).data('name');
                        const role = $(this).data('role');
                        // Set data to Form Edit
                        $('.username').val(username);
                        $('.password').val(password);
                        $('.name').val(name);
                        $('.role').val(role);
                        // Call Modal Edit
                        $('#editModal').modal('show');
                    });
                    
                });
            </script>


    <?= $this->endSection() ?>
