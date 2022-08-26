importjs = function (l) {
    d = document,
        e = d.createElement('script');
        //e.setAttribute("defer");
        e.setAttribute("src", l);
    d.head.appendChild(e);
}

importjs("https://cdn.jsdelivr.net/npm/sweetalert2@11")

class Login {

    constructor(user, pw, token) {
        this.form = new FormData;
        this.setUser(user);
        this.setPw(pw);
        this.setToken(token);
    }

    dataValidate() {
        if (!this.user || this.pw < 8) {
            this.alert("Usuário ou senha incorreto!", "error");
            return false;
        } else {
            return true;
        }
    }

    error() {

    }

    alert(message='Usuário ou senha incorreto!') {
        let element = document.querySelector(".error");
        //let HTML = document.createElement("div");
        element.innerText = message;
        //console.log(HTML);
        //HTML.appendChild(document.createTextNode(message));
        //father.parentElement.insertBefore(HTML, father);
        //console.log(father);
    }

    alert_old(alert, icon = "info") {
        if (alert) {
            this.alertText = alert;
        }
        Swal.fire({
            title: this.alertText,
            icon: icon,
            buttonsStyling: false,
        })
    }

    toast(alert, icon = "info", callback) {
        if (alert) {
            this.alertText = alert;
        }
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            didClose: () => {
                callback();
            },
        })

        Toast.fire({
            icon: icon,
            title: this.alertText
        })
    }

    setUser(user) {
        this.user = user;
        //console.log(user);
        this.form.set("user", user);
        //console.log(this.form.user);
    }

    setPw(pw) {
        this.pw = pw;
        //console.log(pw);
        this.form.set("pw", pw);
    }

    setToken(token) {
        this.token = token;
        this.form.set("token", token);
    }

    async send() {
        //console.log(this.form)

        const response = await fetch("controller/login", {
            method: "POST", body: this.form
        })
        console.log(response);
        const result = await response.json();
        console.log(result);
        if (result.success) {
            this.toast(result.status, "success", function () { 
                window.location.href = "/" });
        } else {
            this.alert(result.status, "error");
        }
    }
}

function login(token) {
    var user = document.querySelector("[name=username]").value,
        pw = document.querySelector("[name=password]").value;
        console.log(user);
        console.log(pw);

        var login = new Login(user, pw, token);
        
    if (login.dataValidate()) {
        login.send();
    };
   
}