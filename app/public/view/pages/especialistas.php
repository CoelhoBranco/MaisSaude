<?php
$M["Render"]->body->header->base->layout = 1;
$M["Render"]->head->metatag->base->title = 'Especialistas';
?>
<div class="container">
    <div class="apresentacao">
        <h1>
            Agende sua consulta com um dos nossos profissionais!

        </h1>
        <img src="assets/img/medico.svg" alt="medico sorrindo">

    </div>
</div>
<div class="filtros">
    <select name="especialidade" id="especialidade">
        <option value="*">Especialidade</option>

    </select>
    <select name="cidade" id="cidade">
        <option value="*">Cidade</option>

    </select>

    <button>
        filtrar
    </button>

</div>
<div class="principal">
    <div>
        <h1>Consultas Presenciais</h1>
    </div>
    <div class="container-principal">

        <button id='e2' onclick='scroll_(this)' class='esquerda' role="button">
            <img src="assets/img/esquerda.svg" alt="">
        </button>

        <div class="container-carrossel">
            <div class="carrossel">
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>
                <div class="parceiro">

                    <div class="foto"><img src="assets/img/sem_rosto.svg" alt=""></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>

                    <div class="link">
                        <div class="link-cor">
                            <a href="#">Agendar</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <button id='d2' onclick='scroll_(this)' class='direita' role="button">
        <img src="assets/img/direita.svg" alt="">
    </button>
    </div>

    

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</div>
</div>

<div class="principal">

    <h1>Consultas Virtuais</h1>

    <div class="container-principal">
        <button id='e2' class='esquerda' role="button">
            <img src="assets/img/esquerda.svg" alt="">
        </button>
        <div class="container-carrossel">
            <div class="carrossel">

                <div class="parceiro">
                    <div class="foto"></div>

                    <div class="nome">Nome1 - Especialidade</div>

                    <div class="valor">R$00,00</div>
                    <a href="#">Agendar</a>

                </div>
                <div class="parceiro">
                    <div class="foto"></div>
                    <div class="nome">Nome2 - Especialidade</div>
                    <div class="valor">R$00,00</div>
                    <a href="#">Agendar</a>

                </div>
                <div class="parceiro">
                    <div class="foto"></div>
                    <div class="nome">Nome3 - Especialidade</div>
                    <div class="valor">R$00,00</div>
                    <a href="#">Agendar</a>

                </div>
                <div class="parceiro">
                    <div class="foto"></div>
                    <div class="block">
                        <div class="nome">Nome - Especialidade</div>
                    </div>
                    <div class="valor">R$00,00</div>
                    <a href="#">Agendar</a>

                </div>

            </div>
        </div>
        <button id='d2' class='direita' role="button">
            <img src="assets/img/direita.svg" alt="">
        </button>
    </div>

</div>
</div>
<script defer src="assets/js/parceiros.js"></script>
<script defer src="assets/js/scroll.js"></script>