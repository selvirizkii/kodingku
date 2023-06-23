<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800"> <?= $title; ?></h1>
                        <form>
                            <div class="form-group row">
                                <label for="id" class="col-sm-2 col-form-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="id" class="form-control" id="no_urut" name="id">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formFile" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" required="required" accept=".jpeg" id="formFile" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Passwoard</label>
                                <div class="col-sm-10">
                                    <input type="Password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role_id" class="col-sm-2 col-form-label">Role_id</label>
                                <div class="col-sm-10">
                                    <input type="role_id" class="form-control" id="role_id" name="role_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode_kab" class="col-sm-2 col-form-label">Kode_kab</label>
                                <div class="col-sm-10">
                                    <input type="kode_kab" class="form-control" id="kode_kab" name="kode_kab">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="is_active" class="col-sm-2 col-form-label">Is_active</label>
                                <div class="col-sm-10">
                                    <input type="is_active" class="form-control" id="is_active" name="is_active">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-sm-2 col-form-label">Date_created</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="text" name="date_created">
                                </div>
                            </div>
                            <div class="table-responsive"></div>
                    <div class="col-lg-9  mt-3"></div>
                    <form action=""
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
            </form>
                </div>