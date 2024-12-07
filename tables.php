<?php
$page_title = "Tabelas de Gestão"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>
<div class="container my-4">
    <!-- Tabs para navegação entre tabelas -->
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pedidos-tab" data-bs-toggle="tab" data-bs-target="#pedidos" type="button" role="tab">
                <i class="fas fa-shopping-cart me-2"></i>Pedidos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="produtos-tab" data-bs-toggle="tab" data-bs-target="#produtos" type="button" role="tab">
                <i class="fas fa-box me-2"></i>Produtos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="clientes-tab" data-bs-toggle="tab" data-bs-target="#clientes" type="button" role="tab">
                <i class="fas fa-users me-2"></i>Clientes
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="materia-prima-tab" data-bs-toggle="tab" data-bs-target="#materia-prima" type="button" role="tab">
                <i class="fas fa-boxes me-2"></i>Matéria-Prima
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="fornecedores-tab" data-bs-toggle="tab" data-bs-target="#fornecedores" type="button" role="tab">
                <i class="fas fa-truck me-2"></i>Fornecedores
            </button>
        </li>
    </ul>

    <!-- Conteúdo das Tabs -->
    <div class="tab-content" id="myTabContent">
        <!-- Template de Tabela - será replicado para cada seção -->
        <div class="tab-pane fade show active" id="pedidos" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Pedidos</h5>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Novo Pedido
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td>2023-12-01</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 150,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- As outras tabs seguem o mesmo padrão -->
        <div class="tab-pane fade" id="produtos" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Pedidos</h5>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Novo Pedido
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td>2023-12-01</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 150,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="clientes" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Pedidos</h5>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Novo Pedido
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td>2023-12-01</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 150,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Conteúdo similar com campos específicos para clientes -->
        </div>

        <div class="tab-pane fade" id="materia-prima" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Pedidos</h5>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Novo Pedido
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td>2023-12-01</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 150,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Conteúdo similar com campos específicos para matéria-prima -->
        </div>

        <div class="tab-pane fade" id="fornecedores" role="tabpanel">
            <!-- Conteúdo similar com campos específicos para fornecedores -->
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Pedidos</h5>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Novo Pedido
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1234</td>
                                    <td>João Silva</td>
                                    <td>2023-12-01</td>
                                    <td><span class="badge bg-success">Concluído</span></td>
                                    <td>R$ 150,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Initialize DataTables
        $('.datatables').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'
            },
            responsive: true,
            pageLength: 10,
            order: [
                [0, 'desc']
            ],
            columnDefs: [{
                orderable: false,
                targets: -1
            }]
        });

        // Tab change handler
        document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(tab => {
            tab.addEventListener('shown.bs.tab', function(event) {
                // Readjust DataTables columns when switching tabs
                $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
            });
        });
    });
</script>
<?php include 'pages/footer.php'; // Inclui o rodapé 
?>