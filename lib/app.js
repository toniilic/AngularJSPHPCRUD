var app = angular.module('App', []);

app.controller('TaskController', ['$scope', '$http', function($scope, $http) {

}]);

// Add new task
$scope.addTask = function () {
    $http.post('script/create.php', {
        task: $scope.task
    })
        .then(function success(e) {

            $scope.errors = [];

            $scope.tasks.push(e.data.task);

            var modal_element = angular.element('#add_new_task_modal');
            modal_element.modal('hide');
        }, function error(e) {
            $scope.errors = e.data.errors;
        });
};