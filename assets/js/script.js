// анимация старт
// ждем полной загрузки страницы
window.onload = () => {
// preloader

  setTimeout(function() {
    let body = document.querySelector("body")
    let preloader = document.getElementById('page-preloader');
    if( !preloader.classList.contains('done') )
    {
      preloader.classList.add('done'),
      body.style.overflow = "auto";
    }
  }, 2000);
  // устанавливаем настройки
  const options = {
    // родитель целевого элемента - область просмотра
    root: null,
    // отступ снизу
    rootMargin: "20%",
    // процент пересечения - половина изображения
    threshold: 1,
  };
  // создаем наблюдатель
  const observer = new IntersectionObserver((entries, observer) => {
    // для каждой записи-целевого элемента
    entries.forEach((entry) => {
      // если элемент является наблюдаемым
      if (entry.isIntersecting) {
        //       // добавить ему CSS-класс
        entry.target.classList.add("anime-active");
      }
    });
  }, options);
  // выбираем обьект слежения по классу
  observer.observe(document.querySelector(".services__ads-circl"));
  observer.observe(document.querySelector(".services__sites-circl"));
  observer.observe(document.querySelector(".services__audit-circl"));
  observer.observe(document.querySelector(".services__seo-circl"));
  observer.observe(document.querySelector(".services__smm-circl"));
};

let elements = document.querySelectorAll(".link, .burger-menu");
for (let i = 0; i < elements.length; i++) {
  elements[i].onclick = function(){
    document.querySelector("#burger-menu__span1").classList.toggle("active"),
    document.querySelector("#burger-menu__span2").classList.toggle("active"),
    document.querySelector("#burger-menu__span3").classList.toggle("active"),
    document.querySelector(".menu").classList.toggle("active"),
    document.querySelector("body").classList.toggle("active");
  };
}

// слайдер
const swiper = new Swiper(".swiper", {
  autoplay: {
    delay: 1800,
  },
  speed: 400,
  spaceBetween: 100,
  loop: true,
});
const swiper2 = new Swiper(".swiper2", {
  autoplay: {
    delay: 1800,
  },
  speed: 400,
  spaceBetween: 300,
  loop: true,
});











