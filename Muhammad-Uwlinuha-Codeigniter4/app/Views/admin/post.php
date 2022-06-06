<?= $this->extend('admin/index') ?>

    <?= $this->section('content') ?>
            <div class="container">
                    <div class="row">
                        <div class="col card m-4">
                            <div class="card-body">
                            <h1 class="mt-2 mb-2">Post</h1>
                            <button type="button" class="btn btn-outline-primary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#inlineForm"> Tambah Post</button>
                            <hr>
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getPost as $post){ ?>
                                        <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $post['title']; ?></td>
                                        <td><?= $post['content']; ?></td>
                                        <td><?= $post['date']; ?></td>
                                        <td><?= $post['username']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-edit"
                                            data-id="<?= $post['idpost']; ?>"
                                            data-title="<?= $post['title']; ?>"
                                            data-content="<?= $post['content']; ?>"
                                            data-date="<?= $post['date']; ?>"
                                            data-username="<?= $post['username']; ?>"
                                            > Edit</a>
                                            <a href="<?= base_url('post/delete/'.$post['idpost']);?>" 
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

            <!-- modal tambah post -->
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Form Tambah Post </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('Post/add') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>Title : </label>
                                <div class="form-group">
                                    <input type="text" id="title" name="title"  placeholder="title..." class="form-control"
                                        required>
                                </div>

                                <label>Content : </label>
                                <div class="form-group">
                                    <input type="text" id="content" name="content"  placeholder="content..." class="form-control"
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

            <!-- end modal tambah post -->

            <!-- modal edit post -->
            <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Form Edit Post </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('Post/edit') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>Title : </label>
                                <div class="form-group">
                                    <input type="text" placeholder="product title" class="form-control title" name="title">
                                </div>

                                <label>Content : </label>
                                <div class="form-group">
                                    <input type="text" name="content"  placeholder="content" class="form-control content"
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

            <!-- end modal edit post -->


            <script src="/js/jquery.min.js"></script>
            <script>
                $(document).ready(function(){

                    // get Edit
                    $('.btn-edit').on('click',function(){
                        // get data from button edit
                        const id = $(this).data('id');
                        const title = $(this).data('title');
                        const content = $(this).data('content');
                        const date = $(this).data('date');
                        const username = $(this).data('username');
                        // Set data to Form Edit
                        $('.idpost').val(id);
                        $('.title').val(title);
                        $('.content').val(content);
                        $('.date').val(date);
                        $('.date').val(date);
                        // Call Modal Edit
                        $('#editModal').modal('show');
                    });
                    
                });
            </script>


    <?= $this->endSection() ?>
