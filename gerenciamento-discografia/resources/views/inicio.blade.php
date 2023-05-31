@include('componentes.header')

<div class="corpo-principal">
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
                    <div class="album-title">Álbum: {{ $album->nome }}, {{ $album->ano }}</div>
                    <div class="delete-icon">
                        <form action="{{ route('excluirAlbum', ['id' => $album->id_album]) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir esse Álbum?')">
                            @csrf
                            @method('PUT')
                            <button type="submit" title="Excluir Album" class="delete-button">
                                <img src="/assets/images/lixeira.png" />
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="column id">N°</div>
                    <div class="column faixa">Faixa</div>
                    <div class="column duracao">Duração</div>
                    <div class="column acao">Ação</div>
                </div>
                @foreach ($faixas->where('id_album', $album->id_album) as $faixa)
                    <div class="row">
                        <div class="column id">{{ $faixa->id_faixa }}</div>
                        <div class="column faixa">{{ $faixa->nome }}</div>
                        <div class="column duracao">{{ $faixa->duracao }}</div>
                        <div class="column acao">
                            <form action="{{ route('excluirFaixa', ['id' => $faixa->id_faixa]) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir essa Faixa?')">
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
