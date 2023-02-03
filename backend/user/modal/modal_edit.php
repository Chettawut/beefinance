<div class="modal fade" id="modelUserEdit" tabindex="-1" role="dialog" aria-labelledby="modelEditLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel"><i class="fa fa-cube" aria-hidden="true"></i>
                            แก้ไขผู้ใช้ (Edit User)</h2>
                    </div>
                    <div class="modal-body">
                        <form name="frmEditUser" id="frmEditUser">
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">User</label>
                                <input type="text" class="form-control" name="editusername" id="editusername">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control" name="editpassword" id="editpassword">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">ชื่อจริง</label>
                                <input type="text" class="form-control" name="editfirstname" id="editfirstname">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อสกุล</label>
                                <input type="text" class="form-control" name="editlastname" id="editlastname">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">ประเภท</label>
                                <select class="form-control" name="edittype" id="edittype">
                                    <option value="01">Store</option>
                                    <option value="02">Sales Leader</option>
                                    <option value="03">Accounting</option>
                                    <option value="04">Manager</option>
                                    <option value="05">Sales</option>
                                    <option value="99">Admin</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">SaleCode</label>
                                <input type="text" class="form-control" name="editsalecode" id="editsalecode">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Status</label>
                                <select class="form-control" name="editstatus" id="editstatus">
                                    <option value="Y">Y</option>
                                    <option value="N">N</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">email</label>
                                <input type="email" class="form-control" name="editemail" id="editemail">
                            </div>


                            <!-- <div class="form-group col-md-6">
                                <label for="inputEmail4">Money</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" disabled>
                            </div> -->


                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="btnDeleteUser">ลบ</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary" id="btnEditUser">แก้ไข</button>
                    </div>
                </div>
            </div>
        </div>