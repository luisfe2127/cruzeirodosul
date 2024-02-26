
header("Content-Type: text/html; charset=utf-8");

echo “Dados recebidos do formulário!!!<br/><br/>”; 

echo “Você digitou:<br />”;

echo “Nome: “ .$_POST[“nome”].”<br />”;
echo “Sexo: “ .$_POST[“sexo”].”<br />”;
echo “Região: “ .$_POST[“regiao”]. <br />”;
echo “Comente sobre o formulário: “ .$_POST[“coment”]. <br />”;