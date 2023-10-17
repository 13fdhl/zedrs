                  <h3>GANTI PASSWORD</h3>
                  <div class="card-body media align-items-center">
                    <div class="col-md-8">
                      <div class="panel panel-white">
                        <div class="panel-body">
                          <form action="<?=site_url()?>admin/password_admin/change_password" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                              <label class="control-label">New Password</label>
                              <input type="text" name="password" class="form-control title" required autocomplete="off">
                            </div>
                            <div>
                              <input class="button" name="submit" id="submit" value="Update" type="submit">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
