 $(document).ready(function () {


     var screenHeight = $(window).height();

     //스크롤의 좌표가 변하면.. 스크롤 이벤트
     $(window).on('scroll', function () {
         var scroll = $(window).scrollTop();
         //스크롤top의 좌표를 담는다
         console.log(scroll);

         if (scroll > 100) {
             $('.introduce_company img').css('left',0).css('transition','1s');
             $('.content .introduce_company_txt_wrap').css('right',0).css('transition','1s');
             
         } 

     });
 });