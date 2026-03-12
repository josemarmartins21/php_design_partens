<?php
/**
 * Abertura do arquivo ou leitura
 */
/* $handler = fopen("teste.txt", 'r');


while (feof($handler) === false) {
    print fgets($handler, 4096);

}
fclose($handler); */

/**
 * Escrita no arquivo
*/
/* $handler = fopen("teste.txt", "w");

fwrite($handler, "LINHA NOVA1" . PHP_EOL);
fwrite($handler, "LINHA NOVA2". PHP_EOL);
fwrite($handler, "LINHA NOVA3"); */
// print file_get_contents("teste.txt");

/* file_put_contents("teste.txt", "a\nb\nc"); */

/* $arquivo = file("teste.txt");
foreach ($arquivo as $linha) {
    print $linha;
} */

/* copy("teste.txt", "dir/novo.txt"); */
/* rename("teste.txt", "dir/novo2.txt"); */
/* unlink("dir/novo2.txt"); */
/* if (file_exists("dir/novo.txt")) {
    echo "existe";
} */
/* mkdir("jogos"); */
/* rmdir("jogos"); */
$arquivos = scandir("dir");

foreach ($arquivos as $arquivo) {
    print $arquivo . PHP_EOL;
}

