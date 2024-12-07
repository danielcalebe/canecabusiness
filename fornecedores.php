<?php
$page_title = "Fornecedores"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>
  <!-- Conteúdo das Tabs -->
  <div class="tab-content" id="myTabContent">
        <!-- Template de Tabela - será replicado para cada seção -->
        <div class="tab-pane fade show active" id="fornecedores" role="tabpanel">
            <div class="card table-card">
            <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Gerenciar Fornecedores</h5>
    <button class=" light-brown" data-bs-toggle="modal" data-bs-target="#addOrderModal">
        <i class="fas fa-plus me-2"></i>Novo Fornecedor
    </button>
</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CNPJ</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1</td>
                                    <td>Canecas Porcelana Inc.</td>
                                    <td>313213213-213321323 3213</td>
                                    <td>317454533</td>
                                    <td>canecas@contato.com</td>
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
                <h5 class="modal-title" id="viewModalLabel">Detalhes do Fornecedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Informações do fornecedor -->
                <p><strong>Nome:</strong> Canecas Porcelona Inc.</p>
                <p><strong>CNPJ:</strong> 313213213-213321323 3213</p>
                <p><strong>Telefone:</strong> 317454533</p>
                <p><strong>Email:</strong> canecas@contato.com</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Fornecedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form>
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="editName" value="Canecas Porcelona Inc.">
                    </div>
                    <div class="mb-3">
                        <label for="editCNPJ" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="editCNPJ" value="313213213-213321323 3213">
                    </div>
                    <div class="mb-3">
                        <label for="editPhone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="editPhone" value="317454533">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" value="canecas@contato.com">
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
                <h5 class="modal-title" id="deleteModalLabel">Excluir Fornecedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir <strong>Canecas Porcelona Inc.</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal para Adicionar Novo Fornecedor -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">Adicionar Novo Fornecedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para adicionar novo Fornecedor -->
                <form action="process_new_order.php" method="POST">
                    <div class="mb-3">
                        <label for="fornecedorName" class="form-label">Nome do Fornecedor</label>
                        <input type="text" class="form-control" id="fornecedorName" name="fornecedorName" placeholder="fornecedor a" required>
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="0000000 00000" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="3100000000" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required placeholder="email@email.com">
                    </div>
                   
                    <button type="submit" class="light-brown">Adicionar Fornecedores</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'pages/footer.php'; // Inclui o rodapé 
?>