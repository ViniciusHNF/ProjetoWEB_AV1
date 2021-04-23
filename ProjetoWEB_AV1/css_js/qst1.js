var nome = document.querySelector('#nome');
var cpf = document.querySelector('#cpf');
var disciplina = document.querySelector('#disciplina');
var nota1 = document.querySelector('#nota1');
var nota2 = document.querySelector('#nota2');
var btn = document.querySelector('#btn');
var msg = document.querySelector('#msg');

btn.addEventListener('click', () => {
    if (nome.value != "" && cpf.value != "" && disciplina.value != "Selecione" && nota1.value != "" && nota2.value != "") {
        let media = (parseFloat(nota1.value) + parseFloat(nota2.value)) / 2;
        let status;
        if (media <= 3) {
            status = 'foi Reprovado';
        } else if (media > 3 && media < 7) {
            status = 'ficou Recuperação';
        } else {
            status = 'foi Aprovado';
        }
        msg.innerHTML = nome.value + "(CPF: " + cpf.value + "), você " + status + " na disciplina " + disciplina.value + " com Média " + media;
    } else {
        alert('Preencha todos os campos')
    }
})

document.getElementById('cpf').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
    e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + '.' + x[3] + '-' + x[4] + (x[5] ? '-' + x[5] : '');
});