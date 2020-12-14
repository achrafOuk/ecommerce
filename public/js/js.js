document.querySelector("#shart").addEventListener("mouseover", function () {
  document.querySelector("#shart a").style.color = "#b11e22";
});

document.querySelector("#shart").addEventListener("mouseleave", function () {
  document.querySelector("#shart a").style.color = "white";
});
let elements = document.getElementsByClassName("items");

document.querySelectorAll(".buyitems").forEach((item, index) => {
  item.addEventListener("click", (event) => {
    let imageItem = document.querySelectorAll(".item img")[index].src;
    console.log(imageItem);
  });
});
function itemAddToshart(className) {
  document.querySelectorAll(".buyitem").forEach((item, index) => {
    item.addEventListener("click", (event) => {
      let imageItem = document.querySelectorAll(className + " img")[index].src;
      let title = document.querySelectorAll(className + " a")[index].innerHTML;
      let quality = document.querySelectorAll(className + " input")[index]
        .value;
      let link = document.querySelectorAll(className + " a")[index].href;
      let price = document.querySelectorAll(className + " #price")[index]
        .innerHTML;
      console.log(quality);
      //let imageItem= document.querySelectorAll(".items ")[index].src;
      let item = {
        img: imageItem,
        title: title,
        link: link,
        price: price,
        quality: quality,
        price: price,
      };
      localStorage.setItem(
        "storage" + localStorage.length,
        JSON.stringify(item)
      );
      //console.log(localStorage);
    });
  });
  document.querySelector("#slide-menu").addEventListener("click", (event) => {
    if (document.querySelector("#macarte").style.display === "block") {
      document.querySelector("#macarte").style.display = "none";
    } else {
      document.querySelector("#macarte").style.display = "block";
    }
  });
}
itemAddToshart(".item");
itemAddToshart(".items");
