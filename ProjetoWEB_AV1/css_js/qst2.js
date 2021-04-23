var nome = document.querySelector('#nome');
var produto = document.querySelector('#produto');
var valor = document.querySelector('#valor');
var parcelas = document.querySelector('#parcelas');
var btn = document.querySelector('#btn');
var msg = document.querySelector('#msg');

btn.addEventListener('click', () => {
    let valorFinal;
    let acrescimo;

    if (nome.value != "" && produto.value != "" && valor.value != "") {
        if (parcelas.value >= 3 && parcelas.value < 6) {
            valorFinal = parseFloat(valor.value) + (parseFloat(valor.value) * 0.05);
            acrescimo = "5%";
        } else if (parcelas.value == 6) {
            valorFinal = parseFloat(valor.value) + (parseFloat(valor.value) * 0.12);
            acrescimo = "12%";
        } else {
            valorFinal = parseFloat(valor.value);
            acrescimo = "Sem juros";
        }
        msg.innerHTML = `
        <div id="div_1">
            <p><b>Cliente:</b> `+ nome.value + `</p>
            <p><b>Produto:</b> `+ produto.value + `</p>
        </div>
        <div id="div_2">
            <p><b>Valor:</b> R$ `+ valorFinal + `</p>
            <p><b>Total de parcelas:</b> `+ parcelas.value + `</p>
            <p><b>Juros totais:</b> `+ acrescimo + `</p>
        </div>
        `;
    } else {
        alert('Preencha todos os campos')
    }
})