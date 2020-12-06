let i;
let panier = document.querySelector("#panier");
let Totalprice = document.querySelector("#price");
let Price = 0;
panier.innerHTML = "";
for (i in localStorage) {
  let img = document.createElement("img");
  if (localStorage.getItem(i) && localStorage.getItem(i) != "undefined") {
    let Item = JSON.parse(localStorage.getItem(i));
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
    Price += parseInt(Item["price"], 10);
    div.appendChild(img);
    div.appendChild(title);
    div.appendChild(Quality);
    div.appendChild(price);
    panier.appendChild(div);
  }

  //   paniier.appendChild()
}
Totalprice.innerText = Price;
