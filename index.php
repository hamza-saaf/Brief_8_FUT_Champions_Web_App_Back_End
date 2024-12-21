<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .Fut_logo {
        background-color: blueviolet;
        
        
    }
</style>

<body>
    <section >
        <div class="Fut_logo h-10">
            <h4>FUT Champions</h4>
        </div>
        <div class="flex h-full">
            <div class="w-[150px] bg-violet-300">
                <h4 class="">Dashboard</h4>
                <ul>
                    <li><a href="">Admin</a></li>
                    <li><a href="">User</a></li>
                </ul>
            </div>
            <div class="bg-violet-100 w-full  h-full">
                <?php
                include 'config.php';
                $sql = "SELECT * FROM footballplayers INNER JOIN players ON footballplayers.id_fp = players.id_f_player ;";
                $result = mysqli_query($connect_database, $sql);

                ?>
                <table class="table-auto border-collapse border border-gray-300 text-left text-sm text-gray-700 mx-5">
                    <thead class="bg-violet-200 text-gray-800 uppercase text-xs font-semibold">
                        <tr>
                            <th class="border border-gray-300 text-center px-4 py-4">ID</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Name</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Photo</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Position</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Rating</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Shooting</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Passing</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Dribbling</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Physical</th>
                            <th class="border border-gray-300 text-center px-4 py-4">Actions</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                            <tr class="hover:bg-gray-50 cursor-pointer">
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['id_fp'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['name_p'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2">
                                    <img src="<?php echo $row['photo'] ?>" alt="Player Photo" class="w-12 h-12 rounded-full">
                                </td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['position'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['rating'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['shooting'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['passing'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['dribbling'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2"><?php echo $row['physical'] ?></td>
                                <td class="border border-gray-300 text-center px-4 py-2 text-center">
                                    <i class="fa-solid fa-eye text-blue-500 cursor-pointer"></i>
                                    <i class="fa-solid fa-pen-to-square text-green-500 mx-2 cursor-pointer"></i>
                                    <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                </table>
            </div>
        </div>
    </section>

</body>

</html>