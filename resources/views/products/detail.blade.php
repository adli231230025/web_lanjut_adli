<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <p><strong>Nama Produk:</strong> {{ $products['name'] }}</p>
            <p><strong>Harga:</strong> Rp{{ number_format($products['price'], 0, ',', '.') }}</p>
</body>
</html>