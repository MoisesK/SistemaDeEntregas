<h1>{{HomeName}} </h1>
<hr>

<section id="form">
    <form method="POST">

        <div class="form-group">
            <label>Titulo da Entrega</label>
            <input type="text" class="form-control" name="titulo-entrega" required>
        </div>

        <div class="form-group">
            <label>Descrição da Entrega</label>
            <textarea class="form-control" rows="3" name="descricao-entrega" required></textarea>
        </div>

        <div class="form-group">
            <label>Local da Entrega</label>
            <input type="text" class="form-control" name="local-entrega" required>
        </div>

        <div class="form-group">
            <label>Prazo da Entrega</label>
            <input type="date" class="form-control" name="prazo-entrega" required>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-success" type="submit">CADASTRAR ENTREGA</button>
        </div>
        
    </form>
</section>
