<nav class = "navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class = "container">

#Sistema Financeiro<a>

<ul class="navbar-nav ms-auto">
    <li class="nav-item">
    dashboard.phpDashboard</a>
</li>

<?php if ($perfil == "cliente"){ ?>
<li class = "nav-item">
    contas/listar.phpContas da Empresa</a>
</li>
<li class = "nav-item">
    contas/cadastras.phpCadastrar Conta</a>
</li>
<?php } ?>

<?php if ($perfil == "proprietario") { ?>
<li class = "nav-item">
    contas/listar.phpTodas as Contas</a>
</li>    
<li class = "nav-item">
    usuarios/listar.phpUsuários</a>
</li>    
<?php } ?>

<li class = "nav-item">
    ..logout.phpSair</a>
</li>
</ul>
</div>
</nav>
