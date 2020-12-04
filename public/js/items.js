let i;
let panier =   document.querySelector("#panier");
panier.innerHTML ="";
for(i in localStorage)
{
        let img = document.createElement('img');
    if(localStorage.getItem(i) && localStorage.getItem(i)!="undefined")
    {

      let Item = JSON.parse(localStorage.getItem(i));
      let div =document.createElement('div');
      div.classList.add('itemPanier');
      let img = document.createElement('img');
      img.src = Item['img'];
      let title = document.createElement('p');
      title.innerText = Item['title'];
      title.classList.add('title');
      let quality= Item['quality'];
      console.log(quality);
      let Quality= document.createElement("p");
      Quality.innerText =quality;
      Quality.classList.add('quality');
      div.appendChild(img);
      div.appendChild(title);
      div.appendChild(Quality);
      panier.appendChild(div);

        }
     //   paniier.appendChild()

}