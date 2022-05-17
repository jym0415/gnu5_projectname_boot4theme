

    var swiper1main_slide = new Swiper('.swiper1.main_slide', {
        pagination: '.swiper-pagination1',
        slidesPerView: '1',
        paginationClickable: true,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: {     //자동슬라이드 (false-비활성화)
            delay: 3000, // 시간 설정
            disableOnInteraction: false, // false-스와이프 후 자동 재생
          },
        pagination: {
            el: ".swiper-pagination",
          },
        autoplayDisableOnInteraction: false,
        centeredSlides: true,
        // spaceBetween: 6,
    });
    var swiper1main_slide2 = new Swiper('.swiper1.event', {
      pagination: '.swiper-pagination1',
      slidesPerView: '1',
      paginationClickable: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      loop: true, // 루프(반복)옵션 활성화시 주석해제
      autoplay: {     //자동슬라이드 (false-비활성화)
          delay: 3000, // 시간 설정
          disableOnInteraction: false, // false-스와이프 후 자동 재생
        },
      pagination: {
          el: ".swiper-pagination",
        },
      autoplayDisableOnInteraction: false,
      centeredSlides: true,
      spaceBetween: 10,
      breakpoints: { //반응형 조건 속성
        640: { //640 이상일 경우
          slidesPerView: 2, //레이아웃 2열
        },
        1024: {
          slidesPerView: 3,
        },
      }

  });