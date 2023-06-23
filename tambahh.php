<div class="container-fluid">
  
                    <h1 class="h3  center mb-3 text-gray-800"> <?= $title; ?></h1>
                        <form>
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
                                    <input type="email" class="form-control" id="email"
                                     name="email" value="<?= $user['email']; ?>">
                                     <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
                                </div>
                            </div>
                            <div class="form-group">
            <label for="new_Password1">New Password</label>
            <input type="password" class="form-control" id="new_password1" name="new_password1">
            <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?> 
        </div>
                            <div class="form-group row">
                                <select class="form-select" aria-label="Default select example" name="role_id">
                                <option selected hidden value="0">Pilih Role_id </option>
                                <option value="Admin">Admin</option>
                                <option value="Admin">User</option>
                                <div class="col-sm-6">
                                </select>
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