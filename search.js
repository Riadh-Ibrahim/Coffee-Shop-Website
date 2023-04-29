const inputSearch = document.getElementById('search-input');
const productList = document.querySelector('.product-list');
const searchBtn = document.getElementById("search-btn");


document.addEventListener('click', function(e) {
  if ((e.target !== inputSearch) && (e.target !== searchBtn) ) {
    productList.style.display = 'none';
  }
});

inputSearch.addEventListener('click', function() {
  productList.style.display = 'block';
});

searchBtn.addEventListener("click", () => {
  inputSearch.focus();
  search();
  productList.style.display = 'block';
});

const search =()=>{
  const searchbox = document.getElementById("search-input").value.toUpperCase();
  const storeitems = document.getElementById("product-list")
  const product= document.querySelectorAll(".product")
  
  for(var i=0; i<product.length; i++){
    let match =product[i].getElementsByTagName('p')[0];
    if(match){
      let text= match.textContent || match.innerHTML
      if(text.toUpperCase(). indexOf(searchbox) >-1){
        product[i].style.display="";
      }
      else{
        product[i].style.display = "none";  
      }
    }
  }
} 
