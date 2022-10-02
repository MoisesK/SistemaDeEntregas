<h1>{{HomeName}} </h1>
<hr>

<section id="form">
    <form method="POST">

        <div class="form-group">
            <label>Nome e Sobrenome</label>
            <input type="text" class="form-control" name="nome-entregador" required>
        </div>

        <div class="form-group">
            <label>Cidade-UF</label>
            <input type="text" class="form-control" name="local-entregador" required>
        </div>

        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" class="form-control" name="nascimento-entregador" required>
        </div>

        <div class="form-group">
            <label>Idade</label>
            <input type="date" class="form-control" name="idade-entregador" required>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-success" type="submit">CADASTRAR ENTREGADOR</button>
        </div>
    </form>
</section>
