<?php

function mostrarVagas() {
    $sql = "SELECT * FROM `tb_vaga` LEFT JOIN tb_profissao ON tb_vaga.id_profissao = tb_profissao.id_profissao ORDER BY id_vaga DESC, vizualizacoes DESC, titulo ASC LIMIT 5";
    $r = mysqli_query($link, $sql) or die("Erro!");

    while ($a = mysqli_fetch_array($r)){
        $profissao = $a["profissao"];
        $id_vaga = $a["id_vaga"];
        $id = $a["id_profissao"];
        $titulo = $a["titulo"];
        $descricao = $a["descricao"];
        $ativo = $a["ativo"];

        echo "
            <hr />
            <div>
                <div class='container d-block' style='box-shadow: 0 4px 10px 0 rgba(215, 156, 255, 0.3);'>
                        <div class='container'>
                            <br />
                            <span class='d-inline' style='font-size:20px;color:blue'>Vaga de $profissao</span>
                            <br />
                            <span style='font-size:14px'><b>Id: </b>$id_vaga</span>
                            <br />
                            <span style='font-size:14px'><b>Titulo: </b>$titulo</span>
                            <br />
                            <span style='font-size:14px'><b>Descrição: </b>$descricao</span>
                            <br /><br />
                            <a href='?action=detalhes_vaga&id=$id_vaga'><input type='button' class='btn btn-outline-info' style='cursor:pointer' value='Ver mais detalhes...' /></a>
                            <br /><br />
                        </div>
                    </div>
            </div>
            ";
    }
}