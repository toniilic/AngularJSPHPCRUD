<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AngularJS Task Application</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>
<body ng-app="App">

<div ng-controller="TaskController">

    <!-- Content Section -->
    <!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>AngularJS PHP CRUD Operations Using PDO Connection</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_task_modal">Add Task
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Tasks:</h3>
                <table ng-if="tasks.length > 0" class="table table-bordered table-responsive table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <tr ng-repeat="task in tasks">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ task.name }}</td>
                        <td>{{ task.description }}</td>
                        <td>
                            <button ng-click="edit($index)"  class="btn btn-primary btn-xs">Edit</button>
                            <button ng-click="delete($index)" class="btn btn-danger btn-xs">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /Content Section -->

</div>

<!-- Jquery JS file -->
<script type="text/javascript" src="lib/jquery-1.11.3.min.js"></script>

<!-- AngularJS file -->
<script type="text/javascript" src="lib/angular.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="lib/app.js"></script>
</body>
</html>