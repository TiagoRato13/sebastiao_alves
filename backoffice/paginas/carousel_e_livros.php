<?php

$sql = "SELECT * FROM livros";
$c_e_l = selectSQL($sql);

?>
 
    <main>

        <div class="box">

            <table>
                <tr>
                    <th>Capa</th>
                    <th>Activo</th>
                    <th>Observações</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Em destaque</th>
                    <th>Imagem Desktop</th>
                    <th>Imagem Mobile</th>
                    <th>Acção</th>
                </tr>

                <?php foreach($c_e_l as $cl): ?>

                    <tr class="<?=($cl["activo"]) ? "" : "desactivo" ;?>">
                        <td><img src="<?= $cl["capa"]; ?>" alt="imagem"></td>
                        <td><?= ($cl["activo"] == 1) ? 'SIM' : 'NÃO'; ?></td>
                        <td><?= $cl["observacoes"]; ?></td>
                        <td><?= $cl["titulo"]; ?></td>
                        <td><?= substr($cl["texto"],0,100); ?></td>
                        <td><?= ($cl["destaque"] == 1) ? 'SIM' : 'NÃO'; ?></td>
                        <td><img src="<?= $cl["imagem_desktop"]; ?>" alt="img desktop"></td>
                        <td><img src="<?= $cl["imagem_mobile"]; ?>" alt="img"></td>
                        <td>
                            <a href="editar_carousel_e_livros.php?id=<?= $cl["id"]; ?>">
                                <button class="botao">Editar</button>
                            </a>

                            <br><br><br>

                            <a href="apagar_carousel_e_livros.php?id=<?= $cl["id"]; ?>">
                                <button onclick="return confirm('De certeza que deseja apagar este livro?')" class="botao">Apagar</button>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                
            </table>

        </div>

        
        <br><br><br>

        <a href="adicionar_livro_carousel_e_livros.php">
            <button class="botao">Adicionar novo livro</button>
        </a>

    </main>