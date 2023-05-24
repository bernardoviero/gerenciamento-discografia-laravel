@include('componentes.header', ['titulo' => 'Adicionar Álbum'])
<div class="corpo-principal">
    <div class="form-container-adicao">
        <form method="POST" action="{{ route('criarAlbum') }}">
            <div>
                <button type="button" onclick="window.location.href='/'" class="botao">Voltar</button>
            </div>

            @csrf
            @include('componentes.input', [
                'label' => 'Nome do Álbum',
                'id' => 'nome',
                'type' => 'text',
                'name' => 'nome',
                'for' => 'nome',
                'placeholder' => 'Digite o nome do Álbum',
                'class' => 'nome-input',
            ])
            @include('componentes.input', [
                'label' => 'Ano do Álbum',
                'id' => 'ano',
                'type' => 'number',
                'name' => 'ano',
                'for' => 'ano',
                'placeholder' => 'Digite o ano do Álbum',
            ])
            @include('componentes.input-text-area', [
                'label' => 'Descrição do Álbum',
                'id' => 'descricao',
                'name' => 'descricao',
                'for' => 'descricao',
                'placeholder' => 'Digite uma descrição para o Álbum',
            ])
            <input type="submit" value="Criar Álbum">
        </form>
    </div>
</div>
