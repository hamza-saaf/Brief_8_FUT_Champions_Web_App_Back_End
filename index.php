<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="styes/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    .dark .dark\:bg-violet-300 {
        background-color: #5a4db8;
    }

    .dark .dark\:bg-violet-200 {
        background-color: #7d6fce;
    }
</style>

<body class="bg-violet-100 dark:bg-gray-900 dark:text-white">
    <header class="flex items-center justify-between text-white px-6 py-4">
        <div class="flex items-center space-x-3">
            <div class="rounded-full  p-2">
                <img src="images/logo_fut.png" alt="Logo" class="w-12 h-12">
            </div>
            <h4 class="text-lg font-bold">FUT Champions</h4>
        </div>
        <button id="toggleTheme" class="text-sm px-4 py-2 bg-gray-200 dark:bg-gray-800 dark:text-gray-200 rounded"><i class="fa-solid fa-circle-half-stroke"></i></button>
        <?php include 'Crud.php/add.php'; ?>
    </header>

    <section class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-[150px] bg-violet-300 dark:bg-violet-700 p-4 text-sm">
            <h4 class="mb-4 font-semibold">Dashboard</h4>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Admin</a></li>
                <li><a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">User</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-violet-100 dark:bg-gray-800 p-6">
            <?php
            include 'config.php';
            $sql = "SELECT * FROM footballplayers INNER JOIN players, nationalitys, clubs where footballplayers.id_fp = players.id_f_player and
                    footballplayers.id_fp = nationalitys.id and footballplayers.id_fp = clubs.id ;
           
            
            ";
            $result = mysqli_query($connect_database, $sql);
            ?>
            <!-- Players Table -->
            <table class="table-auto border-collapse w-full text-left text-sm text-gray-700 dark:text-gray-200">
                <thead class="bg-violet-200 dark:bg-violet-300 uppercase text-xs font-semibold">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-center">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Photo</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Flag</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Position</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Logo</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Rating</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Shooting</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Passing</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Dribbling</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Physical</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['id_fp'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['name_p'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <img src="<?php echo $row['photo'] ?>" alt="Player Photo" class="w-12 h-12 rounded-full mx-auto">
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <img src="<?php echo $row['flag'] ?>" alt="Player flag" class="w-12 h-12 rounded-full mx-auto">
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['position'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <img src="<?php echo $row['logo'] ?>" alt="Player logo" class="w-12 h-12 rounded-full mx-auto">
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['rating'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['shooting'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['passing'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['dribbling'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['physical'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <i class="fa-solid fa-eye text-blue-500 cursor-pointer"></i>
                                <i class="fa-solid fa-pen-to-square text-green-500 mx-2 cursor-pointer"></i>
                                <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Gollkeeper Table -->
        </main>
    </section>
   
    <script src="js/main.js"></script>
</body>

</html>