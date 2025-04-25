export function buscarCEP(cepDigitado, resultado) {
    const cep = cepDigitado.replace(/\D/g, '');
    const url = `https://viacep.com.br/ws/${cep}/json/`;

    fetch(url)
        .then(response => {
            if (!response.ok) throw new Error('Erro ao buscar CEP');
            return response.json();
        })
        .then(data => {
            const res = document.getElementById(resultado);
            if (data.erro) {
               res.innerText = 'CEP não encontrado.';
            } else {
                document.getElementById('ruaEvento').value = data.logradouro || '';
                document.getElementById('bairroEvento').value = data.bairro || '';
                document.getElementById('cidadeEvento').value = data.localidade || '';
                document.getElementById('estadoEvento').value = data.uf || '';
            }
        })
        .catch(error => {
            document.getElementById(resultado).innerText = 'Erro ao buscar o CEP.';
            console.error(error);
        });
}