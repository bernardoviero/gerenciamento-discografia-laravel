<form id="search-input" action="{{ route('buscar') }}" method="POST">
    @csrf
    <div class="form-container">
        <label for="search-input">{{ $label ?? 'Digite uma palavra-chave' }}</label>
        <div class="input-container">
            <input type="text" id="search-input" name="search" placeholder="Digite sua pesquisa">
            <button type="submit" class="search-button">Procurar</button>
        </div>
    </div>
</form>
