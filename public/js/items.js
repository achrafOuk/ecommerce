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
      if (Object.is(JSON.stringify(storageCopie[k]), JSON.stringify(item))) {
        isExists = true;
      }
    }
    if (item && item != "undefined" && isExists === false) {
      storageCopie.push(item);
    }
  }
  return storageCopie;
}
function addElementToPanier() {
  let i;
  let panier = document.querySelector("#panier");
  let Totalprice = document.querySelector("#price");
  let Price = 0;
  panier.innerHTML = "";
  let storage = mergeduplicateelement();
  for (i in storage) {
    let Item = storage[i];
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

    //   paniier.appendChild()
  }
  Totalprice.innerText = Price;
}
items = mergeduplicateelement();

addElementToPanier();
