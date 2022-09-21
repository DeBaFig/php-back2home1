@extends('layouts.appNavbar')
@section('content')
<!-- layout básico mostrando algumas casas em destaque -->
<div class="container">
    <!-- @foreach ($viewData["casas"] as $casa)
    @foreach ($casa as $key => $detalhe)

    {{ $key . "=>" . $detalhe }}
    <br>
    @endforeach
    @endforeach -->
</div>
<div class="options">
    <div class="option active" style="--optionBackground:url(https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png);">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <img src="https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png" />
            </div>
            <div class="info">
                <div class="main">Vecna</div>
                <div class="sub">Chegou a hora.</div>
            </div>
        </div>
    </div>
    <div class="option" style="--optionBackground:url(https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png);">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <img src="https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png" />
            </div>
            <div class="info">
                <div class="main">Eleven</div>
                <div class="sub">O meu herói é o meu pai.</div>
            </div>
        </div>
    </div>
    <div class="option" style="--optionBackground:url(https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png);">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <img src="https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png" />
            </div>
            <div class="info">
                <div class="main">Hopper</div>
                <div class="sub">Manhãs são para café e contemplação</div>
            </div>
        </div>
    </div>
    <div class="option" style="--optionBackground:url(https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png);">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <img src="https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png" />
            </div>
            <div class="info">
                <div class="main">Eddie</div>
                <div class="sub">Bem-vinda ao Hellfire.</div>
            </div>
        </div>
    </div>
    <div class="option" style="--optionBackground:url(https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png);">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon">
                <img src="https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/master/card-stranger-things/images/ic-bg-eddie.png" />
            </div>
            <div class="info">
                <div class="main">Dustin</div>
                <div class="sub">Badda Badda BOOM!</div>
            </div>
        </div>
    </div>
</div>


@endsection