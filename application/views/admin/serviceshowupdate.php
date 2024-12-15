<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">

        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Panel</a></li>
            <li class="active">Form Page</li>
        </ol>
    </div>

    <div id="page-inner">

        <div class="row">
            <br>


            <div class="col-lg-12">
                <br>
                <div class="panel inse1 panel-default">

                    <div class="panel-heading">
                        Services Update Form
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/serviceupdate1'); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Service Image 1</label>
                                            <input type="file" name='serviceupdateimg1'>
                                            <input type="hidden" name="value" value="<?php echo $id ?>"
                                                id="hiddenValue">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3" col="3" minlength="126"
                                                maxlength="126" name='serviceupdatetext1'></textarea>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                        </div>
                                    </form>





                                    <!-- /.col-lg-6 (nested) -->
                                </div>



                            </div>
                            <!-- /.row (nested) -->
                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <footer>
                <p>All right reserved.<a href="#">Bright Technologies</a></p>
            </footer>
            <script>
            var newbtn = document.getElementById("new");
            var updbtn = document.getElementById("update");
            var pan = document.querySelector('.inse1');
            var upd = document.querySelector('.inse2');

            function update() {
                pan.style.display = "none";
                upd.style.display = "block";

            }

            function newinsert() {
                pan.style.display = "block";
                upd.style.display = "none";

            }
            </script>
        </div>
        <!-- /. PAGE INNER  -->
    </div>