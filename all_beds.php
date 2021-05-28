<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">All Beds</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">

    <div class="box-header well" data-original-title="">

        <h2><i class="glyphicon glyphicon-user"></i> Beds info</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="form-group has-success col-md-3">
        <label class="control-label" for="inputSuccess1">Bed number</label>
        <input type="text" class="form-control" id="inputSuccess1">
    </div>               
     <div class="form-group has-success col-md-3">
        <label class="control-label" for="inputSuccess1">Room number</label>
        <input type="text" class="form-control" id="inputSuccess1">
    </div>                
    <div class="form-group has-success col-md-3">
        <label class="control-label" for="inputSuccess1">Floor/Block</label>
        <input type="text" class="form-control" id="inputSuccess1">
    </div>     
    <div class="form-group has-success col-md-3">
        <label class="control-label" for="inputSuccess1">Click to save</label>
        <input type="submit" class="btn btn-success btn-block" value="Save" id="inputSuccess1">
    </div> 
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Bed ID</th>
        <th>Room ID</th>
        <th>Floor/Block</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>001</td>
        <td class="center">F37</td>
        <td class="center">B</td>
        <td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
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