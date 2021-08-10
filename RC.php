<?php 
    include "includes/header.php";
?>
    <script>
        document.title = "Redes de Computadores";
    </script>
<?php

    header ("Expires: on, 01 Jan 2000 00:00:00 GMT");
    header ("Cache-Control: no-store, no-cache, must-revalidate");
    header ("Cache-Control: post-check=0, pre-check=0", false);
    header ("Pragma: no-cache");

    include "DB/config/config.php";
    include "DB/connect.php";

    $query = $conn->query("SELECT * from RC;");
    
    echo "
        <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">RC</th>
            <th scope=\"col\">Pergunta</th>
            <th scope=\"col\">Resposta</th>
        </tr>
        </thead>
        <tbody>
    ";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "  
            <tr>
              <th scope=\"row\">{$row['id']}</th>
              <td>{$row['pergunta']} </td>
              <td>{$row['resposta']}</td>
            </tr>
        ";
    }
    echo "</tbody> </table>";
    include "includes/footer.php"; 
?>