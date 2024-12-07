


<?php
$page_title = "Página Inicial"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>
<!-- Main Content -->
<div class="container my-5">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-light p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="display-6">Bem-vindo ao Canecss</h2>
                        <p class="lead">Gerenciamento de produção e vendas.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <svg class="mug-animation" width="150" height="150" viewBox="0 0 24 24">
                            <path fill="#320000" d="M2,21V19H20V21H2M20,8V5H18V8H20M20,3A2,2 0 0,1 22,5V8A2,2 0 0,1 20,10H18V13A4,4 0 0,1 14,17H8A4,4 0 0,1 4,13V3H20Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card stats-card card-hover bg-primary text-white p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Pedidos Hoje</h6>
                        <h3>15</h3>
                    </div>
                    <i class="fas fa-shopping-bag fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card card-hover bg-success text-white p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Pedidos esta semana</h6>
                        <h3>38</h3>
                    </div>
                    <i class="fas fa-cogs fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card card-hover bg-warning text-white p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>A pagar</h6>
                        <h3>R$ 200</h3>
                    </div>
                    <i class="fas fa-clock fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card card-hover bg-info text-white p-3 mb-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Faturamento</h6>
                        <h3>R$ 1.5k</h3>
                    </div>
                    <i class="fas fa-dollar-sign fa-2x"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-hover mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus-circle me-2"></i>Ações Rápidas</h5>
                    <div class="list-group">
                        <a href="pedidos.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-cart-plus me-2"></i>Novo Pedido
                        </a>
                        <a href="comprasservicos.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-industry me-2"></i>Ver Matéria-Prima
                        </a>
                        <a href="clientes.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-plus me-2"></i>Cadastrar Cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-tasks me-2"></i>Últimos Pedidos</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 45,00</td>
                                </tr>
                                <tr>
                                    <td>#1235</td>
                                    <td>Maria Santos</td>
                                    <td><span class="badge bg-warning">Em Produção</span></td>
                                    <td>R$ 65,00</td>
                                </tr>
                                <tr>
                                    <td>#1236</td>
                                    <td>Pedro Costa</td>
                                    <td><span class="badge bg-primary">Novo</span></td>
                                    <td>R$ 35,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'pages/footer.php'; // Inclui o rodapé ?>






