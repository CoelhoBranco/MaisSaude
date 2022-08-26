<?php
$M["Render"]->body->header->base->layout = 1;
$M["Render"]->head->metatag->base->title = 'Cadastro';
?>
    <script defer src="assets/js/cadastro.js"></script>
    <title>Cadastro - MaisSaude</title>
</head>

<body>
    
    
        <div class="apresentacao">
            <h1>
                Agende sua consulta com um dos nossos profissionais!

            </h1>
            <img src="assets/img/medico.svg" alt="medico sorrindo">

        </div>
        <div class="filtros">
            <select name="especialidade" id="especialidade">
                <option value="default">Especialidade</option>
                
            </select>
            <select name="cidade" id="cidade">
                <option value="default">Cidade</option>

            </select>
       
            <button>
                filtrar
            </button>
            
        </div>
        <div class="parceiros">
            <h1>Consultas Presenciais</h1>
            <div class="parceiro">
                <div class="foto">

                </div>

            </div>

        </div>
        <div class="parceiros">
            <h1>Consultas Virtuais</h1>
            <div class="parceiro">
                <div class="foto">

                </div>
                
            </div>

        </div>
        <script defer src="assets/js/parceiros.js"></script>


    
</body>

</html>