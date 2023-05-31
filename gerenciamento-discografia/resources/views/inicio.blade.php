@include('componentes.header')

<div class="corpo-principal">
    @if (session('success'))
        <div class="mensagem-sucesso">
            {{ session('success') }}
        </div>
    @endif
    <div class="search-container">
        @include('componentes.search')
    </div>
    <div>
        <div class="botoes-adicionar">
            <a href="adicionar-album"> @include('componentes.button', [
                'texto' => 'Adicionar Álbum',
                'title' => 'Adicionar Álbum',
            ]) </a>
            <a href="adicionar-faixa"> @include('componentes.button', [
                'texto' => 'Adicionar Faixa',
                'title' => 'Adicionar Faixa',
            ]) </a>
        </div>
        <section class="exibir-informacoes">
            @foreach ($albums as $album)
                <div class="album-header">
                    <div class="album-titulo">Álbum: {{ $album->nome }}, {{ $album->ano }}</div>
                    <div class="icone-exclusao">
                        <form action="{{ route('excluirAlbum', ['id' => $album->id_album]) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir o Álbum {{ $album->nome }}?')">
                            @csrf
                            @method('PUT')
                            <button type="submit" title="Excluir Album" class="botao-exclusao">
                                <img src="/assets/images/lixeira.png" />
                            </button>
                        </form>
                    </div>
                </div>
                <div class="linha">
                    <div class="coluna id">N°</div>
                    <div class="coluna faixa">Faixa</div>
                    <div class="coluna duracao">Duração</div>
                    <div class="coluna acao">Ação</div>
                </div>
                @foreach ($faixas->where('id_album', $album->id_album) as $faixa)
                    <div class="linha">
                        <div class="coluna id">{{ $faixa->id_faixa }}</div>
                        <div class="coluna faixa">{{ $faixa->nome }}</div>
                        <div class="coluna duracao">{{ $faixa->duracao }}</div>
                        <div class="coluna acao">
                            <form action="{{ route('excluirFaixa', ['id' => $faixa->id_faixa]) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir a Faixa {{ $faixa->nome }}?')">
                                @csrf
                                @method('PUT')
                                <button type="submit" title="Excluir Faixa"
                                    style="background: none; border: none; padding: 0; cursor: pointer;">
                                    <img src="/assets/images/lixeira.png" />
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </section>
    </div>
</div>
@include('componentes.footer')
