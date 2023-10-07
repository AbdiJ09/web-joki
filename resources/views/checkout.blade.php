<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <h1>Checkout</h1>
    <p>Total Belanja: Rp. 100,000</p>

    <form method="POST" action="{{ url('/checkout/process') }}">
        @csrf
        <input type="number" name="id" id="">
        <input type="hidden" name="amount" value="100000">
        <label for="payment-method">Pilih Metode Pembayaran:</label>
        <select id="payment-method" name="payment_method">
            <option value="gopay">GoPay</option>
            <option value="ovo">OVO</option>
            <!-- Tambahkan opsi metode pembayaran lainnya jika diperlukan -->
        </select>
        <br>
        <button type="submit">Bayar Sekarang</button>
    </form>
</body>

</html>
