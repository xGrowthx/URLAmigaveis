<style>
    a{
        margin-right: 10px;
    }
</style>

<a href="home">Home</a>
<a href="promocao">Promoção</a>
<a href="produto">Produto 01</a><br/><br/>

<?php
$rota = $_GET['url'] ?? 'home';

if (file_exists("paginas/{$rota}.html")){
    include "paginas/{$rota}.html";
}

