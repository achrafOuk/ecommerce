
document.querySelector('#shart').addEventListener('mouseover',function()
{
    document.querySelector('#shart a').style.color="#b11e22"; });


document.querySelector('#shart').addEventListener('mouseleave',function()
    {
        document.querySelector('#shart a').style.color="white"; });
 let elements=document.getElementsByClassName("items");

document.querySelectorAll('.buyitems').forEach(
    ( item,index ) => {
        item.addEventListener('click', event => {
        let imageItem= document.querySelectorAll(".item img")[index].src;
        console.log(imageItem);
      //  localStorage.setItem("storage"+localStorage.length,imageItem);
     //   console.log(localStorage);
         })
  }) 
    

   document.querySelectorAll('.buyitem').forEach(
    ( item,index ) => {
        item.addEventListener('click', event => {
        let imageItem= document.querySelectorAll(".items img")[index].src;
        let title = document.querySelectorAll(".items a ")[index].innerHTML;
        let quality = document.querySelectorAll(".items input")[index].value;
        console.log(quality);
         //let imageItem= document.querySelectorAll(".items ")[index].src;
        let item={
          'img':imageItem,
            'title':title,
            'quality':quality
        }    
        localStorage.setItem("storage"+localStorage.length,JSON.stringify(item));
        //console.log(localStorage);

    })
  })
