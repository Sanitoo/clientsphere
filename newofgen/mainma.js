const chart = document.querySelector("#chart").getContext('2d');
new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
        datasets: [{
                label: 'Sales',
                data: [10, 2183, 2492, 2722, 3892, 4243, 5422, 6941, 8227, 9098, 10342, 12934],
                borderColor: 'blue',
                borderWidth: 2,

            },
            {
                label: 'Expenses',
                data: [10, 1883, 1932, 2354, 2892, 3243, 4522, 5441, 6727, 7098, 8742, 10934],
                borderColor: 'red',
                borderWidth: 2

            },
            {
                label: 'Income',
                data: [10, 1423, 2292, 2642, 3892, 4243, 4652, 5441, 6327, 7698, 9342, 8934],
                borderColor: 'green',
                borderWidth: 2

            }

        ]
    },
    options: {
        responsive: true
    }
});
