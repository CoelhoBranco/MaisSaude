class Parceiros {

    async getFiltros() {
        const response = await fetch('controller/read/cidades',{
            method:"POST",body:true
        })
        const result = await response.json();
        //console.log(result);
        return result;
            

    }

    filtrosCidade() {
        let city = document.getElementById('cidade'),
            citys = this.getFiltros();
        
        console.log(citys);
        
        Array.from(citys).forEach(element => {
            console.log(element);
            let option = document.createElement('option');
            option.innerText = element.city;
            city.appendChild(option);

        })}
       
        ;
 



    }



var parceiros = new Parceiros();
parceiros.filtrosCidade();