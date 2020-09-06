
<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "mysql669.umbler.com:41890";
    $user = "leandrodomingues";
    $senha = "a36825700";
    $base = "ventodedeus";
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM Post";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM Post WHERE link like '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>titulo</th>
                            <th>subtitulo</th>
                            <th>texto</th>
                            <th>link</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["titulo"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["subtitulo"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["texto"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["link"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>