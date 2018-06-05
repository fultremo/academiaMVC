<?php use Mini\Libs\Sesion; $this->layout('admin/layouts/layout') ?>

<h1>Dashboard</h1>
<p>Usuario autenticado: {{ auth()->user()->nickname }}</p>
<p>Correo electrónico: <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">

            <h2 class="white-text">Login Correcto</h2>
            <span class="badge badge-pill badge-success"> Login Ok, amigo <?= Sesion::get("user_name") ?></span>
        </div>
    </div>
</div>{{ auth()->user()->email }}</p>
