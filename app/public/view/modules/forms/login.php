<?php

class LoginForm {
    private $title;

    public function __construct() {
        $this->title = 'Login';
        $this->dataname = "login";
        $this->jspath = "/assets/js/{$this->dataname}.js";
        $this->buttononclick = "{$this->dataname}('token')";
        $this->fieldshtml = "";
        
        $this->fields = [
            array(
                'name' => "loginuser", 
                'label' => "Usuário", 
                'tipo' => "input",
                'inputType' => "text",
            ),
            array( 
                'name' => "loginpw", 
                'label' => "Senha", 
                'tipo' => "input",
                'inputType' => "password",
            )
        ];
    
    }

    public function render(){
        
        foreach($this->fields as $value) {
            switch ($value['tipo']){
                case "select":
                    #talvez tenha que inserir mais algum codigo aqui
                    break;
                
                default:
                    $this->fieldshtml .= <<<html
                    <label for="{$value["name"]}">{$value["label"]}</label>
                   
                    <input name="{$value["name"]}" type="{$value["inputType"]}" value="">
                    html;
                    break;
            }
        }

        $html = <<<html

                <form id='login' action="/login" method="post">
                    <h1>Login</h1>

                    <div class="fields">
                    <label for="username">Usuário</label>
                    <input type="text" name="username" required>
                    </div>

                    <div class="fields">
                    <label for="password">Senha</label>
                    <input type="password" name="password" required>
                    </div>

                    <a href="/recovery" id='esqueceu'>Esqueceu sua senha?</a>

                    <div id="entrar">
                    <div class="error"></div>
                    <!--<div>Usuário ou senha incorreto!</div>-->

                    <button type="button" name="loginbutton" id="loginbutton" class="g-recaptcha" data-sitekey="recaptcha_publickey" data-callback="login" onclick="login('token')">ENTRAR</button>
                    </div>
                    <div class="cadastro">
                    <a href="/cadastro">Quero me cadastrar!</a>
                    </div>
                    <script src="assets/js/login.js"></script>
                </form>
        

        html;
        return $html;
    }
}
