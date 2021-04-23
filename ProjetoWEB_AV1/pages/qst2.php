<section class="qst2">
    <div class="box">

    <h2><b>Questão 2 - Carnê de Pagamento</b></h2>

        <div class="linha row">
            <div class="col input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
                <input id="nome" type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="col-5 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Produto:</span>
                </div>
                <input id="produto" type="text" class="form-control" placeholder="Produto" aria-describedby="basic-addon1">
            </div>
            
            
        </div>

        <div class="linha row">
            <div class="col-3 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Valor do Produto</span>
                </div>
                <input id="valor" type="text" class="form-control" placeholder="Valor do produto" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="col-2 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Parcelas</label>
                </div>
                <select id="parcelas" class="custom-select" id="inputGroupSelect01">
                    <option value="1">1 vez</option>
                    <option value="2">2 vezes</option>
                    <option value="3">3 vezes</option>
                    <option value="4">4 vezes</option>
                    <option value="5">5 vezes</option>
                    <option value="6">6 vezes</option>
                </select>
            </div>

            <div class="col">
                <button id="btn" type="button" class="btn btn-primary">Calcular a Média</button>
            </div>

        </div>

        <div class="info">
            <h4 id="msg"><span>Preencha todos os campos para saber sua média</span></h4>
        </div>

    </div>
</section>

<style>
    footer{
        position: absolute;
    }
</style>