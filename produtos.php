<?php
$page_title = "Produtos"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>

<!-- Conteúdo das Tabs -->
<div class="tab-content" id="myTabContent">
    <!-- Template de Tabela - será replicado para cada seção -->
    <div class="tab-pane fade show active" id="produtos" role="tabpanel">
        <div class="card table-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Gerenciar Produtos</h5>
                <button class="btn light-brown" data-bs-toggle="modal" data-bs-target="#addProdutoModal">
                    <i class="fas fa-plus me-2"></i>Novo Produto
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover datatables">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dados de exemplo -->
                            <tr>
                                <td>#1</td>
                                <td>Produto ABC</td>
                                <td>Categoria 1</td>
                                <td>R$50,00</td>
                                <td>20</td>
                                <td class="action-buttons">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewProdutoModal" title="Visualizar">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProdutoModal" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProdutoModal" title="Excluir">
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

<!-- Modal para Visualizar Produto -->
<div class="modal fade" id="viewProdutoModal" tabindex="-1" aria-labelledby="viewProdutoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewProdutoModalLabel">Detalhes do Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Informações do Produto -->
                <p><strong>Nome:</strong> Produto ABC</p>
                <p><strong>Categoria:</strong> Categoria 1</p>
                <p><strong>Preço:</strong> R$50,00</p>
                <p><strong>Quantidade:</strong> 20</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar Produto -->
<div class="modal fade" id="editProdutoModal" tabindex="-1" aria-labelledby="editProdutoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProdutoModalLabel">Editar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form>
                    <div class="mb-3">
                        <label for="editNomeProduto" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="editNomeProduto" value="Produto ABC">
                    </div>
                    <div class="mb-3">
                        <label for="editCategoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="editCategoria" value="Categoria 1">
                    </div>
                    <div class="mb-3">
                        <label for="editPreco" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="editPreco" value="R$50,00">
                    </div>
                    <div class="mb-3">
                        <label for="editQuantidade" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="editQuantidade" value="20">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Excluir Produto -->
<div class="modal fade" id="deleteProdutoModal" tabindex="-1" aria-labelledby="deleteProdutoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProdutoModalLabel">Excluir Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir <strong>Produto ABC</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Adicionar Novo Produto -->
<div class="modal fade" id="addProdutoModal" tabindex="-1" aria-labelledby="addProdutoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProdutoModalLabel">Adicionar Novo Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para adicionar novo Produto -->
                <form action="process_new_produto.php" method="POST">
                    <div class="mb-3">
                        <label for="produtoNome" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" id="produtoNome" name="produtoNome" placeholder="Nome do Produto" required>
                    </div>
                    <div class="mb-3">
                        <label for="produtoCategoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="produtoCategoria" name="produtoCategoria" placeholder="Categoria do Produto" required>
                    </div>
                    <div class="mb-3">
                        <label for="produtoPreco" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="produtoPreco" name="produtoPreco" placeholder="Preço do Produto" required>
                    </div>
                    <div class="mb-3">
                        <label for="produtoQuantidade" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="produtoQuantidade" name="produtoQuantidade" placeholder="Quantidade" required>
                    </div>
                    <button type="submit" class="btn light-brown">Adicionar Produto</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'pages/footer.php'; // Inclui o rodapé ?>
