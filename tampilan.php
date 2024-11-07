<?php
include 'config.php'; // Mengimpor file koneksi

// Query untuk mengambil data dari beberapa tabel
$sql = "SELECT products.ProductID, products.ProductName, categories.CategoryName, suppliers.CompanyName, products.UnitPrice
        FROM products
        JOIN categories ON products.CategoryID = categories.CategoryID
        JOIN suppliers ON products.SupplierID = suppliers.SupplierID";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>CategoryName</th>
            <th>CompanyName</th>
            <th>UnitPrice</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Menampilkan data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ProductID'] . "</td>";
                echo "<td>" . $row['ProductName'] . "</td>";
                echo "<td>" . $row['CategoryName'] . "</td>";
                echo "<td>" . $row['CompanyName'] . "</td>";
                echo "<td>" . $row['UnitPrice'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        ?>

    </table>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
