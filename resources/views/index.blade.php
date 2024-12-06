<x-layout title="Lista de Animais">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 16px; text-align: left; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <thead style="background-color: #4CAF50; color: white; font-weight: bold; text-transform: uppercase;">
                        <tr>
                            <th style="padding: 12px; border-bottom: 1px solid #ddd;">Brinco</th>
                            <th style="padding: 12px; border-bottom: 1px solid #ddd;">Nome</th>
                            <th style="padding: 12px; border-bottom: 1px solid #ddd;">Peso</th>
                            <th style="padding: 12px; border-bottom: 1px solid #ddd;">Sexo</th>
                            <th style="padding: 12px; border-bottom: 1px solid #ddd; text-align: center;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($animais as $animal)
                            <tr style="background-color: #f9f9f9; transition: background-color 0.3s ease;">
                                <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $animal['brinco'] }}</td>
                                <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $animal['nome'] }}</td>
                                <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $animal['peso'] }}</td>
                                <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $animal['sexo'] }}</td>
                                <td style="text-align: center; padding: 12px; border-bottom: 1px solid #ddd;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <a href="{{ url('/animal/update/' . $animal['id_animal']) }}" style="padding: 8px 12px; background-color: #FFC107; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">Editar</a>
                                        
                                        <!-- Formulário para Exclusão -->
                                        <form action="{{ route('animal.delete', $animal['id_animal']) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="padding: 8px 12px; background-color: #F44336; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ url('/animal/create') }}" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; font-size: 14px; width: 100%; margin-top: 20px; text-align: center;">
                    Adicionar Animal
                </a>
            </div>
        </div>
    </div>
</x-layout>
