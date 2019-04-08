<?php
include("../req/head-open.php");
?>

<link rel="stylesheet" href="../vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<?php
include("../req/head-close.php");
include("../req/menu.php");
include("../req/header.php");
?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Stories</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Chapters</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>The Trafic Light</td>
                                    <td>13:29:10</td>
                                    <td>15</td>
                                    <td><button class = "btn btn-sm btn-danger col-lg-12" data-toggle="modal" data-target="#largeModal">CHANGE LOG</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Activities</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Stories</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Story Title</th>
                                        <th>Description</th>
                                        <th>Genre</th>
                                        <th>Change Date</th>
                                        <th>Account ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The red fox with big eyes</td>
                                        <td>Somehow There is a fox with big eyes</td>
                                        <td>Comedy</td>
                                        <td>14/02/2019 13:34:45</td>
                                        <td>joshuanata</td>
                                    </tr>
                                    <tr>
                                        <td>The red fox with big eyes</td>
                                        <td>Somehow There is a lion with big eyes</td>
                                        <td>Thriller</td>
                                        <td>12/02/2019 12:11:23</td>
                                        <td>chris</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLose</button>
            </div>
        </div>
    </div>
</div>
<?php 
include("../req/footer.php");
include("../req/close.php");

?>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/js/init-scripts/data-table/datatables-init.js"></script>
