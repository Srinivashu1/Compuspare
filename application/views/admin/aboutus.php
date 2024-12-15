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

        .t {
            height: 100px;
            width: 150px;
        }
        .cont{
            width: 500px;
            text-align: justify;
        }
        .btntb{
            width: 200px;
        }
        td a i{
            margin-top: 40px;
            margin-left: 10px;
        }
        .imgs p{
            margin-top: 15px;
        }
        .i p{
            margin-top: 15px;
        }
    </style>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/admin/aboutshownew"><i
                            class="fa fa-edit"></i> Insert </a></button>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        About Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="text-center table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SNO</th>
                                        <th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Image Size</th>
                                        <th style="text-align: center;">Content</th>
                                        <th style="text-align: center;">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($about as $row): ?>
                                        <tr>
                                            <td class="i"><p><?php echo $i; ?></p></td>
                                            <td><img class="imgn"
                                                    src="<?php echo base_url() . "/uploads/" . $row['img']; ?>" />
                                            </td>
                                            <td class="imgs"><p>50X50</p></td>
                                            <td class="cont"><?php echo $row['content']; ?></td>
                                            <td class="btntd"> <a
                                                    href="<?php echo base_url(); ?>index.php/admin/aboutshowupdate?id=<?php echo $row['id']; ?>"><i
                                                        class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    href="<?php echo base_url(); ?>index.php/admin/slidedelete?id=<?php echo $row['id']; ?>&slide=<?php echo $row['img']; ?>&tname=support"><i
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