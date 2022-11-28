<?php
session_start();
include('../db/connexion.php');
/* if($_SESSION['loggedin'] = TRUE){
     echo $_SESSION['name'];
     echo $_SESSION['id'] ;
   }else{
     echo "echec";
   }*/
if (!isset($_SESSION['loggedin'])) {
    header('refresh:0;url=404.php'); //2 s
    exit();
}
if (isset($_POST["sville"])) {
    $search = $_POST["sville"];
    $stmt = $conn->prepare("select * FROM `ville` where code LIKE CONCAT('%',?,'%') OR nom Like CONCAT('%',?,'%')");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <tr id=" . $row["code"] . ">
                    <td><strong>" . $row["code"] . "</strong></td>
                    <td data-target=\"name\">" . $row["nom"] . "</td>
                    <td data-target=\"region\">" . $row["region"] . "</td>";
            if ($_COOKIE['type_user'] == 1) {
                echo "<td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                        </button>
                        <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                        <a class=\"dropdown-item\" href=ville.php?id_del=" . $row["code"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>";
            } else {
                echo "<td>
                    <div class=\"dropdown\">
                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                        </button>
                        <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-role=\"update\" data-id=" . $row["code"] . " data-bs-target=\"#modalup\" href=\"#\"><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                        </div>
                    </div>
                </td>
            </tr>";
            }
        }
    } else {
    $stmt = $conn->prepare("select * FROM `ville`");
}
}
?>