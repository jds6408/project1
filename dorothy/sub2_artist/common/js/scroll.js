 $(document).ready(function () {




     var screenHeight = $(window).height();

     //스크롤의 좌표가 변하면.. 스크롤 이벤트
     $(window).on('scroll', function () {
         var scroll = $(window).scrollTop();
         //스크롤top의 좌표를 담는다
         console.log(scroll);

         /*   if (scroll > 350) {
                $(".content .artist_introduce .profile").css('opacity', 1);
            } else {
                $(".content .artist_introduce .profile").css('opacity', 0);
            }*/
         if (scroll > 890) {
             $('.content .artist_introduce .albums ul').css('opacity', 1).css('transition', '1s');
         } else {

             $('.content .artist_introduce .albums ul').css('opacity', 0).css('transition', '1s');
         }

         if (scroll > 1800) {
             $('.content .video2 .vid').css('opacity', 1).css('transition', '1s');
         } else {
             $('.content .video2 .vid').css('opacity', 0).css('transition', '1s');
         }
         if (scroll > 2200) {
             $('.content .video .vid').css('opacity', 1).css('transition', '1s');
         } else {
             $('.content .video .vid').css('opacity', 0).css('transition', '1s');
         }

         if (scroll > 3200) {
             $('.content .gallery div').css('opacity', 1).css('transition', '1s');
         } else {
             $('.content .gallery div').css('opacity', 0).css('transition', '1s');
         }

     });
 });