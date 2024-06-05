/* HEADER */
document.querySelector(".menu_container__mobile__btn_close").addEventListener("click", () => {
 document.querySelector(".menu_container__mobile__btn_open").style.display = "block";
 document.querySelector(".menu_container__mobile__btn_close").style.display = "none";
 document.querySelector(".menu_container__mobile").style.display = "none";
 document.querySelector(".menu_container__mobile__header").style.display = "flex";
});
document.querySelector(".menu_container__mobile__btn_open").addEventListener("click", () => {
 document.querySelector(".menu_container__mobile__btn_open").style.display = "none";
 document.querySelector(".menu_container__mobile__btn_close").style.display = "block";
 document.querySelector(".menu_container__mobile").style.display = "block";
 document.querySelector(".menu_container__mobile__header").style.display = "none";
});
/* FAQ */
document.querySelectorAll(".div_details__item").forEach((item) => {
 const minimizeSiblings = true;
 const question = item.querySelector(".div_details__question");
 const answer = item.querySelector(".div_details__answer");
 const animationDuration = getComputedStyle(answer).getPropertyValue("--animation-duration");
 const milliseconds = parseInt(parseFloat(animationDuration) * (/\ds$/.test(animationDuration) ? 1000 : 1));
 const setHeight = () => answer.style.setProperty("--details-height", `${answer.scrollHeight}px`);

 item.classList.add("js-details");

 if (item.open) {
  item.classList.add("is-open");
  setHeight();
 } else {
  item.open = true;
  setHeight();
  item.open = false;
 }

 const onClick = (event) => {
  item.classList.toggle("is-open");

  if (item.open) {
   event.preventDefault();
   setTimeout(function () {
    item.open = false;
   }, milliseconds);
  }

  if (!minimizeSiblings) return;

  const siblings = [...item.parentNode.children].filter((el) => el.classList.contains("js-details")).filter((el) => el !== event.target.parentNode);

  siblings.forEach((el) => {
   el.classList.remove("is-open");
   setTimeout(function () {
    el.open = false;
   }, milliseconds);
  });
 };

 question.addEventListener("click", onClick);
});
/* header menu scroll */
window.addEventListener("scroll", () => {
 const divElement = document.querySelector(".menu_container__box");
 const divElement2 = document.querySelector("header");
 const divElement3 = document.querySelector(".menu_container__box2");
 const divElement4 = document.querySelector(".menu_container__box__category_1");
 if (window.pageYOffset > 50) {
  divElement.style.display = "none";
  divElement2.style.position = "fixed";
  divElement2.style.zIndex = "9";
  divElement3.style.marginTop = "0";
  divElement4.style.position = "fixed";
 } else {
  divElement.style.display = "flex";
  divElement2.style.position = "relative";
  divElement2.style.zIndex = "9";
  divElement3.style.marginTop = "15px";
  divElement4.style.position = "relative";
 }
});
/* tech */
document.querySelector(".tech_help_right").addEventListener("click", (e) => {
 document.querySelector(".tech_help_right").classList.toggle("tech_help_right__close");
});
document.querySelector(".tech_help_right").addEventListener("click", (e) => {
 !document.querySelector(".tech_help_right__block").classList.contains("none")
  ? setTimeout(() => {
     document.querySelector(".tech_help_right__block").classList.add("none");
    }, 300)
  : document.querySelector(".tech_help_right__block").classList.remove("none");
 setTimeout(() => {
  document.querySelector(".tech_help_right__block_item.i_item_1").classList.toggle("tech_help_right__block_item__close");
 }, 0);
});

/* header category */
let a_category_1 = document.querySelector(".a_category_1");
let menu_container__box__category_1 = document.querySelector(".menu_container__box__category_1");
let a_category_2 = document.querySelector(".a_category_2");
let menu_container__box__category_2 = document.querySelector(".menu_container__box__category_2");
let a_category_3 = document.querySelector(".a_category_3");
let menu_container__box__category_3 = document.querySelector(".menu_container__box__category_3");
let a_category_4 = document.querySelector(".a_category_4");
let menu_container__box__category_4 = document.querySelector(".menu_container__box__category_4");
let a_category_5 = document.querySelector(".a_category_5");
let menu_container__box__category_5 = document.querySelector(".menu_container__box__category_5");
let a_category_6 = document.querySelector(".a_category_6");
let menu_container__box__category_6 = document.querySelector(".menu_container__box__category_6");
a_category_1.addEventListener("mouseenter", function () {
 if (menu_container__box__category_1.classList.contains("none")) {
  menu_container__box__category_1.classList.remove("none");
  menu_container__box__category_2.classList.add("none");
  menu_container__box__category_3.classList.add("none");
  menu_container__box__category_4.classList.add("none");
  menu_container__box__category_5.classList.add("none");
  menu_container__box__category_6.classList.add("none");
 } else {
  menu_container__box__category_1.classList.add("none");
 }
});
a_category_2.addEventListener("mouseenter", function () {
 if (menu_container__box__category_2.classList.contains("none")) {
  menu_container__box__category_2.classList.remove("none");
  menu_container__box__category_1.classList.add("none");
  menu_container__box__category_3.classList.add("none");
  menu_container__box__category_4.classList.add("none");
  menu_container__box__category_5.classList.add("none");
  menu_container__box__category_6.classList.add("none");
 } else {
  menu_container__box__category_2.classList.add("none");
 }
});
a_category_3.addEventListener("mouseenter", function () {
 if (menu_container__box__category_3.classList.contains("none")) {
  menu_container__box__category_3.classList.remove("none");
  menu_container__box__category_1.classList.add("none");
  menu_container__box__category_2.classList.add("none");
  menu_container__box__category_4.classList.add("none");
  menu_container__box__category_5.classList.add("none");
  menu_container__box__category_6.classList.add("none");
 } else {
  menu_container__box__category_3.classList.add("none");
 }
});
a_category_4.addEventListener("mouseenter", function () {
 if (menu_container__box__category_4.classList.contains("none")) {
  menu_container__box__category_4.classList.remove("none");
  menu_container__box__category_1.classList.add("none");
  menu_container__box__category_2.classList.add("none");
  menu_container__box__category_3.classList.add("none");
  menu_container__box__category_5.classList.add("none");
  menu_container__box__category_6.classList.add("none");
 } else {
  menu_container__box__category_4.classList.add("none");
 }
});
a_category_5.addEventListener("mouseenter", function () {
 if (menu_container__box__category_5.classList.contains("none")) {
  menu_container__box__category_5.classList.remove("none");
  menu_container__box__category_1.classList.add("none");
  menu_container__box__category_2.classList.add("none");
  menu_container__box__category_3.classList.add("none");
  menu_container__box__category_4.classList.add("none");
  menu_container__box__category_6.classList.add("none");
 } else {
  menu_container__box__category_5.classList.add("none");
 }
});
a_category_6.addEventListener("mouseenter", function () {
 if (menu_container__box__category_6.classList.contains("none")) {
  menu_container__box__category_6.classList.remove("none");
  menu_container__box__category_1.classList.add("none");
  menu_container__box__category_2.classList.add("none");
  menu_container__box__category_3.classList.add("none");
  menu_container__box__category_4.classList.add("none");
  menu_container__box__category_5.classList.add("none");
 } else {
  menu_container__box__category_6.classList.add("none");
 }
});

/* trade in select */
let select_Trade_in__1 = document.querySelector(".select_Trade_in__1");
let select_Trade_in__2 = document.querySelector(".select_Trade_in__2");
let select_Trade_in__3 = document.querySelector(".select_Trade_in__3");
let select_Trade_in__btn = document.querySelector(".select_Trade_in__btn");
let select_Trade_in__disabled = document.querySelectorAll(".disabled");
if (select_Trade_in__1 !== null || select_Trade_in__2 !== null || select_Trade_in__3 !== null || select_Trade_in__btn !== null || select_Trade_in__disabled !== null) {
 setInterval(() => {
  if (select_Trade_in__1.value === "*** выберите устройство ***") {
   select_Trade_in__2.classList.add("disabled");
   select_Trade_in__3.classList.add("disabled");
   select_Trade_in__btn.classList.add("disabled");
   select_Trade_in__2.classList.remove("active");
   select_Trade_in__3.classList.remove("active");
   select_Trade_in__btn.classList.remove("active");
  } else {
   select_Trade_in__1.classList.remove("active");
   select_Trade_in__2.classList.replace("disabled", "active");
   if (select_Trade_in__2.value === "*** выберите модель ***") {
    select_Trade_in__3.classList.replace("active", "disabled");
   } else {
    select_Trade_in__2.classList.remove("active");
    select_Trade_in__3.classList.replace("disabled", "active");
    if (select_Trade_in__3.value === "*** выберите объем памяти ***") {
     select_Trade_in__btn.classList.replace("active", "disabled");
    } else {
     select_Trade_in__3.classList.remove("active");
     select_Trade_in__btn.classList.replace("disabled", "active");
    }
   }
  }
  document.querySelectorAll("select").forEach((e) => {
   e.classList.contains("disabled") ? (e.disabled = true) : (e.disabled = false);
   e.classList.contains("disabled") ? (e.disabled = true) : (e.disabled = false);
  });
 }, 400);
}

/* iPhone Catalog filter */
document.querySelector(".filter__details__header button").addEventListener("click", (e) => {
 e.target.classList.toggle("active");
 document.querySelector(".div_details__filter").classList.toggle("none");
});
document.querySelector(".div_details__filter__item__close_filter").addEventListener("click", (e) => {
 document.querySelector(".filter__details__header button").classList.remove("active");
 document.querySelector(".div_details__filter").classList.add("none");
});
