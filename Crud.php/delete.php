<?php
include '../config.php';
if (isset($_GET['id_fp'])) {
    $id_fp = intval($_GET['id_fp']); 
    $query = "UPDATE FootballPlayers SET deleted_at = NOW() WHERE id_fp = ?";
    $stmt = mysqli_prepare($connect_database, $query);

    mysqli_stmt_bind_param($stmt, "i", $id_fp);

    if (mysqli_stmt_execute($stmt)) {
        echo "Player marked as deleted successfully";
    } else {
        echo "Error marking player as deleted: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connect_database );

    header('Location: ../index.php');
    exit();
} else {
    echo "No player ID provided";
}
?>
