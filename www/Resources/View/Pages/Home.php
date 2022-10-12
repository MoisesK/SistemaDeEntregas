<h1>{{HomeName}} </h1>
<hr>

<section id="listaEntregas">
    <div class="card text-dark mb-3">
        <h5 class="card-header text-center">Entregas</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Prazo Da entrega</th>
                            <th scope="col">Titulo da Entrega</th>
                            <th scope="col">Descrição da Entrega</th>
                            <th scope="col">Local da Entrega</th>
                            <th scope="col">Status da Entrega</th>
                            <th scope="col-2">Ações</th>
                        </tr>
                    </thead>
                    {{Items}}
                </table>
            </div>

        </div>
    </div>

</section>