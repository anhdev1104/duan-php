<?php
$pdo = pdo_get_connection();

// Câu truy vấn SQL để lấy dữ liệu
$query = $pdo->query("SELECT category_name, COUNT(product.category_id) AS total_quantity 
                     FROM category 
                     LEFT JOIN product ON category.id_category = product.category_id 
                     GROUP BY category.id_category");

$data = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    // Sử dụng dữ liệu trong mỗi dòng
    $data[] = $row;
}
?>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div style="width: 80%; margin: 20px auto;">
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>

    <script>
        // Get the canvas element
        var ctx = document.getElementById('myChart').getContext('2d');

        // Create an empty data array for the chart
        var data = {
            labels: [],
            datasets: [{
                label: 'Sản phẩm',
                backgroundColor: 'rgba(75, 192, 192, 0.7)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                borderRadius: 10,
                data: [],
            }]
        };

        // Fill the labels and data arrays with PHP data
        <?php
        foreach ($data as $value) {
            echo "data.labels.push('" . $value['category_name'] . "');";
            echo "data.datasets[0].data.push(" . $value['total_quantity'] . ");";
        }
        ?>

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Thống kê tổng sản phẩm trong từng danh mục',
                        padding: {
                            top: 10,
                            bottom: 15
                        }
                    }
                }
            }
        });
    </script>

