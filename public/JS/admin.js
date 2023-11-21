//time dashboard admin
function getTime() {
  var today = new Date();
  var dayText;
  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();
  var days = today.getDay();
  switch(days){
    case 1:
      dayText = 'Thứ hai';
      break;
    case 2:
      dayText = 'Thứ ba';
      break;
    case 3:
      dayText = 'Thứ tư';
      break;
    case 4:
      dayText = 'Thứ năm';
      break;
    case 5:
      dayText = 'Thứ sáu';
      break;
    case 6:
      dayText = 'Thứ bảy';
      break;
    case 0:
      dayText = 'Chủ nhật';
      break;
  }
  var dates = today.getDate();
  var months = today.getMonth();
  var years = today.getFullYear();
  document.getElementById('time').innerHTML = dayText + ", " + dates + "/" + months + "/" + years + " - " + hours + ":" + minutes + ":" + seconds;
  var t = setTimeout(function () { getTime();}, 500);
}

//rich text editor
angular.module("textAngularTest", ['textAngular']);
function wysiwygeditor($scope) {
    $scope.orightml = '';
    $scope.htmlcontent = $scope.orightml;
    $scope.disabled = false;
};
// biểu đồ
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Doanh thu',
        fill: true,
        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Màu nền
        borderColor: 'rgba(75, 192, 192, 1)', // Màu viền
        data: [1000, 1500, 2000, 2500, 3000, 2500, 3000] // Dữ liệu
    }]
};

// Tùy chọn biểu đồ
var options = {
    responsive: true,
    title: {
        display: true,
        text: 'Biểu đồ doanh thu hàng tháng'
    },
    scales: {
        x: {
            display: true,
            title: {
                display: true,
                text: 'Tháng'
            }
        },
        y: {
            display: true,
            title: {
                display: true,
                text: 'Doanh thu (USD)'
            }
        }
    }
};

// Tạo biểu đồ vùng
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});

