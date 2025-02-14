class Tarefa:
    tarefas = []  # Lista para armazenar todas as tarefas

    def __init__(self, id, nome, descricao, status='pendente'):
        self.id = id
        self.nome = nome
        self.descricao = descricao
        self.status = status        

    def __str__(self):
        return f'ID: {self.id} | Nome: {self.nome} | Descrição: {self.descricao} | Status: {self.status}'

    @classmethod
    def get_tarefas(cls):
        if not cls.tarefas:
            print("Nenhuma tarefa cadastrada.")
        else:
            for tarefa in cls.tarefas:
                print(tarefa)

    @classmethod
    def add_tarefa(cls, tarefa):
        cls.tarefas.append(tarefa)
        print("✅ Tarefa adicionada com sucesso!")

    @classmethod
    def concluir_tarefa(cls, id):
        for tarefa in cls.tarefas:
            if tarefa.id == id:
                tarefa.status = 'concluída'
                print("✅ Tarefa concluída!")
                return
        print("⚠️ Tarefa não encontrada.")

    @classmethod
    def remover_tarefa(cls, id):
        for tarefa in cls.tarefas:
            if tarefa.id == id:
                cls.tarefas.remove(tarefa)
                print("🗑️ Tarefa removida com sucesso!")
                return
        print("⚠️ Tarefa não encontrada.")

# Loop principal do menu
escolha = ''

while escolha != 's':
    print('\nO que deseja fazer?')
    escolha = input('1 - Adicionar tarefa\n2 - Listar tarefas\n3 - Concluir tarefa\n4 - Remover tarefa\ns - Sair\n')

    if escolha == '1':
        print('-' * 25)
        print('Adicionar tarefa')
        id = input('Digite o ID da tarefa: ')
        nome = input('Digite o nome da tarefa: ')
        descricao = input('Digite a descrição da tarefa: ')

        nova_tarefa = Tarefa(id, nome, descricao)
        Tarefa.add_tarefa(nova_tarefa)

    elif escolha == '2':
        print('-' * 25)
        print('Listar tarefas')
        Tarefa.get_tarefas()

    elif escolha == '3':
        print('-' * 25)
        print('Concluir tarefa')
        id = input('Digite o ID da tarefa a concluir: ')
        Tarefa.concluir_tarefa(id)

    elif escolha == '4':
        print('-' * 25)
        print('Remover tarefa')
        id = input('Digite o ID da tarefa a remover: ')
        Tarefa.remover_tarefa(id)

    elif escolha == 's':
        print("👋 Saindo do sistema...")

    else:
        print("❌ Opção inválida! Escolha novamente.")
