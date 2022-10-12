@extends('layouts.app')
@section('content')
<div class="container mt-5 row col-12 text-center d-flex justify-content-center" >
  <h1>Financiamento e bancos</h1>
  <p>Escolha um banco e faça a sua simulação:</p>
  <div class="container row col-6 d-flex justify-content-around">
    <div class="row col-12 my-5 ">
      <div class="col m-2">
        <a href="https://ww3.itau.com.br/imobline/pre/simuladores_new/index.aspx?IDENT_bkl=pre&amp;IMOB_tipobkl=" target="_blank">
          <img src="https://cdn1.valuegaia.com.br/gaiasite/templates/banks/itau.jpg" class="rounded-circle float-left" alt="Itaú">
        </a>

      </div>
      <div class="col m-2">
        <a href="https://www.webcasas.com.br/webcasas/?headerandfooter/#/dados-pessoais" target="_blank">
          <img src="https://cdn1.valuegaia.com.br/gaiasite/templates/banks/santander.jpg" class="rounded-circle mx-auto d-block" alt="Santander"></a>
      </div>
    </div>
    <div class="row my-5 col-12 ">
      <div class="col m-2">
        <a href="https://www42.bb.com.br/portalbb/imobiliario/creditoimobiliario/simular,802,2250,2250.bbx?eni_gclid=Cj0KCQjwp86EBhD7ARIsAFkgakg39StNF0YBE3S5bgNiBlnuM-BMJd6hXU5ACfQtaweeFYraleQ5fqUaAlvvEALw_wcB&amp;pk_vid=e096ac2feeed30bf162033156524f1ab" target="_blank">
          <img src="https://cdn1.valuegaia.com.br/gaiasite/templates/banks/banco-brasil.jpg" class="rounded-circle float-right" alt="Banco do Brasil"></a>
      </div>
      <div class="col  m-2">
        <a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/encontre-seu-credito/simuladores-imoveis.shtm#box1-comprar" target="_blank">
          <img src="https://cdn1.valuegaia.com.br/gaiasite/templates/banks/bradesco.jpg" class="rounded-circle mx-auto d-block" alt="Bradesco"></a>
      </div>
      <div class="col  m-2">
        <a href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso" target="_blank">
          <img src="https://cdn1.valuegaia.com.br/gaiasite/templates/banks/caixa.jpg" class="rounded-circle mx-auto d-block" alt="Caixa"></a></li>
      </div>
    </div>
  </div>
</div>

@endsection