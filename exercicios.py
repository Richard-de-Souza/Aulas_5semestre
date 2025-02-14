class Tarefa:
    def __init__(self, id, nome, descricao, status='pendente'):
        self.__id = id
        self.nome = nome
        self.__descricao = descricao
        self.__status = status        

    def get_tarefa(self):
        return self.__id, self.nome, self.__descricao, self.__status

    def add_tarefa(self, tarefa):
        self.__tarefas.append(tarefa)

    def concluir_tarefa(self, tarefa):
        self.__tarefas.status = 'concluida'

    def remover_tarefa(self, tarefa):
        self.__tarefas.remove(tarefa)
escolha = ''
while escolha != 's':
    print('O que deseja fazer?')
    escolha =  input('1 - Adicionar tarefa\n2 - Listar tarefas\n3 - Concluir tarefa\n4 - Remover tarefa\ns - Sair\n')

    if escolha == '1':
        print('-'*25)
        print('Adicionar tarefa')
        tarefa = []
        id = input('Digite o id da tarefa: ')
        nome = input('Digite o nome da tarefa: ')
        descricao = input('Digite a descricao da tarefa: ')

        tarefa = Tarefa(id, nome, descricao)
    if escolha == '2':
        print('-'*25)
        print('Listar tarefas')
        print(tarefa.get_tarefa())
    if escolha == '3':
        print('-'*25)
        print('Concluir tarefa')
        tarefa.concluir_tarefa()
    if escolha == '4':
        print('-'*25)
        print('Remover tarefa')
        tarefa.remover_tarefa()


