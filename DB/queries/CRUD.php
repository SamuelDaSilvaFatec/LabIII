<?php 
    $op = $_POST["op"];
    
    if (isset($op)) {
        include "DB/connect.php";

        extract($_POST);
        
        switch($op) {
            case 1:
                $query = $conn->query("INSERT INTO $disciplina (pergunta, resposta) 
                    values ('$pergunta','$resposta');");
                break;
            case 2: 
                $query = $conn->query("SELECT * from $disciplina;");
                echo "
                    <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">$disciplina</th>
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
                break;
            case 3:
                try {
                    $query = $conn->query("UPDATE $disciplina SET pergunta = '$pergunta',
                        resposta ='$resposta' WHERE id = $id;");

                } catch (PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                }
                break;
            case 4:
                $query = $conn->query("delete from $disciplina where id = $id;");
                break;
            default:
                echo "aaaaa";
        }
        $conn = null;
    } 	
?>