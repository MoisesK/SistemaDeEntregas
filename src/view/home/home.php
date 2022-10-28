<h1 class="text-center text-uppercase"><i class="bi bi-clipboard2"></i> {{HomeName}} </h1>
<h5 class="text-center text-uppercase"> {{DescricaoPage}} </h5>
<hr>

<div class="text-sm">
    {{Alerts}}
</div>

<section id="listaEntregas">
    <div class="card text-dark mb-3 shadow-lg bg-body rounded">
        <h5 class="card-header text-center">Entregas Cadastradas</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center" scope="col">Prazo Da entrega</th>
                            <th class="text-center" scope="col">Titulo da Entrega</th>
                            <th class="text-center" scope="col">Descrição da Entrega</th>
                            <th class="text-center" scope="col">Local da Entrega</th>
                            <th class="text-center" scope="col">Status da Entrega</th>
                            <th class="text-center" scope="col-2">Ações</th>
                        </tr>
                    </thead>
                    {{Items}}
                </table>
            </div>
        </div>
    </div>
    {{Pagination}}
</section>