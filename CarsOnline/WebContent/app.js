// show cart
 
 (function(){
	 const card = document.getElementById("card");
	 const cart = document.getElementById("cart");
	 card.addEventListener("click", function(){
		 cart.classList.toggle("show-cart");
	 });
 })();
  
 //add item to cart
 (function(){
	 const cartBtn = document.querySelectorAll(".store-item-icon");
	 cartBtn.forEach(function(btn){
		 btn.addEventListener("click", function(event){
			 //console.log(event.target);
			 if(event.target.parentElement.classList.contains("store-item-icon")){
				 let fullPath = event.target.parentElement.previousElementSibling.src;
				 let pos = fullPath.indexOf("img") +3;
				 let partPath = fullPath.slice(pos);
				 const item={};
				 item.img='img-cart${partPath}';
				 let name= event.target.parentElement.parentElement.nextElementSibling.children[0].children[0].textContent;
				 item.name = name;
				 
				 //console.log(name);
			 }
		 });
	 });
 })();
