@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h1 class="h1">Sobre a Back2Home 1</h1>
        </div>
        <div class="col-md-6 col-xs-12 hidden-xs">
            <ol class="breadcrumb pull-right">
                <li><a href="https://back2home1.herokuapp.com/">Inicial</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-5 p-2">
            <figure class="figure">
                <img src="{{ asset('assets/img/building/business.jpg')}}" class="figure-img img-fluid rounded col-md-11" alt="...">
            </figure>
        </div>
        <div class=" container col-xs-12 col-md-7">
            <p> A sua CASA precisa ser o seu LAR. Para isso, a Back 2 Home 1 - Imóveis, nasceu no ano de 2022, para atuar no mercado da compra e venda de imóveis, dispondo na sua carteira os melhores imóveis à venda.
            <p> Usamos a tecnologia e práticas inovadoras para criar soluções, visando a concretização de negócios que resultem em realização de sonhos.
            <p> Oferecemos aos nossos clientes assessoria especializada para financiamento, e uma capacitada equipe de corretores.
            <p> Por tudo isso, estamos aptos à prestar aos nossos clientes os melhores serviços, atendendo às suas expectativas e necessidades.
            <div class="container">
                <div class="h2">Missão</div>
                <div class="container">
                    Excelência no atendimento com comprometimento, qualidade e modernidade, compreendendo profundamente as necessidades e expectativas dos clientes, garantindo as melhores ofertas custo/benefício em todos os segmentos do mercado.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <br /><br />
            <h3 class="title-home-1">Vis&atilde;o</h3>
            <ol>
                <li>Ser reconhecida como a principal empresa, em expansão comercial de negócios imobiliários e empresa líder do mercado imobiliário residencial, comercial e lançamentos.</li>
                <li>Ser reconhecida como referência, na busca pelo aprimoramento do mercado imobiliário e de excelência nos serviços prestados aos clientes vendedores e compradores de imóveis.</li>
                <li>Facilitar negócios de forma inovadora e manter o relacionamento positivo junto aos clientes.</li>
                <li>Valorizar o Corretor de Imóveis com treinamento e orientações realizados por profissionais experientes e com o uso das nossas ferramentas de gestão, desenvolvendo um perfil diferenciado no mercado imobiliário e por consequência valorizar a profissão.</li>
                <li>Preservar e expandir o relacionamento conquistado com seus clientes, aperfeiçoando e reciclando constantemente os serviços prestados de maneira que isto gere mais valor a todos os envolvidos, clientes internos e externos.</li>
            </ol>
            <br /><br />
            <h3 class="title-home-1">Valores</h3>
            <br /><br />
            <h4>Trabalho</h4>
            Um profissional faz a diferença. Para mudar a realidade, a ação individual pesa tanto quanto ao conjunto. A boa atitude isolada influência e determina o resultado final, isto é trabalho.
            O trabalho é sinônimo de resultado. Somente profissionais comprometidos e trabalhando de maneira eficiente e eficaz conseguem o bom resultado. Na profissão de Corretor de imóveis o resultado não é obtido por sorte, é necessário muito trabalho, dedicação e comprometimento para se chegar à efetivação de um negócio.
            <br /><br />
            <h4>Respeito</h4>
            Tratamos a todos, clientes internos e externos com ética, justiça, respeito, cortesia, igualdade e dignidade.
            Respeitamos e valorizamos nossos clientes e seus direitos de consumidores, com informações corretas, cumprimento dos prazos acordados e oferecimento de alternativa para satisfação de suas necessidades de negócios.
            Exigimos de dirigentes e parceiros absoluto respeito pelo ser humano, pela sociedade e pelo meio ambiente.
            <br /><br />
            <h4>Honestidade</h4>
            Gerimos com honestidade nossos recursos, negócios e os bens que administramos, oferecendo oportunidades iguais nas transações a todos os envolvidos.
            Condenamos qualquer atitude que privilegie uma das partes envolvidas na prestação de nossos serviços ou em uma intermediação sob qualquer pretexto.
            Não admitimos qualquer relacionamento ou prática desleal de comportamento que resulte em conflito de interesses e que estejam em desacordo com o mais alto padrão ético.
            Não admitimos práticas que fragilizem a imagem da Imobiliária e comprometam a integridade.
            <br /><br />
            <h4>Transparência</h4>
            A transparência é o princípio nas relações da Imobiliária, comprometidos com a prestação de contas de nossas atividades e dos recursos por nós geridos.
            Valorizamos o processo de comunicação interna, disseminando informações relevantes relacionadas aos negócios e às decisões corporativas.
            <br /><br />
            <h4>Compromisso</h4>
            Temos o comprimosso ético com todos procedimentos no exercício de suas atribuições profissionais, e com o permanente cumprimento das leis, das normas e dos regulamentos internos e externos que regem a nossa atividade.
            Preservamos o sigilo e a segurança das informações.
            <br /><br />
            <br /><br />
        </div>
    </div>
</div>
@endsection