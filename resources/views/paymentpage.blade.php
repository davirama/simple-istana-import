<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pembayaran</title>
    <!-- Tambahkan tautan ke file CSS Tailwind CSS Anda di sini -->
    <link rel="stylesheet" href="path/to/tailwind.css">
</head>
<body>
    <div class="max-w-md mx-auto mt-5 p-6 bg-white rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Buat Pembayaran</h1>

        <form action="{{ route('payments.create') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="item_name" class="block text-gray-600 text-sm font-medium">Nama Item</label>
                <input type="text" name="item_name" id="item_name" class="form-input" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-600 text-sm font-medium">Harga</label>
                <input type="number" name="price" id="price" class="form-input" required>
            </div>
            <div class="mb-4">
                <label for="customer_first_name" class="block text-gray-600 text-sm font-medium">Nama Pelanggan</label>
                <input type="text" name="customer_first_name" id="customer_first_name" class="form-input" required>
            </div>
            <div class="mb-4">
                <label for="customer_email" class="block text-gray-600 text-sm font-medium">Email Pelanggan</label>
                <input type="email" name="customer_email" id="customer_email" class="form-input" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Buat Pembayaran</button>
            </div>
        </form>
    </div>

    <!-- Tambahkan script JavaScript yang diperlukan di sini (jika ada) -->

</body>
</html>
