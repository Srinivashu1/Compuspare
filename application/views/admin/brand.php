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
        width: 20px;
        margin-right: 20px;
        margin-top: 45px;
        
    }
    td{
        text-align: center;
    }

    .t {
        height: 100px;
        width: 150px;
    }
    .imgtb{
        width: 100px;
    }
    .cont p{
        margin-top: 20px;
    }
    .i p{
        margin-top: 15px;
    }
    </style>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>admin/brandshownew"><i
                            class="fa fa-edit"></i> Insert </a></button>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Brand Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr >
                                        <th class="text-center">SNO</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Image Size</th>
                                        <th class="text-center">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($brand as $row): ?>
                                    <tr>
                                        <td class="i"><p><?php echo $i; ?></p></td>
                                        <td class="imgtd"><img class="imgn"
                                                src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" />
                                        </td>
                                        <td class="cont"><p>50X50</p></td>

                                        <td>

                                            <a
                                                href="<?php echo base_url(); ?>admin/brandshowupdate?id=<?php echo $row['id']; ?>"><i
                                                    class="fa fa-edit"></i>
                                            </a>

                                            <a
                                                href="<?php echo base_url(); ?>admin/updatestatusf?id=<?php echo $row['id']; ?>&status=1&tname=brand"><i
                                                    class="fa fa-check-circle"></i>
                                            </a>


                                            <a
                                                href="<?php echo base_url(); ?>admin/updatestatusf?id=<?php echo $row['id']; ?>&status=0&tname=brand"><i
                                                    class="fa fa-times-circle"></i>
                                            </a>
                                            <a
                                                href="<?php echo base_url(); ?>admin/slidedelete?id=<?php echo $row['id']; ?>&slide=<?php echo $row['img']; ?>&tname=brand"><i
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