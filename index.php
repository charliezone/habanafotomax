<?php $page = 'home' ?>
<?php require_once 'header.php' ?>
    <section class="banner no-webp webp">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-8 pt-3 pt-md-0 offset-md-4 d-flex flex-column justify-content-md-center align-items-end">
                  <h1 class="d-none d-md-inline">Habana FotoMax</h1>
                  <h2>Estudio Fotográfico en Cuba</h2>
                  <p class="mt-3 d-none d-md-inline">Fotos para quinceañeras, bodas y niños.
                  Tendencias modernas, nightshot, exteriores con transporte incluido, photobook, ampliaciones y productos accesorios. Precios competitivos. Creatividad e innovación.</p>
                  <p>Mas de 15 años brindando un servicio de excelencia.
                    Tu elección inteligente.</p>
                  <div class="cta-buttons-wraper d-flex flex-md-row flex-column">
                    <a href="#services" class="cta-btn d-flex order-2 order-md-1 justify-content-center align-items-center me-3">echa un vistazo</a>
                    <a target="_blank" href="https://wa.link/y4vjh0" class="cta-btn d-flex order-1 order-md-2 justify-content-center align-items-center"><i class="fab fa-whatsapp me-2"></i> contactenos</a>
                  </div>  
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services py-5">
      <div class="container">
        <div class="row">
          <h3 class="services-subtitle text-center">Especialidad de la casa</h3>
        </div>
        <div class="row">
          <p class="text-center d-none d-md-inline">Trabajamos para lograr un producto de calidad y una experiencia 
            personalizada. Siempre generando ideas y marcando
            la diferencia.</p>
        </div>
        <div class="row my-5">
          <div class="col-md">
            <div class="card shadow border-0 rounded-3">
              <div class="img-wraper">
                <picture>
                  <source type="image/webp" srcset="./assets/img/compress/quinces.webp">
                  <source type="image/jpeg" srcset="./assets/img/quinces.jpg">
                  <img class="img-fluid w-100" src="./assets/img/quinces.jpg" alt="">
                </picture>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center">Quinces</h5>
                <a href="<?php echo $base_url ?>servicios/quinces.php" class="cta-btn d-flex order-2 order-md-1 justify-content-center align-items-center">Ver más</a>
              </div>
            </div>
          </div>
          <div class="col-md mt-4 mt-md-0">
            <div class="card shadow border-0 rounded-3">
              <div class="img-wraper">
                <picture>
                  <source type="image/webp" srcset="./assets/img/compress/bodas.webp">
                  <source type="image/jpeg" srcset="./assets/img/bodas.jpg">
                  <img class="img-fluid w-100" src="./assets/img/bodas.jpg" alt="">
                </picture>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center">Bodas</h5>
                <a href="<?php echo $base_url ?>servicios/bodas.php" class="cta-btn d-flex order-2 order-md-1 justify-content-center align-items-center">Ver más</a>
              </div>
            </div>
          </div>
          <div class="col-md mt-4 mt-md-0">
            <div class="card shadow border-0 rounded-3">
              <div class="img-wraper">
                <picture>
                  <source type="image/webp" srcset="./assets/img/compress/ninos.webp">
                  <source type="image/jpeg" srcset="./assets/img/ninos.jpg">
                  <img class="img-fluid w-100" src="./assets/img/ninos.jpg" alt="">
                </picture>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center">Niños</h5>
                <a href="<?php echo $base_url ?>servicios/ninos.php" class="cta-btn d-flex order-2 order-md-1 justify-content-center align-items-center">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="galery">
      <div class="container-fluid p-0">
        <div class="galery-graper">
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-1.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-2.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-3.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-4.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-5.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-6.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-7.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-8.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-9.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-10.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-11.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-12.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-13.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-14.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-15.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-16.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-17.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-18.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-19.jpg" class="galery-item no-webp webp"></a>
          <a data-fancybox="gallery-general" href="./assets/img/galery/general/images/full/galery-20.jpg" class="galery-item no-webp webp"></a>
        </div>
      </div>
    </section>

    <section class="video-promo d-flex align-items-center py-5 py-md-0">
      <div class="container">
        <div class="row">
          <div class="col pe-md-5 pe-0 mb-4 mb-md-0">
            <h3 class="section-title">La fotografía es nuestra pasión y el cliente nuestra razón de ser.</h3>
              <h4 class="section-subtitle mt-2">Desea conocer más acerca de nuestros servicios, ofertas y productos.</h4>
              <a target="_blank" href="https://wa.link/y4vjh0" class="cta-btn d-flex justify-content-center align-items-center mt-4"><i class="fab fa-whatsapp me-2"></i> contactenos</a>
          </div>
          <div class="col d-flex align-items-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HotUaLprP-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="for-men d-flex align-items-center py-5 py-md-0">
      <div class="container">
        <div class="row">
          <div class="col-md d-flex justify-content-center">
            <picture>
              <source type="image/webp" srcset="./assets/img/compress/men.webp">
              <source type="image/jpeg" srcset="./assets/img/men.jpg">
              <img class="img-fluid" src="./assets/img/men.jpg" alt="">
            </picture>
          </div>
          <div class="col-md d-flex flex-column justify-content-center">
              <h3 class="section-title mt-3 mt-md-0">Porque ellos tienen derecho a tener hermosos recuerdos.</h3>
              <h4 class="section-subtitle mt-2">Ofertas diseñadas especialmente para varones. Está de moda y llegó para quedarse. Nuestros hijos también cumplen quince años.</h4>
              <a target="_blank" href="https://wa.link/y4vjh0" class="cta-btn d-flex justify-content-center align-items-center mt-4"><i class="fab fa-whatsapp me-2"></i> contactenos</a>
          </div>
        </div>
      </div>
    </section>

    <section class="our-clients py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2 order-md-2">
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F904034006799160%3Fcomment_id%3D904070126795548&width=560&include_parent=false&appId=445541732563194&height=134" width="100%" height="134" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F855590161643545%3Fcomment_id%3D863282707540957&width=560&include_parent=false&appId=445541732563194&height=114" width="100%" height="114" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F855590161643545%3Fcomment_id%3D855831171619444&width=560&include_parent=false&appId=445541732563194&height=134" width="100%" height="134" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F859748724561022%3Fcomment_id%3D870436416825586&width=560&include_parent=false&appId=445541732563194&height=154" width="100%" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <h3 class="section-title">Que dicen nuestros clientes</h3>
            <h4 class="section-subtitle mt-2">Presencia en facebook siempre interactuando y activos en redes sociales. Tu opinión nos importa mucho.</h4>
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax&width=450&layout=standard&action=like&size=small&share=true&height=35&appId=445541732563194" width="100%" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F863976404138254%3Fcomment_id%3D864055760796985&width=560&include_parent=false&appId=445541732563194&height=134" width="100%" height="134" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="testimonial">
              <iframe src="https://www.facebook.com/plugins/comment_embed.php?href=https%3A%2F%2Fwww.facebook.com%2FHabanaFotoMax%2Fposts%2F863976404138254%3Fcomment_id%3D864475484088346&width=560&include_parent=false&appId=445541732563194&height=114" width="100%" height="114" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container-fluid p-0">
        <div id="mapid"></div>
      </div>
    </section>
<?php require_once 'footer.php' ?>