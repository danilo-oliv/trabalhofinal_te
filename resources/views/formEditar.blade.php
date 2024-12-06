<x-layout title="Editar Animal">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Formulário de edição -->
                <form action="{{ route('animal.save', $animal->id_animal) }}" method="POST" class="styled-form">
                    @csrf
                    @method('PUT')  <!-- Especifica que estamos utilizando o método PUT -->
                    <div class="form-group">
                        <label for="brinco">Brinco</label>
                        <input type="text" id="brinco" name="brinco" class="form-control" value="{{ $animal->brinco }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="{{ $animal->nome }}" required>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="number" step="0.01" id="peso" name="peso" class="form-control" value="{{ $animal->peso }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control" required>
                            <option value="M" {{ $animal->sexo == 'M' ? 'selected' : '' }}>M</option>
                            <option value="F" {{ $animal->sexo == 'F' ? 'selected' : '' }}>F</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cod_raca">Raça</label>
                        <select id="cod_raca" name="cod_raca" class="form-control" required>
                            <option value="">Selecione uma raça</option>
                            @foreach($racas as $raca)
                                <option value="{{ $raca->cod_raca }}" {{ $animal->cod_raca == $raca->cod_raca ? 'selected' : '' }}>{{ $raca->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Salvar</button>
                        <a href="{{ url('/') }}" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>


<style>
    .styled-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .styled-form .form-group {
        margin-bottom: 20px;
    }

    .styled-form label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .styled-form .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .styled-form .form-control:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .styled-form .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn-submit,
    .btn-cancel {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-submit {
        background-color: #4CAF50;
        color: white;
        border: none;
    }

    .btn-submit:hover {
        background-color: #45a049;
        transform: scale(1.05);
    }

    .btn-cancel {
        background-color: #F44336;
        color: white;
        text-decoration: none;
    }

    .btn-cancel:hover {
        background-color: #d32f2f;
        transform: scale(1.05);
    }
</style>
