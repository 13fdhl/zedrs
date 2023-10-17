<div class="tab-pane" id="dokumen" role="tabpanel">
                  <h3>DOKUMEN</h3>
                  <div class="card-body media align-items-center">
                    <table id="" class="display table" style="width: 100%; cellspacing: 0;">
                      <thead class="bg-dark text-white">
                        <tr>
                          <th>Dokumen</th>
                          <th>Detail</th>
                          <th>Update File</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <!--Laporan-->
                        <tr>
                          <td>
                            <h4>Laporan</h4>
                          </td>
                          <td>
                            <?php if($profile->akta_kelahiran != null && $profile->akta_kelahiran != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/akta_kelahiran/'.$profile->akta_kelahiran?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_akta/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="akta_kelahiran" name="akta_kelahiran" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Sertifikat-->
                        <tr>
                          <td>
                            <h4>Sertifikat</h4>
                          </td>
                          <td>
                            <?php if($profile->akta_kelahiran != null && $profile->akta_kelahiran != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/akta_kelahiran/'.$profile->akta_kelahiran;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/akta_kelahiran/'.$profile->akta_kelahiran?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_akta/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="akta_kelahiran" name="akta_kelahiran" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                        
                        <!--Bukti Pembayaran-->
                        <tr>
                          <td>
                            <h4>Bukti Pembayaran</h4>
                          </td>
                          <td>
                            <?php if($profile->buku_nikah != null && $profile->buku_nikah != "default.jpg"):?>
                            <a href="<?php echo base_url().'file_upload/buku_nikah/'.$profile->buku_nikah;?>" target="_blank"
                              class="btn btn-primary" style="margin-bottom: 2px">Lihat</a>
                            &nbsp;
                            <a download href="<?php echo base_url().'file_upload/buku_nikah/'.$profile->buku_nikah;?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download</a>
                            <a href="<?=base_url().'admin/karyawan/qr/buku_nikah/'.$profile->buku_nikah?>"
                              class="fa fa-download" style="margin-bottom: 2px">Download QR</a>
                            <?php endif;?>
                          </td>
                          <td>

                            <form action="<?=site_url()?>admin/karyawan/update_nikah/<?=$profile->id?>" method="post"
                              enctype="multipart/form-data">
                              <input id="buku_nikah" name="buku_nikah" accept="image/jpeg,image/png" type="file">
                              <input class="button" name="submit"  id="submit" value="Upload" type="submit">
                              <small>tipe : jpg, png</small>
                            </form>
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>