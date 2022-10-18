<?php

$sql = "SELECT * FROM imprensa";
$imprensa = selectSQL($sql);

?>
 
    <main>

        <br><br>

        <div class="box">

            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Data</th>
                    <th>Acção</th>
                </tr>

                <?php foreach($imprensa as $i): ?>

                    <tr>
                        <td><img src="<?= $i["imagem"]; ?>" alt="imagem"></td>
                        <td><?= $i["titulo"]; ?></td>
                        <td><?= substr($i["texto"],0,100); ?></td>
                        <td><?= $i["data"]; ?></td>
                        <td>
                            <a href="editar_imprensa.php?id=<?= $i["id"]; ?>">
                                <button class="botao">Editar</button>
                            </a>

                            <br><br><br>

                            <a href="apagar_imprensa.php?id=<?= $i["id"]; ?>">
                                <button onclick="return confirm('De certeza que deseja apagar este destaque?')" class="botao">Apagar</button>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                
            </table>

        </div>

        
        <br><br><br>
        
        <a href="adicionar_imprensa.php">
            <button class="botao">Adicionar novo destaque</button>
        </a>
        

    </main>