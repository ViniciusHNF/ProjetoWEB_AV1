var nome = document.querySelector('#nome');
var salario = document.querySelector('#salario');
var cargo = document.querySelector('#cargo');
var btn = document.querySelector('#btn');
var msg = document.querySelector('#msg');
var estilo = document.querySelector('#estilo');

btn.addEventListener('click', () => {
    if (nome.value != "" && salario.value != "" && cargo.value != "Selecione") {
        let novoSalario;
        let aumento;
        let desconto;
        let descontoPorcentagem;
        let salarioLiquido;
        switch (cargo.value) {
            case "Atendente":
                aumento = "8%";
                novoSalario = parseFloat(salario.value) + (parseFloat(salario.value * 0.08));
                break;

            case "Estoquista":
                aumento = "6%";
                novoSalario = parseFloat(salario.value) + (parseFloat(salario.value * 0.06));
                break;

            case "Gerente":
                aumento = "3%";
                novoSalario = parseFloat(salario.value) + (parseFloat(salario.value * 0.03));
                break;

            default:
                aumento = "0%";
                novoSalario = 0;
                desconto = 0;
                break;
        }

        if (parseFloat(salario.value) <= 1045) {
            descontoPorcentagem = "7,50%";
            desconto = novoSalario * 0.075;
        } else if (parseFloat(salario.value) <= 2089.60) {
            descontoPorcentagem = "9%";
            desconto = novoSalario * 0.09;
        } else if (parseFloat(salario.value) <= 3134.40) {
            descontoPorcentagem = "12%";
            desconto = novoSalario * 0.12;
        }

        salarioLiquido = novoSalario - desconto;

        estilo.innerHTML = `
            <style>
                footer{
                    position: relative;
                }
            </style>
        `;

        msg.innerHTML = `
            <div>
                <p><b>Cliente:</b> `+ nome.value + `</p>
                <p><b>Cargo:</b> `+ cargo.value + `</p>
            </div>
            <div>
                <p><b>Salário Atual:</b> R$ `+ salario.value + `</p>
                <p><b>Novo Salário:</b> R$ `+ salario.value + ` + ` + aumento + ` = ` + novoSalario + `</p>
                <p><b>Desconto INSS:</b> R$ `+ desconto + ` (` + descontoPorcentagem + `)</p>
            </div>
            <div>
                <p><b>Salário Líquido:</b> R$ `+ salarioLiquido + `</p>
            </div>
            `;
    } else {
        alert("Preencha todos os campos")
    }
})