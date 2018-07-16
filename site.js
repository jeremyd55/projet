
function renderIcons() {

    // Move icon
    if (!this.series[0].icon) {
        this.series[0].icon = this.renderer.path(['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8])
            .attr({
                'stroke': '#303030',
                'stroke-linecap': 'round',
                'stroke-linejoin': 'round',
                'stroke-width': 2,
                'zIndex': 10
            })
            .add(this.series[2].group);
    }
    this.series[0].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 - this.series[0].points[0].shapeArgs.innerR -
            (this.series[0].points[0].shapeArgs.r - this.series[0].points[0].shapeArgs.innerR) / 2
    );

    // Exercise icon
    if (!this.series[1].icon) {
        this.series[1].icon = this.renderer.path(
            ['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8,
                'M', 8, -8, 'L', 16, 0, 8, 8]
            )
            .attr({
                'stroke': '#ffffff',
                'stroke-linecap': 'round',
                'stroke-linejoin': 'round',
                'stroke-width': 2,
                'zIndex': 10
            })
            .add(this.series[2].group);
    }
    this.series[1].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 - this.series[1].points[0].shapeArgs.innerR -
            (this.series[1].points[0].shapeArgs.r - this.series[1].points[0].shapeArgs.innerR) / 2
    );

    // Stand icon
    if (!this.series[2].icon) {
        this.series[2].icon = this.renderer.path(['M', 0, 8, 'L', 0, -8, 'M', -8, 0, 'L', 0, -8, 8, 0])
            .attr({
                'stroke': '#303030',
                'stroke-linecap': 'round',
                'stroke-linejoin': 'round',
                'stroke-width': 2,
                'zIndex': 10
            })
            .add(this.series[2].group);
    }

    this.series[2].icon.translate(
        this.chartWidth / 2 - 10,
        this.plotHeight / 2 - this.series[2].points[0].shapeArgs.innerR -
            (this.series[2].points[0].shapeArgs.r - this.series[2].points[0].shapeArgs.innerR) / 2
    );
}
$(document).ready(function() {

  function smoothScroll(e) {
    e.preventDefault();
    $(document).off("scroll");
    var target = this.hash,
        menu = target;
    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top-40
    }, 0, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
    });
  }

  function openPopover(e) {
    e.preventDefault()
    closePopover();
    var popover = $($(this).data('popover'));
    popover.toggleClass('open')
    e.stopImmediatePropagation();
  }

  function closePopover(e) {
    if($('.popover.open').length > 0) {
      $('.popover').removeClass('open')
    }
  }

  $("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#elementtoScrollToID").offset().top
    }, 2000);
});

  function resize() {
    $body.removeClass('has-docked-nav')
    navOffsetTop = $nav.offset().top
    onScroll()
  }

  function onScroll() {
    if(navOffsetTop < $window.scrollTop() && !$body.hasClass('has-docked-nav')) {
      $body.addClass('has-docked-nav')
    }
    if(navOffsetTop > $window.scrollTop() && $body.hasClass('has-docked-nav')) {
      $body.removeClass('has-docked-nav')
    }
  }

  function escapeHtml(string) {
    return String(string).replace(/[&<>"'\/]/g, function (s) {
      return entityMap[s];
    });
  }

  function buildSnippets() {
    $codeSnippets.each(function() {
      var newContent = escapeHtml($(this).html())
      $(this).html(newContent)
    })
  }

    $("#photo1").hover(
      function(onmouseover){
        $(this).attr('src', 'images/printemps1.jpg');
        var resultat = '<h2>L\'Italie</h2>';
        document.getElementById('MaDiv').innerHTML = resultat;
      },
      function(onmouseout){
        $(this).attr('src', 'images/printemps.jpg');
        var resultat = '<h2></h2>';
        document.getElementById('MaDiv').innerHTML = resultat;
      }
    )
    $("#photo2").hover(
        function(onmouseover){
          $(this).attr('src', 'images/route1.jpg');
          var resultat = '<h2>Les USA</h2>';
          document.getElementById('MaDiv1').innerHTML = resultat;
        },
        function(onmouseout){
          $(this).attr('src', 'images/route.jpg');
          var resultat = '<h2></h2>';
          document.getElementById('MaDiv1').innerHTML = resultat;
        }
      )
    $("#photo3").hover(
        function(onmouseover){
          $(this).attr('src', 'images/champs1.jpg');
          var resultat = '<h2>L\'Écosse</h2>';
          document.getElementById('MaDiv2').innerHTML = resultat;
        },
        function(onmouseout){
          $(this).attr('src', 'images/champs.jpg');
          var resultat = '<h2></h2>';
          document.getElementById('MaDiv2').innerHTML = resultat;
        }
      )
    $("#photo4").hover(
        function(onmouseover){
          $(this).attr('src', 'images/marrais1.jpg');
          var resultat = '<h2>Le Japon</h2>';
          document.getElementById('MaDiv3').innerHTML = resultat;
        },
        function(onmouseout){
          $(this).attr('src', 'images/marrais.jpg');
          var resultat = '<h2></h2>';
          document.getElementById('MaDiv3').innerHTML = resultat;
        }
      )
    $("#photo5").hover(
        function(onmouseover){
          $(this).attr('src', 'images/arbres1.jpg');
          var resultat = '<h2>La Belgique</h2>';
          document.getElementById('MaDiv4').innerHTML = resultat;
        },
        function(onmouseout){
          $(this).attr('src', 'images/arbres.jpg');
          var resultat = '<h2></h2>';
          document.getElementById('MaDiv4').innerHTML = resultat;
        }
      )
    $("#photo6").hover(
        function(onmouseover){
          $(this).attr('src', 'images/canada1.jpg');
          var resultat = '<h2>Le Canada</h2>';
          document.getElementById('MaDiv5').innerHTML = resultat;
        },
        function(onmouseout){
          $(this).attr('src', 'images/canada.jpg');
          var resultat = '<h2></h2>';
          document.getElementById('MaDiv5').innerHTML = resultat;
        }
      );

      (function($){

        
        $('#header__icon').click(function(e){
            e.preventDefault();
            $('body').toggleClass('with--sidebar');
        });
    
       
        $('#site-cache').click(function(e){
           $('body').removeClass('with--sidebar');
        })


        
    
    })(jQuery);

    let open = false;

    $("#burg-button").click(function(){
      open = !open;
      if(!open){
        $("#menu").animate({"right":0 },500);
        $("html").animate({"margin-left": "-450px"},500);
      }
      else{
        $("#menu").animate({"right":"-450px" },500);
        $("html").animate({"margin-left": 0},500);
      }
     
    });

	$("a[href^='#']").click(function (e) {
		var 
			yPos,
			yInitPos,
      target = ($($(this).attr("href") + ":first"));
      
      e.preventDefault();

      yInitPos = $(window).scrollTop();
      window.location.hash = $(this).attr("href");

      $(window).scrollTop(yInitPos);

      target = ($($(this).attr("href") + ":first"));
      
      if (target.length == 0) {
        target = ($("a[href^='#'" + $(this).attr("href").replace(/#/gi,"") + "]:first"))
		}
		
      if (target.length == 1) {
        yPos = target.offset().top;
      
        $('html,body').animate({ scrollTop: yPos - 40 }, 1250);
		}
  });

  $(".modalBtn").click(function() {
    var id = $(this).attr('toggle-modal');
    var closeModalBtn = document.getElementsByClassName("close");

    $('#' + id).toggle();

  });
  
  // $(".modalBtn1").html(function(){
  
  object.onclick = function(){hide};
  object.addEventListener("click", hide);
    
  
  
  // $(".modalBtn1").click(function(){
      
      // var element = document.getElementsByClassName("first");
     
      // var container = document.getElementsByClassName("modal-content");
      // container[0].remove(element[0]);
      // container[0].append(document.getElementsByClassName("second")[0]);
  
      // var element = document.getElementsByClassName("second");
      // element[0]("second");  

  
  // });
});