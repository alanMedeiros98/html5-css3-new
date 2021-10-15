<?php
//				MODULO 1									CONCEITOS BÁSICOS

//													OQUE É HTML E PRA QUÊ SERVE?

//o html é o codigo que voce vai mandar para o navegador para ele enterpretar e mostrar para o usuario

//o html são os codigos estruturais do site e o css estiliza o site em si (deixa ele mais bonito como tamanho, cor posição)

//													QUAIS SOFTWARES EU VOU PRECISAR?

//voce pode usar qualquer um, como sublime text 3.0, visual studio code, netbeans. isso vai do gosto pessoal de cada um.

//													ONDE EU CRIO OS ARQUIVOS?

//não improta aonde voce crie os arquivos, oque importa é aonde voce abra, no caso voce tem que abrir no seu navegador padrão

//													OQUE É TAG?

//as tags sao como caixinhas (a continuação vai estar na pasta testes arquivo index.html)

//<h1>, <h2>, <h3>, <h4>, <h5>, <h6> - os H's sao basicamente tamanhos de letras (HEADING "cabeçalho")
//<hr/> - representa uma linha horizontal
//<p></p> - um paragrafo
//<strong></strong> - deixa o texto em negrito
//<u></u> - deixa o texto sublinhado

//													ATRIBUTOS

//sao parametros que voce especifica em uma TAG tais como largura, altura, links e etc.
//<a><a/> - sao links
//<img/> - sao imagens
//src="" - fonte de uma imagem ou link (atributo)
//href="" - é um link que voce tem que botar ai dentro (atributo)
//width="" - é a largura (atributo)
//height="" - é a altura (atributo)

//													ESTRUTURA BÁSICA

//<!DOCTYPY html> - ele ta dizendo pro navegador que ele pode usar os recursos mais avançados do html5
//<head> - é o cabeçalho do site
//<title> - é o titulo que vai na aba do navegador (vai dentro do <head>)
//<body> - é o corpo do site
//<meta charset="UTF-8"/> - ele corrige a acentuação da pagina

//		MODULO 2									ENTENDENDO O HTML COM CSS

//													OQUE É INDENTAÇÃO?

//serve unicamente para organizar o seu código

//													TAGS BASICAS (1/2)

//os H's servem alem de dar um impacto visual no seu site, eles ajudam o motor de busca do google a adentificar onde esta as coisas mais importantes nele
//outra TAG inportante tambem é o <p></p> que sao paragrafos
//a TAG <a href="https://www.google.com.br">ir para o google</a> voce ta criando um link basicamente

//													TAGS BASICAS(2/2)

//<img src="https://www.google.com.br/google.jpg" alt="logo do google"/> - serve para voce importar imagens para o seu site
//<button></button> - ele cria um botão basicamente
//<br> - serve para quebrar linhas
//<ul></ul> - ele cria uma lista nao ordenada e vai <li></li> dentro dele que vai ser os itens
//<ol></ol> - ele cria uma lista ordenada e vai <li></li> dentro dele

//													O QUE É E COMO USAR O CSS (1/2)

//serve basicamente para alterar as propriedades dos elementos
//
//3 formas de inserção do CSS no HTML:
//- CSS inline
//- CSS interno
//- CSS externo

//													O QUE É E COMO USAR O CSS (2/2)

//o css interno é feito dentro do <HEAD></HEAD>
//
//o css externo é feito em outro arquivo nomeado style.css e voce linka ele no html usando <link rel="stylesheet" href="style.css"/>
 
//													A BASE GERAL DO CSS

//voce usa class="exemplo" em uma TAG e depois voce seleciona ele usando .exemplo no arquivo style.css, o class pode ser usado em varios elementos
//
//ou voce usa id="exemplo" em uma TAG e depois voce seleciona ele usando #exemplo no arquivo style.css, o id só pode ser usado em um elemento especifico

//													CORES NO CSS

//todas as cores são uma mistura de 3 cores 
//
//RGB
//R = red
//G = green
//B = blue
//
//o mais usado de todos é o código exadecimal que é usado assim:background-color, color, : #ff00ff;

//													BORDAS

//as bordas mais usadoas são solid, dotted, dashed
//
//border: 5px solid #00ff00;
//border-bottom: 5px solid #00ff00;
//border-top: 5px solid #00ff00;
//border-right: 5px solid #00ff00;
//border-left: 5px solid #00ff00;
//
//para arredondar o borda voce faz assim:
//border-radius: 5px 5px 5px 5px;

//													MARGINS E PADDINGS NO CSS

//padding - espaçamento interno do meu elemento
//margin - espaçamento externo do meu elemento
//é feito no css

//													WIDTH E HEIGHT NO CSS

//voce pode usar em porcentagem, centimetros, pixels
//width: 100px, 100%, 100cm, inherit,
//max-width: //px;
//max-height: //px;
//min-width: //px;
//min-height: //px;

//													DICAS SOBRE WIDTH E HEIGHT

//box-sizing: content-box;
//box-sizing: border-box; - sempre usar quando for começar um projeto

//													LINK(1/2)

//target="_blank" - quando a pessoa clicar o chrome vai abrir outra pagina
//title="" - ele adiciona um titulo ao seu link quando voce passar o mouse por cima

//													LINK(2/2)

//voce pode colocar imagens como links tambem
//o <a> tambem consegue te mandar para outras areas especificas dentro da mesma pagina que voce esta
//:hover - o link vai mudar quando o mouse estiver por cima de acordo com as suas especificações
//:visited - aquele link ja foi visitado por aqueçe navegador

//													FORMATAÇÃO DE TEXTO

//strong - deixa em negrito
//em - italico
//small - deixa o texto pequeno
//del - ele coloca um risco no meio do texto
//mark - ele é um marca texto
//sup - ele faz o texto subir
//sub - ele faz o texto descer

//													COMENTARIOS NO HTML

// ela fica visivel so pra quem for mexer nos cogigos
//<!-- --> - e voce bota o seu texto entre elas, geralmente é uma explicação doque vem asseguir

//		MODULO 3									LISTAS, TABELAS E FORMULÁRIOS

//                          FORMATAÇÃO DE TEXTOS NO CSS (1/2)

//color: - muda a cor do texto
//font-size: - muda o tamanho do texto
//font-weight:bold - ele deixa o textto em negrito
//font-family:arial, verdana, serif, helvetica  - ele muda a fonte do texto
//text-align: left, center, right, justify - ele muda o alinhamento do texto
//text-decoration: underline, overline, none, line-through, underline overline - é usado geralmente nas TAGs <a>

//													FORMATAÇÃO DE TEXTOS NO CSS (2/2)

//text-transform: uppercase, lowercase - deixa a letra maiuscula ou minuscula
//letter-spacing: //px; - espaçamento entre uma letra e outra
//word-spacing: //px; - espaçamento entre uma palavra e outra
//line-height: //px; - espaçamento entre uma linha e outra
//text-shadow: //px //px //px #//; - adiciona sombreamento ao texto

//													ADICIONANDO FONTES EXTRAS

//voce vai no site do google fonts seleciona a fonte que voce quer e dpois voce copia o link que eles vao dar e cola no <head> e quando voce for usar
//o nome da fonte tem que estar entre ''

//													LISTAS NO HTML

//ul - listas nao ordenadas
//ol - listas ordenadas
//list-style-type: disc, square, circle, none; - para listas nao ordenadas
//type="a", "A", "1", "I", "i" - para listas ordenadas
//start="Nº" - para listas ordenadas
//e voce pode botar listas dentro de outras tambem fazendo assim:
/*<ul>
	<li>
    	café
        <ul>
        	<li>tres corações</li>
        	<li>pilão</li>
        	<li>melita</li>
        </ul>
    </li>
    <li>
    	leite
        <ul>
        	<li>aurora</li>
        	<li>italac</li>
        	<li>elege</li>
        </ul>
    </li>
    <li>
    	farinha
        <ul>
        	<li>finna</li>
        	<li>dona benta</li>
        	<li>renata</li>
        </ul>
    </li>

</ul>*/

//													TABELAS NO HTML	

//table - voce cria uma tabela
//th - voce cria um cebeçalho
//tr - voce cria uma linha
//a primeira linha sempre vai dentro do <thead>
//td - voce cria uma coluna
/*<table border="1" width="100%">
	<thead>
      <tr>
          <th>produto</th>
          <th>valor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>farinha</td>
          <td>8,50 R$</td>
      </tr>
      <tr>
          <td>trigo</td>
          <td>10,00 R$</td>
      </tr>
	</tbody>

</table>*/

//													TABELAS NO CSS

/*<style>
table{
width: 500px;
border-collapse: collapse;
text-align: left;
}
td, th{
padding: 10px;
border: 1px solid #000;
}
thead{
background-color: #00ff00;
}
tbody tr:hover{
background-color: #ccc;
text-decoration: underline;
}
</style>

</head>
<body>

<h1>pagina de teste</h1>

<table>
	<thead>
      <tr>
          <th>produto</th>
          <th>valor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>farinha</td>
          <td>8,50 R$</td>
      </tr>
      <tr>
          <td>trigo</td>
          <td>10,00 R$</td>
      </tr>
	</tbody>

</table>*/

//													FORMULARIOS

//





























































?>