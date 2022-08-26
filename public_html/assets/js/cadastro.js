importjs = function (l) {
    d = document,
        e = d.createElement('script');
        //e.setAttribute("defer");
        e.setAttribute("src", l);
    d.head.appendChild(e);
}

importjs("https://cdn.jsdelivr.net/npm/sweetalert2@11")

class CadastroJS {

    async addExpertise() {
        let especialidade = document.querySelector("body > main > form > div:nth-child(8) > div:nth-child(3) > select");
        const response = await fetch("/controller/read/option?option=expertise", {
            method: "get"
        })
        const result = await response.json();
        
        result.forEach(element => {
            let option = document.createElement("option");
            option.value = element.id_area;
            option.innerText = element.area;
            especialidade.appendChild(option);
            
        });

    }

    addPhoto() {
        let photo = document.getElementById('foto');
        let file = document.getElementById('file');
        photo.addEventListener('click', () => {
            file.click();
        });



        file.addEventListener('change', (event) => {

            if (file.files.length <= 0) {
                console.log("nenhum arquvio enviado");
                return;
            }
            let reader = new FileReader();
            reader.onload = () => {
                photo.style = `background-image: url("${reader.result}")`;
            }
            reader.readAsDataURL(file.files[0]);
            ;
        });

    }


    CPF(i) {
        //console.log(i);
        let v = i.value;

        if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

    }
    CEP(i) {
        let v = i.value;

        if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "9");
        if (v.length == 5) i.value += "-";
        //if (v.length == 8) i.value += "-";

    }
    CEL(i) {
        let id = i.getAttribute("id");
        console.log(id);
        let v = i.value;

        if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "14");
        if (v.length == 0 || v.length == 2) i.value += " ";
        if (v.length == 8) i.value += "-";

    }

    phone(i) {
        let v = i.value;

        if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "14");
        if (v.length == 0 || v.length == 2) i.value += " ";
        if (v.length == 7) i.value += "-";

    }

    mascara(i) {
        let id = i.getAttribute("id");
        switch (i.getAttribute("id")) {
            case 'cpf':
                this.CPF(i);
                //let mask = 
                // por via lib
                break;

            case 'cep':
                this.CEP(i);
                break;
            case 'cel':
                this.CEL(i);
                break;
            case 'phone':
                this.phone(i);

            default:
                break;


        }
    }

    alert(alert, icon = "info", callback = console.log("")) {
        if (alert) {
            this.alertText = alert;
        }
        Swal.fire({
            title: this.alertText,
            icon: icon,
            buttonsStyling: false,
            didClose: () => {
                callback();
            },
        })
    }

    async enviar() {
        let form = new FormData(document.querySelector(`form`));
        const response = await fetch("controller/create/cadastro", {
            method: "POST", body: form
        })
        const result = await response.json();

        if (result.success) {
            this.alert(result.status, "success", function () { window.location.href = "/cadastro" });;
        } else {
            this.alert(result.status, "error");
        }
    }


};


var cadastro = new CadastroJS;
//cadastro.criarCampos();
cadastro.addPhoto();
//cadastro.getFiltros();


