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
            
        <form>
            <h1>$this->title</h1>
            $this->fieldshtml
           

            <button type="button"
            name="loginbutton" id="loginbutton"
            class="g-recaptcha" data-sitekey="recaptcha_publickey" data-callback="login"
            onclick="{$this->buttononclick}">ENTRAR</button>
            <script src="{$this->jspath}" defer></script>
            <br><br>
            <a href="/recovery">Esqueceu seu sua senha?</a>
            
        </form>
        

        html;
        echo $html;
    }
}
?>