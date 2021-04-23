<style>
    footer{
        position: absolute;
    }
</style>
<section class="qst2">
    <div class="box">

    <h2><b>Questão 3 -Calcular Salário Líquido</b></h2>

        <div class="linha row">
            <div class="col input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
                <input id="nome" type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            
        </div>

        <div class="linha row">
            <div class="col-2 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Salário</span>
                </div>
                <input id="salario" type="text" class="form-control" placeholder="Salário" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="col-4 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Cargo</label>
                </div>
                <select id="cargo" class="custom-select" id="inputGroupSelect01">
                    <option disabled selected class="oculto">Selecione</option>
                    <option value="Atendente">Atendente</option>
                    <option value="Estoquista">Estoquista</option>
                    <option value="Gerente">Gerente</option>
                </select>
            </div>

            <div class="col">
                <button id="btn" type="button" class="btn btn-primary">Calcular a Média</button>
            </div>

        </div>

        <div class="info">
            <h4 id="msg"><span>Preencha todos os campos para saber seu salário líquido</span></h4>
        </div>

    </div>
</section>

<div id="estilo">

</div>