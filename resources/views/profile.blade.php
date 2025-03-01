<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animated-text {
            background-size: 200% 200%;
            animation: gradientMove 3s infinite alternate ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center h-screen">
    <div class="bg-white shadow-2xl rounded-2xl p-6 w-96 text-center transform transition duration-500 hover:scale-105">
        <img class="w-24 h-24 mx-auto rounded-full border-4 border-blue-500 shadow-lg" src="/img/foto.jpeg" alt="Profile Picture">
        <div class="mt-6 space-y-3">
            <div class="bg-gradient-to-r from-pink-500 to-purple-700 text-white font-bold py-2 rounded-md mb-2 text-lg animated-text shadow-md">
                <?= $nama ?>
            </div>
            <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white font-semibold py-2 rounded-md mb-2 shadow-md animated-text"> <?= $kelas ?> </div>
            <div class="bg-gradient-to-r from-yellow-400 to-red-500 text-white font-semibold py-2 rounded-md shadow-md animated-text"> <?= $npm ?> </div>
        </div>
    </div>
</body>
</html>
