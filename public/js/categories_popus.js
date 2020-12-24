document.querySelector("#shart").addEventListener("mouseover", function () {
  document.querySelector("#shart a").style.color = "var(--blue)";
});

document.querySelector("#shart").addEventListener("mouseleave", function () {
  document.querySelector("#shart a").style.color = "var(--white)";
});
