function createLocalStorage(array) {
  localStorage.clear();
  for (index in array) {
    localStorage.setItem(index.toString(), JSON.stringify(array[index]));
    console.log(localStorage);
  }
}

function mergeduplicateelement() {
  let storageCopie = new Array();
  for (i in localStorage) {
    let item = JSON.parse(localStorage.getItem(i));
    if (item) {
    }
    for (j in localStorage) {
      let item1 = JSON.parse(localStorage.getItem(j));
      if (
        item &&
        item1 &&
        i != j &&
        item["title"] === item1["title"] &&
        item != "undefined"
      ) {
        item.quality = parseInt(item1.quality, 10) + parseInt(item.quality, 10);
      }
    }
    let isExists = false;
    for (k in storageCopie) {
      console.log("item:", JSON.stringify(storageCopie[k]));
      console.log("items1:", JSON.stringify(item));
      if (Object.is(JSON.stringify(storageCopie[k]), JSON.stringify(item))) {
        isExists = true;
      }
    }
    if (item && item != "undefined" && isExists === false) {
      let obj = {};
      storageCopie.push(item);
      for (item in storageCopie) {
        //console.log("item2", item, ":", storageCopie[item]);
      }
    }
  }
  return storageCopie;
}
mergeduplicateelement();
if (window.storage === undefined) window.storage = mergeduplicateelement();
function addElementToPanier(dataItem) {
  let i;
  let panier = document.querySelector("#panier");
  let Totalprice = document.querySelector("#price");
  let Price = 0;
  panier.innerHTML = "";
  window.storage = dataItem;
  for (i in window.storage) {
    let Item = window.storage[i];
    let div = document.createElement("div");
    div.classList.add("itemPanier");
    let img = document.createElement("img");
    img.src = Item["img"];
    let title = document.createElement("a");
    title.innerText = Item["title"];
    title.href = Item["link"];
    title.classList.add("title");
    let quality = Item["quality"];
    let Quality = document.createElement("input");
    Quality.setAttribute("type", "number");
    Quality.setAttribute("min", "1");
    Quality.value = quality;
    Quality.classList.add("quality");
    let price = document.createElement("p");
    price.innerText = Item["price"];
    Price += parseInt(Item["quality"], 10) * parseInt(Item["price"], 10);
    let deleteButton = document.createElement("p");
    deleteButton.innerText = "r";
    deleteButton.classList.add("deletebutton");
    deleteButton.classList.add(i);
    div.appendChild(img);
    div.appendChild(title);
    div.appendChild(Quality);
    div.appendChild(price);
    div.appendChild(deleteButton);
    panier.appendChild(div);
  }
  Totalprice.innerText = Price;
}

//console.log(window.storage);
addElementToPanier(window.storage);
//console.log(window.storage);

function fun() {
  document.querySelectorAll(".quality").forEach((item, index) => {
    item.addEventListener("change", (event) => {
      console.log("1");
      let sum = 0;
      let items = document.querySelectorAll(".itemPanier");
      window.storage[index].quality = document.querySelectorAll(".quality")[
        index
      ].value;
      console.log(window.storage[index].quality);
      for (let i = 0; i < items.length; i++) {
        let quanitity = document.querySelectorAll(".quality")[i].value;
        let price = document
          .querySelectorAll(".itemPanier p")
          [i].innerHTML.split(" ")[0];
        price = parseInt(price, 10);
        sum += price * quanitity;
      }
      let total = (document.querySelector("#price").innerHTML = sum);
      createLocalStorage(window.storage);
      addElementToPanier(window.storage);
      fun();
      deleteItem();
    });
  });
}

function deleteItem() {
  document.querySelectorAll(".deletebutton").forEach((item, index) => {
    item.addEventListener("click", (event) => {
      console.log("2");
      window.storage.splice(index, 1);
      let sum = 0;
      let items = document.querySelectorAll(".itemPanier");
      for (let i = 0; i < items.length; i++) {
        let quanitity = document.querySelectorAll(".quality")[i].value;
        let price = document
          .querySelectorAll(".itemPanier p")
          [i].innerHTML.split(" ")[0];
        price = parseInt(price, 10);
        sum += price * quanitity;
      }
      let total = (document.querySelector("#price").innerHTML = sum);
      createLocalStorage(window.storage);
      addElementToPanier(window.storage);
      deleteItem();
      fun();
    });
  });
}

fun();
deleteItem();
//string
