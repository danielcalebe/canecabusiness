<?php
$page_title = "Pedidos"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>

<!-- Conteúdo das Tabs -->
<div class="tab-content" id="myTabContent">
    <!-- Template de Tabela - será replicado para cada seção -->
    <div class="tab-pane fade show active" id="pedidos" role="tabpanel">
        <div class="card table-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Gerenciar Pedidos</h5>
                <button class="btn light-brown" data-bs-toggle="modal" data-bs-target="#addPedidoModal">
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
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dados de exemplo -->
                            <tr>
                                <td>#1</td>
                                <td>John</td>
                                <td>Caneca A</td>
                                <td>2</td>
                                <td>2024-12-07</td>
                                <td>Em Andamento</td>
                                <td class="action-buttons">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewPedidoModal" title="Visualizar">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPedidoModal" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePedidoModal" title="Excluir">
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

    <!-- Modal para Visualizar Pedido -->
    <div class="modal fade" id="viewPedidoModal" tabindex="-1" aria-labelledby="viewPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewPedidoModalLabel">Detalhes do Pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Informações do Pedido -->
                    <p><strong>ID do Pedido:</strong> #1</p>
                    <p><strong>Cliente:</strong> John</p>
                    <p><strong>Produto:</strong> Caneca A</p>
                    <p><strong>Quantidade:</strong> 2</p>
                    <p><strong>Data do Pedido:</strong> 2024-12-07</p>
                    <p><strong>Status:</strong> Em Andamento</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Editar Pedido -->
    <div class="modal fade" id="editPedidoModal" tabindex="-1" aria-labelledby="editPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPedidoModalLabel">Editar Pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário de edição -->
                    <form>
                        <div class="mb-3">
                            <label for="editClienteID" class="form-label">Cliente</label>
                            <select class="form-select" id="editClienteID">
                                <option value="1">John</option>
                                <!-- Adicionar outras opções de clientes aqui -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editProdutoID" class="form-label">Produto</label>
                            <select class="form-select" id="editProdutoID">
                                <option value="1">Caneca A</option>
                                <!-- Adicionar outras opções de produtos aqui -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editQuantidade" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="editQuantidade" value="2">
                        </div>
                        <div class="mb-3">
                            <label for="editDataPedido" class="form-label">Data do Pedido</label>
                            <input type="date" class="form-control" id="editDataPedido" value="2024-12-07">
                        </div>
                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select class="form-select" id="editStatus">
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Concluído">Concluído</option>
                                <option value="Cancelado">Cancelado</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Excluir Pedido -->
    <div class="modal fade" id="deletePedidoModal" tabindex="-1" aria-labelledby="deletePedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePedidoModalLabel">Excluir Pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza de que deseja excluir o pedido <strong>#1</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Adicionar Novo Pedido -->
    <div class="modal fade" id="addPedidoModal" tabindex="-1" aria-labelledby="addPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPedidoModalLabel">Adicionar Novo Pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para adicionar novo Pedido -->
                    <form action="process_new_pedido.php" method="POST">
                        <div class="mb-3">
                            <label for="clienteID" class="form-label">Cliente</label>
                            <select class="form-select" id="clienteID" name="clienteID" required>
                                <option value="1">John</option>
                                <!-- Adicionar outras opções de clientes aqui -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="produtoID" class="form-label">Produto</label>
                            <select class="form-select" id="produtoID" name="produtoID" required>
                                <option value="1">Caneca A</option>
                                <!-- Adicionar outras opções de produtos aqui -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataPedido" class="form-label">Data do Pedido</label>
                            <input type="date" class="form-control" id="dataPedido" name="dataPedido" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Concluído">Concluído</option>
                                <option value="Cancelado">Cancelado</option>
                            </select>
                        </div>
                        <button type="submit" class="btn light-brown">Adicionar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'pages/footer.php'; // Inclui o rodapé 
    ?>