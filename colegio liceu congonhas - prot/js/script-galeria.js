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
        "url": "img/estrutura/estrutura(1).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(1).JPG"
      }
    },
    {
      "id": 3,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(2).jpg"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(2).jpg"
      }
    },
    {
      "id": 4,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(3).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(3).JPG"
      }
    },
    {
      "id": 6,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(4).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(4).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(15).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(15).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(17).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(17).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(30).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(30).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(32).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(32).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(33).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(33).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(34).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(34).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(35).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(35).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(8).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(8).JPG"
      }
    },
     {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(12).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(12).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(14).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(14).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(6).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(6).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(7).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(7).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(18).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(18).JPG"
      }
    },{
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(19).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(19).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(20).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(20).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(21).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(21).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(22).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(22).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(23).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(23).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(24).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(24).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(25).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(25).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(26).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(26).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(27).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(27).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(31).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(31).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(40).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(40).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(42).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(42).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(44).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(44).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(45).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(45).JPG"
      }
    },
    {
      "id": 12,
      "description": "Galeria - Fotos",
      "tabletImg": {
        "height": "500",
        "width": "300",
        "url": "img/estrutura/estrutura(47).JPG"
      },
      "thumbImg": {
        "height": "300",
        "width": "500",
        "url": "img/estrutura/estrutura(47).JPG"
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