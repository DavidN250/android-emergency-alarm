<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Notifications</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">

    <div class="box-header well" data-original-title="">

        <h2><i class="glyphicon glyphicon-user"></i> Notifications</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Date & Time</th>
        <th>Level</th>
        <th>Body</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td class="center">2021-12-01 12:08:21</td>
        <td class="center">
            <span class="label-danger label label-default">Danger</span>
        </td>
        <td class="center">There was a frequent help request from Room F37 on bed 001 </td> 
        <td class="center">
            <span class="label-warning label label-default">Unread</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Read
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td class="center">2021-13-01 12:08:21</td>
        <td class="center">
            <span class="label-info label label-default">&nbsp;&nbsp;Info&nbsp;&nbsp;</span>
        </td>
        <td class="center">There was a  help request from a bed with no patient </td> 
        <td class="center">
            <span class="label-warning label label-default">Unread</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Read
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>

    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

<?php require('footer.php'); ?>