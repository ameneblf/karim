<?php
session_start();
include('db/connexion.php');
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
if (isset($_POST["adr"])) {
    $search = $_POST["adr"];
    $stmt = $conn->prepare("select * FROM `adhesion` where registre LIKE CONCAT('%',?,'%') OR entreprise Like CONCAT('%',?,'%')");
    $stmt->bind_param("is", $search, $search);

    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td><strong>" . $row["registre"] . "</strong></td>
                <td>" . $row["entreprise"] . "</td>
                <td>" . $row["numreg"] . "</td>
                <td>" . $row["numnat"] . "</td>
                <td>" . $row["date_ad"] . "</td>";
            if ($_COOKIE['type_user'] == 1) {
                echo "<td>
                  <div class=\"dropdown\">
                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                      <i class=\"bx bx-dots-vertical-rounded\"></i>
                    </button>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#modal" . $row["registre"] . "\" href=adhesion.php?id_edhesion=" . $row["registre"] . "><i class=\"bx bx-edit-alt me-1\"></i> Edit</a>
                      <a class=\"dropdown-item\" href=adhesion.php?id_del=" . $row["registre"] . "><i class=\"bx bx-trash me-1\"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>";
            } else {
                echo "<td>
                  NULL
                </td>
              </tr>";
            }
            echo "<div class=\"modal fade\" id=\"modal" . $row["registre"] . "\" tabindex=\"-1\" style=\"display: none;\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
  <form action=\"\" method=\"POST\">
  <div class=\"modal-content container-xxl\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"modalCenterTitle\">Edite l'adhésion de " . $row["entreprise"] . "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"card-body\">
            <div class=\"row g-2\">
              <div class=\"col mb-0\" style=\" display:none\">
                <label class=\"form-label\" for=\"basic-icon-default-company\">entreprise</label>
                <div class=\"input-group input-code\">
                  <span id=\"basic-icon-code\" class=\"input-group-text\"></span>
                  <input type=\"text\"  value=" . $row["entreprise"] . " required name=\"entreprise\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                </div>
              </div>
              <div class=\"col mb-0\" style=\" display:none\">
                <label class=\"form-label\" for=\"basic-icon-default-company\">registre</label>
                <div class=\"input-group input-code\">
                  <span id=\"basic-icon-code\" class=\"input-group-text\"></span>
                  <input type=\"number\" value=" . $row["registre"] . " required name=\"registre\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                </div>
              </div>
              <div class=\"col mb-0\">
                <label class=\"form-label\" for=\"basic-icon-default-company\">Numéro régional</label>
                <div class=\"input-group input-code\">
                  <span id=\"basic-icon-code\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                  <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["numreg"] . " required name=\"numreg\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                </div>
              </div>
              <div class=\"col mb-0\">
                <label class=\"form-label\" for=\"basic-icon-default-note\">Numéro national</label>
                <div class=\"input-group input-group-merge\">
                  <span id=\"basic-icon-default-objects-horizontal-left\" class=\"input-group-text\"><i class=\"bx bx-trending-up\"></i></span>
                  <input type=\"number\" max=\"10000\" min=\"0\" value=" . $row["numnat"] . " name=\"numnat\" id=\"basic-icon-code\" class=\"form-control\" placeholder=\"XXXXX\" aria-label=\"numreg\" aria-describedby=\"basic-icon-default-numreg\">
                </div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"basic-icon-default-note\">date d'adhésion</label>
              <div class=\"input-group input-group-merge\">
                <span id=\"basic-icon-default-note\" class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                <input class=\"form-control\" name=\"date_ad\" value=" . $row["date_ad"] . " required type=\"date\" value=\"\" id=\"html5-datetime-local-input\">
              </div>
            </div>
            <button type=\"submit\" name=\"upadhesion\" class=\"btn btn-primary\">éditer</button>
        </form>
    </div>
    </div>";
        }
    }
} else {
    $stmt = $conn->prepare("select * FROM `adhesion`");
}
?>