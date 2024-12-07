<?php
$page_title = "Clientes"; // Título específico da página
include 'pages/header.php'; // Inclui o cabeçalho
?>

  <!-- Conteúdo das Tabs -->
  <div class="tab-content" id="myTabContent">
        <!-- Template de Tabela - será replicado para cada seção -->
        <div class="tab-pane fade show active" id="clientes" role="tabpanel">
            <div class="card table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gerenciar Clientes</h5>
                    <button class="btn light-brown" data-bs-toggle="modal" data-bs-target="#addClienteModal">
                        <i class="fas fa-plus me-2"></i>Novo Cliente
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dados de exemplo -->
                                <tr>
                                    <td>#1</td>
                                    <td>Empresa XYZ</td>
                                    <td>12.345.678/0001-90</td>
                                    <td>(31) 98765-4321</td>
                                    <td>empresa@xyz.com</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewClienteModal" title="Visualizar">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editClienteModal" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteClienteModal" title="Excluir">
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

<!-- Modal para Visualizar Cliente -->
<div class="modal fade" id="viewClienteModal" tabindex="-1" aria-labelledby="viewClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewClienteModalLabel">Detalhes do Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Informações do Cliente -->
                <p><strong>Nome:</strong> Empresa XYZ</p>
                <p><strong>CPF:</strong> 12.345.678/0001-90</p>
                <p><strong>Telefone:</strong> (31) 98765-4321</p>
                <p><strong>Email:</strong> empresa@xyz.com</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar Cliente -->
<div class="modal fade" id="editClienteModal" tabindex="-1" aria-labelledby="editClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClienteModalLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de edição -->
                <form>
                    <div class="mb-3">
                        <label for="editNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="editNome" value="Empresa XYZ">
                    </div>
                    <div class="mb-3">
                        <label for="editCPF" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="editCPF" value="12.345.678/0001-90">
                    </div>
                    <div class="mb-3">
                        <label for="editTelefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="editTelefone" value="(31) 98765-4321">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" value="empresa@xyz.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Excluir Cliente -->
<div class="modal fade" id="deleteClienteModal" tabindex="-1" aria-labelledby="deleteClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteClienteModalLabel">Excluir Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir <strong>Empresa XYZ</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Adicionar Novo Cliente -->
<div class="modal fade" id="addClienteModal" tabindex="-1" aria-labelledby="addClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClienteModalLabel">Adicionar Novo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para adicionar novo Cliente -->
                <form action="process_new_cliente.php" method="POST">
                    <div class="mb-3">
                        <label for="clienteNome" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="clienteNome" name="clienteNome" placeholder="Nome do Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="clienteCPF" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="clienteCPF" name="clienteCPF" placeholder="CPF do Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="clienteTelefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="clienteTelefone" name="clienteTelefone" placeholder="Telefone do Cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="clienteEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="clienteEmail" name="clienteEmail" required placeholder="Email do Cliente">
                    </div>
                    <button type="submit" class="btn light-brown">Adicionar Cliente</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'pages/footer.php'; // Inclui o rodapé ?>
