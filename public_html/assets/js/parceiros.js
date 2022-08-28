class Parceiros {

    async addFilters(filter) {
        const response = await
            fetch(`/controller/read/option?option=${filter}`, {
                method: "get"
            })
        const result = await response.json();
        if (filter == 'cidades') {
            let cidades = document.querySelector("#cidade");

            //console.log(result);
            result.forEach(element => {
                let option = document.createElement("option");
                option.value = element.city;
                option.innerText = element.city;
                cidades.appendChild(option);
            }
            )
        }
        else if (filter == "especialidade") {
            let especialidade = document.querySelector("#especialidade");
            //console.log(resu)
            result.forEach(element => {
                let option = document.createElement("option");
                option.value = element.id_area;
                option.innerText = element.area;
                especialidade.appendChild(option);

            }
            )

        }

        return true;


    }



}

var parceiros = new Parceiros;
parceiros.addFilters('cidades');
parceiros.addFilters('especialidade');
//parceiros.filtrosCidade();