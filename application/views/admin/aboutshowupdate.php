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
                        AboutUs Update Form
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <form role="form" action="<?php echo base_url('index.php/Admin/supportupdate'); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Support</label><br>
                                            <label>Image</label>
                                            <input type="file" name='supportupdateimg'>

                                            <label>Content</label>
                                            <textarea class="form-control" rows="3" col="3" minlength="126"
                                                maxlength="550" name='supportupdatetext'></textarea>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                        </div>
                                        <input type="hidden" name="valu" value="<?php echo $id ?>" id="hiddenValue">

                                    </form>







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