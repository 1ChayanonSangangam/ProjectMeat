<script src= https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js></script>
<script src= https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js></script>
<div data-ng-app="myApp" data-ng-controller="myCtrl">
            <div class="row w3-right">
                <div class="col-md-10 w3-right">
                        Search :
                    <input type="text" class="search w3-border w3-border-blue w3-round-large w3-right w3-large" data-ng-model="table" />
                </div>
            </div>
             <!-- <div data-pagination=""  data-num-pages="numPages()" data-current-page="currentPage" rotate="true" data-max-size="maxSize" ellipses="false" data-boundary-links="true"></div>
            -->
                <br>
                <br>
                <table>
                <tr class="w3-text-white" style="background-color:#48C9B0">
                    <th>Serial Number</th>
                    <th>Species</th>
                    <th>Added</th>
                    <th>Updated</th>      
                </tr>
                
                <tr data-ng-repeat="customer in people | filter: table">
                    <td><a href ="information_meat.php?ID={{customer.ID}}" style="text-decoration:none; color:#2E86C1;">{{customer.serialnumber}}</td>
                    <td>{{customer.Species}}</td>
                    <td>{{customer.Added}}</td> 
                    <td>{{customer.Updated}}</td>               
                </tr>           
                </table> 
            </div> 
           
         
</div>
<script>
var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('myCtrl', function($scope) {
  $scope.customers = [
    <?php 
    for ($i=0;$i<count($result);$i++)
    {
        echo "{
            'ID': '".$result[$i][0]."',
            'serialnumber': '".$result[$i][1]."',
            'Species': '".$result[$i][2]."',
            'Added': '".$result[$i][3]."',
            'Updated': '".$result[$i][4]."'
        },";
    }
    ?>
],
  $scope.people=[],
  $scope.currentPage = 1,
  $scope.numPerPage = 30,
  $scope.maxSize = 3;

  $scope.numPages = function () {
    return Math.ceil($scope.customers.length / $scope.numPerPage);
  };
  
  $scope.$watch('currentPage + numPerPage', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    , end = begin + $scope.numPerPage;
    
    $scope.people = $scope.customers.slice(begin, end);
  });
  
  
});

$('.pagination li').on('click', function(event) {
  event.preventDefault();
  var $this = $(this),
      $pagination = $this.parent(),
      $pages = $pagination.children(),
      $active = $pagination.find('.active');
  
  if($this.hasClass('prev')) {
    if ($pages.index($active) > 1) {
      $active.removeClass('active').prev().addClass('active');
    }
  } else if($this.hasClass('next')) {
    if ($pages.index($active) < $pages.length - 2) {
      $active.removeClass('active').next().addClass('active');
    }
  } else {
    $this.addClass('active').siblings().removeClass('active');
  }
  
  $active = $pagination.find('.active');
  
  $('.prev')[$pages.index($active) == 1 ? 'addClass' : 'removeClass']('disabled');
  $('.next')[$pages.index($active) == $pages.length - 2 ? 'addClass' : 'removeClass']('disabled');
  
});

$('.pagination li:eq(1)').trigger('click');

</script>