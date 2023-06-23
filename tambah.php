<div class="container-fluid">
  
                    <h1 class="h3  center mb-3 text-gray-800"> <?= $title; ?></h1>
                        <form>
                            <div class="form-group row">
                                <label for="id" class="col-sm-2 col-form-label">Id</label>
                                <div class="col-sm-6">
                                    <input type="id" class="form-control" id="id" name="id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formFile" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" required="required" accept=".jpeg" id="formFile" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role_id" class="col-sm-2 col-form-label">Role_id</label>
                                <div class="col-sm-6">
                                    <input type="role_id" class="form-control" id="role_id" name="role_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_kab" class="col-sm-2 col-form-label">Kode_kab</label>
                                <div class="col-sm-6">
                                    <input type="kode_kab" class="form-control" id="kode_kab" name="kode_kab">
                                </div>
                            </div>
                            <div class="table-responsive"></div>
                    <div class="col-lg-7  mt-3"></div>
                    
                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
            </form>
                </div>