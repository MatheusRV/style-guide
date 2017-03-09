<?php include_once "header.php"; ?>

<div class="container" id="topo">
  <div class="row">
      <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-7">
              <p class="pagination"><a href="index.php">Home</a> | Mais</p>
              <h1>Elementos Web</h1>
              <p class="introducao">A maioria dos nossos conteúdos é publicado online e nossos elementos web também são muito importantes! Aqui você confere os principais.</p>
            </div>
            <div class="col-lg-5 thumbnail"></div>
          </div>
          <hr class="m-t-0" />
          <p>A maioria dos conteúdos que produzimos são publicados online e devem ser padronizados, não só por questões de estilo, mas também por determinações em padrões internacionais da web, comumente setados pela <a href="https://www.w3.org/" target="_blank">W3C</a> para linguagens como o HTML e o CSS.</p>
          <p>Essas são linguagens padrão para a criação de webpages, sendo que a aplicação de suas boas práticas é essencial para resultados positivos em estratégias de SEO.</p>
          <p>Aqui na Rock, essas práticas são levadas a sério e, por isso, incentivamos que todos os funcionários conheçam o básico dessas linguagens.</p>
          <p>Essa seção falará sobre esses elementos, guiando o colaborador da Rock para uma boa linha de padronização.</p>
          <h3>Textos</h3>
          <h4>Estilização básica</h4>
          <p>Você deve saber que, ao criar um texto para ser publicado na internet, é interessante se certificar que o mesmo seja bem escaneável, certo?</p>
          <p>Um dos métodos que mais colaboram para que seu texto tenha uma boa escaneabilidade é o uso de cabeçalhos. Ele também permite que buscadores, como o Google e o Bing, identifiquem títulos e subtítulos em suas páginas.</p>
          <p>Existem seis níveis de cabeçalhos no HTML, divididos do H1 ao H6. O H1 é usado para títulos; H2 para subtítulos; do H3 ao H6, usamos para demais tópicos de um texto. Veja o exemplo a seguir.</p>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;h1&gt;Título de uma página&lt;/h1&gt;<br />&lt;h2&gt;Subtítulo de uma página&lt;/h2&gt;<br />&lt;h3&gt;Subtítulo de terceiro nível&lt;/h3&gt;<br />&lt;h4&gt;Subtítulo de quarto nível&lt;/h4&gt;<br />&lt;h5&gt;Subtítulo de quinto nível&lt;/h5&gt;<br />&lt;h6&gt;Subtítulo de sexto nível&lt;/h6&gt;</code></pre></figure>
          <p>Além de cabeçalhos, em um texto você possivelmente encontrará parágrafos comuns ou citações. Para cada blog da Rock Content são setadas orientações específicas para a criação desses parágrafos, porém eles geralmente aglomeram ideias sem serem grandes o suficiente para serem cansativos.</p>
          <p>Para fazer o uso desses elementos usamos dois tipos de marcações. Veja os exemplos a seguir.</p>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;p&gt;A Rock Content é especialista em Marketing de Conteúdo.&lt;/p&gt;</code></pre></figure>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;blockquote&gt;"Eu &lt;3 Marketing de Conteúdo!"&lt;/blockquote&gt;</code></pre></figure>
          <p>Quanto a cores, tamanhos e famílias de fontes, não recomendamos sua alteração em artigos comuns. O ideal é que, ao perceber que o site ou blog apresente a necessidade da troca de fonte, seja requerida uma mudança na página de estilos (CSS) mestre do site, organizada por um programador.</p>
          <h4>Listas</h4>
          <p>Listas são usadas para apresentar passos, grupos ou conjuntos de informação. Sempre dê um contexto para sua lista, com uma breve introdução.</p>
          <p>As listas podem ser numeradas ou não. Porém as numere somente quando a ordem de seus elementos realmente importar.</p>
          <p>Para separar seus itens utilize ponto e vírgula (;) e finalize com ponto final (.), exceto em índices. Use letra maiúscula em todo início de tópico.</p>
          <p>No HTML, listas são criadas a partir das tags li, ol (numeradas) e ul (não numeradas). Veja os exemplos a seguir.</p>
          <p>Lista não-numerada:</p>
          <ul>
          <li>Exemplo 1;</li>
          <li>Exemplo 2;</li>
          <li>Exemplo 3.</li>
          </ul>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;ul&gt;<br />&lt;li&gt;Exemplo 1;&lt;/li&gt;<br />&lt;li&gt;Exemplo 2;&lt;/li&gt;<br />&lt;li&gt;Exemplo 3.&lt;/li&gt;<br />&lt;/ul&gt;</code></pre></figure>
          <p>Lista numerada:</p>
          <ol>
          <li>Exemplo 1;</li>
          <li>Exemplo 2;</li>
          <li>Exemplo 3.</li>
          </ol>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;ol&gt;<br />&lt;li&gt;Exemplo 1;&lt;/li&gt;<br />&lt;li&gt;Exemplo 2;&lt;/li&gt;<br />&lt;li&gt;Exemplo 3.&lt;/li&gt;<br />&lt;/ol&gt;</code></pre></figure>
          <p>Também é um interesse comum na nossa produção de conteúdos listar os subtítulos de um artigo, formando um índice linkado. Para criar esse tipo de índice, indicamos a leitura do <a href="http://marketingdeconteudo.com/indice-no-wordpress/" target="_blank">post especial de índices</a>.</p>
          <h4>Formatação</h4>
          <p>Quando usamos negrito, itálico, sublinhado ou qualquer outro elemento que seja <em>inline</em>, ou seja, que fique dentro de linhas ao invés de blocos, é necessário que seja respeitado o limite da palavra.</p>
          <p>Muito complicado? Veja os exemplos a seguir.</p>
          <p>"A Rock Content é especialista em <strong>Marketing de Conteúdo</strong>."</p>
          <p>Repare que o negrito não abrange o ponto final da frase. Essa divisão é importante pois o elemento destacado é "Marketing de Conteúdo", e não "Marketing de Conteúdo.".</p>
          <p>Quando o destaque é para o parágrafo inteiro, todos os elementos da frase entram nas tags de estilo, como no exemplo a seguir.</p>
          <p>"<strong>A Rock Content é especialista em Marketing de Conteúdo.</strong>"</p>
          <p>Nesse caso o ponto final (.) recebeu a estilização do negrito.</p>
          <h4>Links</h4>
          <p>Links também são elementos <em>inline</em> e, quando estão dentro de parágrafos, não abrangem pontuações que estão ao seu redor.</p>
          <p>Para se criar um link, usamos obrigatoriamente os elementos <strong>href</strong> e <strong>title</strong> para setar, respectivamente, o endereço e o título de um link. Quanto aos títulos, é importante que o mesmo seja bem descritivo e contenha apenas uma frase.</p>
          <p>Caso necessite que um link abra em uma nova aba, utilize o complemento <strong>target="_blank"</strong>. Veja os exemplos a seguir.</p>
          <p>Link que abre na mesma aba:</p>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;a href="LINK" title="TITULO DO LINK"&gt;TEXTO LINKADO&lt;/a&gt;</code></pre></figure>
          <p>Link que abre numa nova aba:</p>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;a href="LINK" title="TITULO DO LINK" target="_blank"&gt;TEXTO LINKADO&lt;/a&gt;</code></pre></figure>
          <h3>Imagens</h3>
          <p>As imagens da Rock Content remontam sua identidade visual e fazem conexão com o meio (site, blog, redes sociais etc.) em que estão distribuídas. Além desses meios, também dispomos de diversos canais (Marketing de Conteúdo, Saia do Lugar etc.), portanto, as imagens de cada uma dessas combinações têm diferentes contextos, mas todas devem respeitar as regras básicas a seguir.</p>
          <p>Quanto às especificações técnicas, todo o material divulgado online deve ser salvo com cores RGB e densidade de 72 DPIs. Quanto aos formatos, usamos principalmente JPG, PNG e SVG.</p>
          <ul>
          <li><strong>JPG - </strong>Em casos que a imagem não requer transparência;</li>
          <li><strong>PNG - </strong>Em casos que a transparência se faz necessária ou que uma imagem bitmap precisa apresentar uma qualidade superior ao JPG;</li>
          <li><strong>SVG - </strong>Para logotipos;</li>
          </ul>
          <p>Deve-se priorizar sempre o uso de imagens leves e que sejam acessíveis.</p>
          <h4>Alt text</h4>
          <p>O Alt text deve ser aplicado a todas as imagens que são publicadas no nosso ambiente online, mas especificamente em sites e blogs.</p>
          <p>Essa é uma maneira de garantir que os mecanismos de buscas entendam o que determinada imagem mostra, bem como ajudar pessoas que possuem problemas visuais a entender o que cada imagem representa.</p>
          <p>O Alt text deve descrever a imagem em até duas frases (aproximadamente 300 caracteres). Para mais informações sobre o uso do alt text, acesse sua seção.</p>
          <h3>Especificação técnica dos vídeos</h3>
          <p>Os vídeos da Rock Content são comumente publicados através do <a href="https://www.youtube.com/user/tvrockcontent" target="_blank">YouTube</a> ou <a href="https://vimeo.com/rockcontent" target="_blank">Vimeo</a>, portanto as regras para o uso desse elemento variam de acordo com a plataforma de publicação.</p>
          <p>É ideal, entretanto, que a largura de um player de vídeo ocupe 100% do elemento em que o vídeo se encontra. A autorreprodução não é indicada e os botões para controle do vídeo devem sempre estar bem destacados.</p>
          <p>Quanto às especificações técnicas, seguem os padrões:</p>
          <p><strong>1080p<br /></strong>Resolução: 1920 x 1080<br />Taxas de bits do vídeo<br />Máxima: 6000 Kbps<br />Recomendada: 4500 Kbps<br />Mínima: 3000 Kbps</p>
          <p><strong>720p<br /></strong>Resolução: 1280 x 720<br />Taxas de bits do vídeo<br />Máxima: 4000 Kbps<br />Recomendada: 2500 Kbps<br />Mínima: 1500 Kbps</p>
          <p><strong>Configurações do codificador</strong></p>
          <p>Codec de vídeo: H.264, 4.1<br />Frame rate: de preferência 30fps<br />Frequência de keyframe: não exceder 4 segundos<br />Codec de áudio: AAC ou MP3<br />Codificação de taxa de bits: CBR</p>
          <p>Proporção de pixel: Quadrada<br />Tipos de frames: Verificação progressiva, dois quadros B, um quadro de referência<br />Codificação de entropia: CABAC<br />Taxa de amostragem de áudio: 44.1 KHz<br />Taxa de bits de Bitrate de áudio: 128 Kbps estéreo</p>


          <h3>Outros elementos</h3>
          <h4>Botões</h4>
          <p>Botões devem sempre apresentar ações e não devem ter mais que uma frase. A linguagem deve ser clara e concisa, evitando rodeios. A primeira letra deve ser sempre maiúscula.</p>
          <h4>Formulários</h4>
          <p>Os formulários devem ser concisos e devem contar com introduções que os expliquem. Nunca pergunte por informações que sejam de cunho pessoal, como o gênero de nossos visitantes.</p>
          <h4>Tags para Redes Sociais</h4>
          <p>As tags Open Graph existem atualmente para que plataformas de Mídias Sociais mais famosas, como Facebook e Twitter, consigam enxergar o conteúdo de uma página de maneira organizada e com o máximo de detalhes possível.</p>
          <p>Veja o exemplo a seguir:</p>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;!-- Facebook e LinkedIn --&gt;
  &lt;meta property="fb:app_id" content="XXXXX"&gt;
  &lt;meta property="og:title" content="TÍTULO"&gt;
  &lt;meta property="og:site_name" content="NOME DO SITE"&gt;
  &lt;meta property="og:url" content="URL DA PÁGINA"&gt;
  &lt;meta property="og:description" content="DESCRIÇÃO"&gt;
  &lt;meta property="og:type" content="website"&gt;
  &lt;meta property="og:image" content="IMAGEM DE COMPARTILHAMENTO" /&gt;</code></pre></figure>
          <figure class="highlight"><pre><code class="language-html" data-lang="html">&lt;!-- Twitter --&gt;
  &lt;meta name="twitter:card" content="summary_large_image"&gt;
  &lt;meta name="twitter:site" content="@PERFIL_NO_TWITTER"&gt;
  &lt;meta name="twitter:creator" content="@PERFIL_NO_TWITTER"&gt;
  &lt;meta name="twitter:title" content="TÍTULO"&gt;
  &lt;meta name="twitter:description" content="DESCRIÇÃO"&gt;
  &lt;meta name="twitter:image" content="IMAGEM DE COMPARTILHAMENTO"&gt;</code></pre></figure>
          <p>É importante observar que descrições têm o limite de 260 caracteres.</p>
          <h3>Uso de imagens e referências em cada canal</h3>
          <p>O nosso campo de atuação é bem amplo, e existem diversos canais pelos quais nos comunicamos com o nosso público. Sendo assim, é importante que os elementos visuais apresentem uma unidade para que a nossa marca seja facilmente reconhecida. Um estudo realizado pela Ethos3 – <a href="https://www.ethos3.com/2016/04/building-a-viral-infographic-the-story-behind-we-live-in-a-visual-world/" target="_blank">We Live In A Visual World</a> – apontou que uma pessoa retém, em média, 80% do que vê. Sendo assim, é primordial que haja uma atenção especial com a forma como o público enxerga a nossa marca.</p>
          <p>Para a nossas comunicação, adotamos uma linguagem de ilustração vetorial que flerta com o "flat design” por sua simplicidade. Porém nos valemos de sombras e degradês para gerar profundidades e texturas. </p>
          <p>Acreditamos que esse tipo de interferência dá ao nossos materiais um ar autêntico e sofisticado. Pensando em uma comunicação direta com diversas personas, evitamos o uso de elementos muito infantilizados. Os elementos geralmente são destacados e ajudam a ilustrar o título (que também aparece na imagem). Tentamos manter os elementos simples, quase icônicos, pois é importante que sejam facilmente reconhecidos e memorizados pelo público.</p>
          <div class="row slider">
            <div class="col-sm-4">
              <img src="http://marketingdeconteudo.com/wp-content/uploads/2016/09/ebook-landing-pages-620x316.png" alt="" class="img-responsive" />
            </div>
            <div class="col-sm-4">
              <img src="http://marketingdeconteudo.com/wp-content/uploads/2016/11/a-maldi%C3%A7%C3%A3o-do-job-620x316.png" alt="" class="img-responsive" />
            </div>
            <div class="col-sm-4">
              <img src="http://marketingdeconteudo.com/wp-content/uploads/2016/11/quiz-harry-potter-620x316.png" alt="" class="img-responsive" />
            </div>
          </div>
          <p>Procuramos variar as cores das imagens dos posts para que eles sejam facilmente distinguíveis. Não seguimos uma escala de cores específica nesse caso.</p>
          <p>É importante frisar que  produção destas ilustrações são autorais. Utilizamos moderadamente o banco de imagens <a href="http://www.freepik.com/" target="_blank">freepik.com</a> para otimizar o tempo com elementos mais complexos, mas ainda assim fazemos alterações para customizar o material e deixá-lo mais próximo do nosso estilo.</p>
          <p>Sempre buscamos referências no que vem sido produzido pela Google através do <a href="https://material.io/guidelines/" target="_blank">Google Material Design</a>, em seus blogs e em sua comunicação interna. A rede social para artistas <a href="https://dribbble.com/" target="_blank">Dribbble</a> também é fonte de inspiração diária.</p>
          <p>Essas imagens ilustram nossos posts do blog Marketing de Conteúdo e capas de ebooks. As mesmas imagens aparecem também nos compartilhamentos em redes sociais e landing pages (por meio de automações). Variações com um CTA também são geradas.</p>
          <p>Para demais imagens — como animações, eventos, divulgações de webinars, palestras, lives no Facebook, ações pontuais etc. — procuramos não destoar tanto da linguagem descrita posteriormente, mas como nesses casos às vezes lidamos com fotos reais, temos um pouco mais de liberdade para criação, como pode ser visto nos exemplos a seguir.</p>
          <div class="row slider">
            <div class="col-sm-4 col-sm-offset-4">
              <img src="https://media.giphy.com/media/3o7TKwhLZYEhvhebV6/source.gif" alt="" class="img-responsive" />
            </div>
          </div>
          <p>Evitamos utilizar muitas cores e degradês em animações pois estas interferência aumentam muito o tamanho do arquivo.</p>
          <p>Para o blog Saia do Lugar, a linguagem adotada é completamente diferente. Utilizamos fotografias reais encontradas em bancos de imagens gratuitos (como o <a href="http://jumbopic.com/" target="_blank">JumboPic</a>) ou no banco pago <a href="http://www.depositphoto.com/" target="_blank">depositphoto.com</a>. Procuramos tratar levemente as fotos com um filtro reduzindo um pouco a saturação.</p>
        </div>
  </div>
  <div class="row">
    <div class="col-lg-10">
      <hr />
      <p>Outros capítulos dessa seção:</p>
      <ol>
        <li><a href="elementos-web.php">Elementos Web</a></li>
        <li><a href="manual-da-marca.php">Manual da Marca</a></li>
        <li><a href="dicionario.php">Dicionário</a></li>
      </ol>
      <hr />
    </div>
  </div>
</div>

<?php include_once "footer.php"; ?>
