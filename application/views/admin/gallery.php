<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">

        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Panel</a></li>
            <li class="active">Table</li>
        </ol>
    </div>
    <style>
        .imgn {
            height: 100px;
            width: 150px;
        }
        td a i{
            margin-top: 45px;
            margin-right: 15px;
        }
        td{
            text-align: center;
        }

        .t {
            height: 100px;
            width: 150px;
        }
        td p{
            margin-top: 20px;
        }
    </style>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/admin/galleryshownew"><i
                            class="fa fa-edit"></i> Insert </a></button>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gallery Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SNO</th>
                                        <th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Image size</th>
                                        <th style="text-align: center;">Operation</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($gallery as $row): ?>
                                        <tr>
                                            <td><p><?php echo $i; ?></p></td>
                                            <td><img class="imgn"
                                                    src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" />
                                            </td>
                                            <td><p>50X50</p></td>

                                            <td>
                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/galleryshowupdate?id=<?php echo $row['id']; ?>"><i
                                                        class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/updatestatusf?id=<?php echo $row['id']; ?>&status=1&tname=gallery"><i
                                                        class="fa fa-check-circle"></i>
                                                </a>


                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/updatestatusf?id=<?php echo $row['id']; ?>&status=0&tname=gallery"><i
                                                        class="fa fa-times-circle"></i>
                                                </a>

                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/slidedelete?id=<?php echo $row['id']; ?>&slide=<?php echo $row['img']; ?>&tname=gallery"><i
                                                        class="fa fa-trash"></i>
                                                </a>

                                            </td>


                                        </tr>
                                    <?php $i++; endforeach; ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

        <!-- /. ROW  -->
        <footer>
            <p>All right reserved.<a href="#">Bright Technologies</a></p>
        </footer>
    </div>

</div>