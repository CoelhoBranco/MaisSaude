<?php
$M["Render"]->body->header->base->layout = 2;
$M["Render"]->head->metatag->base->title = 'cadastro';
$M["Render"]->head->script->base->script = 'cadastro';
?>


<form class='form' action="">
    <h1>cadastro</h1>


    <div class="container">
        <div class="fields">
            <label for="nome">Nome Completo</label>
            <input name="nome" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="cpf">CPF</label>
            <input id="cpf" type="text" name="cpf" oninput="cadastro.mascara(this)" placeholder="000.000.000-00" pattern="(d{3}.?d{3}.?d{3}-?d{2})|(d{2}.?d{3}.?d{3}/?d{4}-?d{2})">
        </div>
        <div class="fields">
            <label for="cep">CEP</label>
            <input name="cep" id='cep' oninput="cadastro.mascara(this)" placeholder="00000-000" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="endereco">Endereço</label>
            <input name="endereco" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="numero">Número</label>
            <input name="numero" type="text" value="">
        </div>
        <div class="fields">
            <label for="complemento">Complemento</label>
            <input name="complemento" type="text" value="">
        </div>
        <div class="fields">
            <label for="bairro">Bairro</label>
            <input name="bairro" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="cidade">Cidade</label>
            <input name="cidade" type="text" value="">
        </div>
        <div class="fields">
            <label for="estado">Estado</label>
            <select id="estado" name="estado">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="email">Email</label>
            <input name="email" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="celular">Celular</label>
            <input type="tel" name="celular" id="cel" placeholder="00 00000-0000" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" oninput="cadastro.mascara(this)">
        </div>
        <div class="fields">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="phone" placeholder="00 0000-0000" oninput="cadastro.mascara(this)" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">
        </div>
        <div class="fields">
            <label for="especialidade">Especialidade</label>
            <select name="id_area">
            </select>
           
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="modalidade_atendimento_1">Modalidade de Atendimento 1</label>
            <select name="modalidade_atendimento_1">
                <option value="virtual">virtual</option>
                <option value="presential">Presencial</option>

            </select>
        </div>
        <div class="fields">
            <label for="valor_atendimento_1">Valor de Atendimento 1</label>
            <input type='number' name="valor_atendimento_1" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">
            <label for="modalidade_atendimento_2">Modalidade de Atendimento 2</label>
            <select name="modalidade_atendimento_2">
                <option value="presential">Presencial</option>
                <option value="virtual">virtual</option>
            </select>
        </div>
        <div class="fields">
            <label for="valor_atendimento_2">Valor de Atendimento 2</label>
            <input type='number' name="valor_atendimento_2" type="text" value="">
        </div>
    </div>
    <div class="container">
        <div class="fields">

        </div>
    </div>
    <div class="container">
        <div class="fields">
            <div class="img" id="foto"></div>
            <label for="file" name="file">Escolher arquivo </label>
            <input type="file" id='file' name="file" accept="image/png, image/jpeg">
        </div>
    </div>

    <div class="buttons">
        <button type="button" name="cadastrobutton" id="cadastrobutton" onclick="cadastro.enviar()">Cadastrar</button>
    </div>
    <script src="assets\js\cadastro.js"></script>
    <script>
        cadastro.addExpertise()
    </script>

</form>