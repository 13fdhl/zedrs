<div class="">
    <div class="col-md-12">
        <!-- container -->
        <section class="showcase">
            <div class="container">
                <div class="pb-2 mt-4 mb-2 border-bottom">
                    <h2>Upload List Pelamar</h2>
                </div>

                <?php if(form_error('fileURL')) {?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php print form_error('fileURL'); ?>
                </div>
                <?php } ?>
                <div class="row padall border-bottom">
                    <div class="col-lg-12">
                        <div class="float-right">
                            <a href="<?php print site_url();?>uploads/sample-pelamar-xlsx.xlsx" class="btn btn-info btn-sm"><i
                                    class="fa fa-file-excel"></i> Sample .XLSX</a>
                            <a href="<?php print site_url();?>uploads/sample-pelamar-xls.xls" class="btn btn-info btn-sm"><i
                                    class="fa fa-file-excel"></i> Sample .XLS</a>
                            <!-- <a href="<?php print site_url();?>uploads/sample-csv.csv" class="btn btn-info btn-sm"
                                target="_blank"><i class="fa fa-file-csv"></i> Sample .CSV</a> -->
                        </div>
                    </div>
                </div>

                <form action="<?php print site_url();?>admin/phpspreadsheet_pelamar/upload" class="excel-upl" id="excel-upl"
                    enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="row padall">
                        <div class="col-lg-6 order-lg-1">

                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="fileURL">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <div class="col-lg-6 order-lg-2">
                            <button type="submit" name="import" class="float-right btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>
</div>