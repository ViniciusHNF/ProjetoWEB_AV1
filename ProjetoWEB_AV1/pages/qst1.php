<section class="qst1">
    <div class="box">

    <h2><b>Questão 1 - Calcular a Média</b></h2>

        <div class="linha row">
            <div class="col input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
                <input id="nome" type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="col-3 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">CPF:</span>
                </div>
                <input id="cpf" name="cpf" type="text" class="form-control" placeholder="000.000.000-00" aria-describedby="basic-addon1">
            </div>
            
            
        </div>

        <div class="linha row">
            <div class="col-8 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Disciplina</label>
                </div>
                <select id="disciplina" class="custom-select" id="inputGroupSelect01">
                    <option disabled selected class="oculto">Selecione</option>
                    <option value="Linguagem de Programação Web">Linguagem de Programação Web</option>
                    <option value="Banco de Dados">Banco de Dados</option>
                    <option value="Análise e Desenvolvimento de Software">Análise e Desenvolvimento de Software</option>
                    <option value="Interação Humano-Computador">Interação Humano-Computador</option>
                    <option value="Sistemas de Informações Gerenciais e Processos de Negócio">Sistemas de Informações Gerenciais e Processos de Negócio</option>
                </select>
            </div>

            <div class="col-2 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nota I:</span>
                </div>
                <input id="nota1" type="text" class="form-control" placeholder="Nota I" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="col-2 input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nota II:</span>
                </div>
                <input id="nota2" type="text" class="form-control" placeholder="Nota II" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="linha">
            <button id="btn" type="button" class="btn btn-primary">Calcular a Média</button>
        </div>

        <div class="info">
            <h4 id="msg">Preencha todos os campos para saber sua média</h4>
        </div>

    </div>
</section>

<style>
    footer{
        position: absolute;
    }
</style>