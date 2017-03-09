<?php include_once "header.php"; ?>

<style>
#menu-toggle {
  display: none;
}
</style>

<section id="capa">
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-1 col-sm-6 col-md-4">
        <p>O Guia de Estilo é um sistema único que combina teoria, recursos e ferramentas para a unificação de experiências promovidas pela empresa Rock Content.</p>
        <p>
          <a type="button" data-toggle="modal" data-target="#myModal">
            Assista ao vídeo de introdução <span class="glyphicon glyphicon-play"></span>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-bodys">
        <iframe src="https://player.vimeo.com/video/207515437" width="100%" height="600" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<div class="container" id="topo">
  <div class="row">
      <div class="col-lg-10">
        <div class="row">
          <hr class="m-t-0" />
          <div class="col-xs-12">
            <h4>Menu rápido</h4><br />
          </div>
          <div class="col-xs-4">
            <a href="blog-marketing-de-conteudo.php" title="Blog Marketing de Conteúdo"><img src="imgs/destaques-blog.png" alt="" class="img-responsive" /><br />
              Blog Marketing de Conteúdo
            </a>
          </div>
          <div class="col-xs-4">
            <a href="blog-marketing-de-conteudo.php" title="Manual da Marca">
              <img src="imgs/destaques-marca.png" alt="" class="img-responsive" /><br />
              Manual da Marca
            </a>
          </div>
          <div class="col-xs-4">
            <a href="dicionario.php" title="Dicionário">
              <img src="imgs/destaques-dicionario.png" alt="" class="img-responsive" /><br />
              Dicionário
          </a>
          </div>
        </div>
      </div>
  </div>
</div>

<?php include_once "footer.php"; ?>
