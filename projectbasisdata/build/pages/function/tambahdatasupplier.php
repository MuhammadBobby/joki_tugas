<?php
session_start();

// pemeriksaan session login
if (!isset($_SESSION["login"])) {
    header("Location: ../../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="../../assets/img/logo.jpeg" />
    <title>Form Tambah Data Supplier</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
</head>

<body class="bg-green-200  p-6">
    <div class="max-w-xl mx-auto  rounded p-8 shadow-md outline outline-2  outline-offset-2 outline-green-500 bg-slate-200">
        <h2 class="text-2xl font-bold mb-3 text-slate-600 text-center ">Tambah Data Supplier</h2>
        <h6 class="text-sm  mb-5 text-slate-500 ">*harap isi data Supplier sesuai data yang ada</h6>
        <form action="prosestambahSupplier.php" method="post" class="space-y-4 ">
            <div>
                <label for="id" class="block text-sm font-medium text-gray-600">ID Supplier</label>
                <input type="text" id="id_supplier" name="id" placeholder="masukkan id Supplier" class="mt-1 p-2 w-full border rounded-md " required>
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-600">Nama Supplier</label>
                <input type="text" id="nama_supplier" name="nama" placeholder="masukkan nama Supplier" class="mt-1 p-2 w-full border rounded-md" required>
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat Supplier</label>
                <textarea id="alamat_supplier" name="alamat" placeholder="masukkan alamat Supplier" class="mt-1 p-2 w-full border rounded-md" required></textarea>
            </div>
            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-600">No Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="masukkan nomor telepon Supplier" class="mt-1 p-2 w-full border rounded-md" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>

    <p class="mt-4 text-lg text-gray-600 text-center">Tidak ingin menambahkan data? <a href="../dataSupplier.php" class="text-blue-700 no-underline hover:underline">Klik kembali</a></p>
</body>

</html>