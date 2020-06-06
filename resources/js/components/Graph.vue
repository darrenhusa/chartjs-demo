import Chart from 'chart.js';


export default {
    template: '<canvas width="600" height="400"></canvas>',

    <!-- data: {
      labels: ['January', 'Febuary', 'March'],

      datasets: [
        {
          label: 'revenue',
          // backgroundColor: 'blue',
          backgroundColor: 'rgb(200, 220, 220, 0.2)',
          // borderColor: 'red',
          borderColor: 'rgb(220, 220, 220, 0.2)',
          // borderWidth: 1,

          data: [30, 122, 90]
        }
      ]
    }, -->

    <!-- options: {}, -->

    mounted() {
      var context = document.getElementById('graph').getContext('2d');

      var myChart = new Chart(context, {
        type: 'line',
        data: {
          labels: ['January', 'Febuary', 'March'],

          datasets: [
            {
              label: 'revenue',
              // backgroundColor: 'blue',
              backgroundColor: 'rgb(200, 220, 220, 0.2)',
              // borderColor: 'red',
              borderColor: 'rgb(220, 220, 220, 0.2)',
              // borderWidth: 1,

              data: [30, 122, 90]
            }
          ]
        },

        options: {},
      });

    }
}
