async requestParceiros(){
    const response = await fetch("controller/parceiros",{
        method:"POST"
    })
    const result = await response.json();
    if (result.success) {
        let container = document.querySelector("#example");
        result.select.forEach(parceiro => {
            container.innerHTML += `
                <a href='/parceiro?id=${parceiro['id']}>Link para o parceiro ${parceiro['nome']}</a>"
            `
        });
    } else {
        this.alert(result.status, "error");
    }
}

async requestParceiro(id){
    const response = await fetch(`controller/parceiro?id=${id}`,{
        method:"GET",
    })
    const result = await response.json();
    if (result.success) {
        let container = document.querySelector("#example");
        result.select.forEach(parceiro => {
            container.innerHTML += `
                <a href='/parceiro?id=${parceiro['id']}>Link para o parceiro ${parceiro['nome']}</a>"
            `
        });
    } else {
        this.alert(result.status, "error");
    }
}