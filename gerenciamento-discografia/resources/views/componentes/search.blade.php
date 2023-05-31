<form id="search-input" action="{{ route('filtrar') }}" method="GET">
    @csrf
    <div class="form-container">
        <label style="margin-left:20px" for="search-input">{{ $label ?? 'Digite uma palavra-chave' }}</label>
        <div class="input-container">
            <input type="text" id="search-input" name="search" placeholder="Digite sua pesquisa">
            <button type="submit" title="Procurar Álbum" class="botao">Procurar</button>
        </div>
    </div>
</form>
