// Arrow Function Ready to JQuery
$(() => {
  
  // Array de Objetos con información de las imágenes
  let dataImages = [
  
    {
      "id": 1,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (1).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (1).jpg"
      }
    },
    {
      "id": 3,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (2).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (2).jpg"
      }
    },
    {
      "id": 4,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (3).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (3).jpg"
      }
    },
    {
      "id": 6,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (4).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (4).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (15).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (15).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (17).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (17).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (30).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (30).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (32).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (32).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (33).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (33).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (34).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (34).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (35).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (35).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (8).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (8).jpg"
      }
    },
     {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (9).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (9).jpg"
      }
    },
     {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (10).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (10).jpg"
      }
    },
     {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (11).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (11).jpg"
      }
    },
     {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (12).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (12).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (13).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (13).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (14).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (14).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (6).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (6).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (7).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (7).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (18).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (18).jpg"
      }
    },{
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (19).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (19).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (20).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (20).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (21).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (21).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (22).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (22).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (23).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (23).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (24).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (24).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (25).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (25).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (26).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (26).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (27).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (27).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (28).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (28).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (29).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (29).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (31).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (31).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (40).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (40).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (41).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (41).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (43).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (43).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (42).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (42).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (44).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (44).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (45).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (45).jpg"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura (47).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura (47).jpg"
      }
    },
    
    
    
  ]
  
  // Función que ejecutará ImagesLoaded, Masonry y Photoswipe
  let photoSwipe = () => {
    var $container = $('.grid').imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.item',
        columnWidth: '.grid-sizer',
        percentPosition: true
      });
    });
    var container = [];
    $('#gallery').find('figure.item').each(function(){
      var $link = $(this).find('a.img-pswp'),
          item = {
            src: $link.attr('href'),
            w: $link.data('width'),
            h: $link.data('height'),
            title: $link.data('caption')
          };
      container.push(item);
    });
    $('a.img-pswp').click(function(event){
      event.preventDefault();
      var $pswp = $('.pswp')[0],
          options = {
            index: $(this).parent('figure.item').index(),
            bgOpacity: 0.85,
            showHideOpacity: true,
            showAnimationDuration: true
          };
      var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
      gallery.init();
    });
  },
  // Template HTML para las imágenes
  template = (el, elFilter) => {
    let tmpl = `
      <figure class="item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="img-pswp" href="${elFilter.url}" data-width="${elFilter.width}" data-height="${elFilter.height}" data-caption="${el.description}" itemprop="contentUrl" pid="${el.id}">
          <img id="${el.id}" src="${el.thumbImg.url}" itemprop="thumbnail" alt="${el.description}">
        </a>
      </figure>
    `;
    return tmpl;
  },
  keys = Object.keys(dataImages).map(key => dataImages[key]).reverse()
  
  // Agrego las imágenes al DOM y ejecuto la función Photoswipe
  if($(window).innerWidth() < 577){
    keys.forEach(data => $('#gallery').prepend(template(data, data.thumbImg)))
    photoSwipe()
  } else{
    keys.forEach(data => $('#gallery').prepend(template(data, data.tabletImg)))
    photoSwipe()
  }
  
  // Línea que ejecuta el Parallax
  $('figure.item').each(i => setTimeout(() => $('figure.item').eq(i).addClass('show-items'), 150 * (i+1)))
  
})