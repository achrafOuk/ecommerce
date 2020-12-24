let elements = document.getElementsByClassName("items");

function itemAddToshart(className, buttonClass) {
  document.querySelectorAll(buttonClass).forEach((item, index) => {
    item.addEventListener("click", (event) => {
      console.log("index:", index);
      let imageItem = document.querySelectorAll(className + " img")[index].src;
      let title = document.querySelectorAll(className + " a")[index].innerHTML;
      console.log("title:", title);
      console.log("=======");
      let quality = document.querySelectorAll(className + " input")[index]
        .value;
      let link = document.querySelectorAll(className + " a")[index].href;
      let price = document.querySelectorAll(className + " #price")[index]
        .innerHTML;
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
    });
  });
}
document.querySelector("#slide-menu").addEventListener("click", (event) => {
  if (document.querySelector("#macarte").style.display === "block") {
    document.querySelector("#macarte").style.display = "none";
  } else {
    document.querySelector("#macarte").style.display = "block";
  }
});

itemAddToshart(".items", ".buyitem");
itemAddToshart(".item", ".buyitems");
