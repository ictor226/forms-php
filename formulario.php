<html lang="pt-br">


<!--


METODO DE ENVIO 

-->



<form action="./aluno-cadastrar.php" method="POST">

    <h2>formulario</h2>


    <input type="text" placeholder="nome" name="nome">

    <input type="number" placeholder="telefone" name="tel">

    <input type="email" placeholder="email" name="email">

    <input type="date" placeholder="nascimento" name="nasc">

    <div>
        <label> FREQUENTE? </label>
    <input type="checkbox" name="frequente">
    </div>


    <input type="file" accept="image/*" name="img">

    <input type="submit">

</form>
