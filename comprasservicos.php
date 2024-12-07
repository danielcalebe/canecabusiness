<?php
$page_title = "Compras/Serviços"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>
  <!-- Conteúdo das Tabs -->
  <div class="tab-content" id="myTabContent">
        <!-- Template de Tabela - será replicado para cada seção -->
        <div class="tab-pane fade show active" id="materiaprima" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Compras/Serviços</h5>
                    <button class="btn light-brown" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                        <i class="fas fa-plus me-2"></i>Nova Compras/Serviços
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Fornecedor</th>
                                    <th>Preço U.</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1</td>
                                    <td>Canecas Porcelana</td>
                                    <td>Fornecedor 1</td>
                                    <td>R$2,00</td>
                                    <td>11</td>
                                    <td>R$22,00</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewModal" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Excluir">
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

<!-- Modal para Visualizar -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">Detalhes da Compras/Serviços</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Informações da Compras/Serviços -->
                <p><strong>Nome:</strong> Canecas Porcelana</p>
                <p><strong>Fornecedor:</strong> Fornecedor 1</p>
                <p><strong>Preço U.</strong> R$2,00</p>
                <p><strong>Quantidade:</strong> 11</p>
                <p><strong>Total:</strong> R$22,00</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Compras/Serviços</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form>
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="editName" value="Canecas Porcelana">
                    </div>
                    <div class="mb-3">
                        <label for="editFornecedor" class="form-label">Fornecedor</label>
                        <input type="text" class="form-control" id="editFornecedor" value="Fornecedor 1">
                    </div>
                    <div class="mb-3">
                        <label for="editPreco" class="form-label">Preço U.</label>
                        <input type="text" class="form-control" id="editPreco" value="R$2,00">
                    </div>
                    <div class="mb-3">
                        <label for="editQuantidade" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="editQuantidade" value="11">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Excluir -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Excluir Compras/Serviços</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir <strong>Canecas Porcelana</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Adicionar Novo Compras/Serviços -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">Adicionar Novo Compras/Serviços</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para adicionar novo Compras/Serviços -->
                <form action="process_new_order.php" method="POST">
                    <div class="mb-3">
                        <label for="MatériaPrimaName" class="form-label">Nome da Compras/Serviços</label>
                        <input type="text" class="form-control" id="MatériaPrimaName" name="MatériaPrimaName" placeholder="Compras/Serviços" required>
                    </div>
                    <div class="mb-3">
                        <label for="fornecedor" class="form-label">Fornecedor</label>
                        <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="Fornecedor" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço Unitário</label>
                        <input type="text" class="form-control" id="preco" name="preco" placeholder="R$0,00" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" required>
                    </div>
                    <button type="submit" class="btn light-brown">Adicionar Compras/Serviços</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'pages/footer.php'; // Inclui o rodapé ?>
