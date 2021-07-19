//create variable jsonObject of jsonString data from database parse to become object
var jsonObject = JSON.parse(jsonString);
//console log jsonObject and jsonString
console.log(jsonObject);
console.log(jsonString);
RefreshBlogs();
RefreshBlogs();
function RefreshBlogs() {
var BlogsContainer = document.getElementById("BlogsContainer");
//reset the content to empty

//var Blogsearch = document.getElementById("shopSearch").value;

BlogsContainer.innerHTML = "";
//create a loop through the list of Blogs once
for(var  i = jsonObject.Blogs.length -1; i >= 0;i--) {
//if(jsonObject.Blogs[i] .Rating == parseInt(Blogsearch))

var product = document.createElement("div");
product.id = "itemContainer";
//grab the object from the string
//product title
var productBlogName = document.createElement("h2");
var str =jsonObject.Blogs[i].Title;
productBlogName.innerText ="TITLE: " +str;
productBlogName.id = "h2";
product.append(productBlogName);
//product Caption
var productBlogCaption = document.createElement("p");
productBlogCaption.innerText =  jsonObject.Blogs[i] .Caption;
productBlogCaption.id = "caption";
product.append(productBlogCaption);

//product release date
var productBlogYear = document.createElement("p");
productBlogYear.innerText ="Date: " +  jsonObject.Blogs[i] .Blogdate;
productBlogYear.id = "date";
product.append(productBlogYear);
//product image
var productImage = document.createElement("img");
productImage.id = "Blog_image";
productImage.src= "uploads/" + jsonObject.Blogs[i] .Image;
product.append(productImage);

//product Content

// var link = document.createElement("a");
// link.href= "http://www.google.com";
// product.append(link);
// var contentlink =document.createElement("p");
// contentlink.innerText="Content:";
// link.append(contentlink);
var productBlogGenre = document.createElement("p");
productBlogGenre.innerText =   jsonObject.Blogs[i] .Content;
productBlogGenre.id = "p";
product.append(productBlogGenre);

var personLink = document.createElement("p");
personLink.innerText = "Read More..";
personLink.id = "profileLink";
//personLink.onclick = () => { console.log(jsonObject.people[i].link); };

var urlLink = jsonObject.Blogs[i].ID;
(function(link){
    personLink.onclick = () => {
        window.open("post.php?postID=" + link);
    }
})(urlLink)
console.log(personLink);
product.append(personLink);

BlogsContainer.append(product);
}
// else if (Blogsearch ==""){console.log("Empty");
// var product = document.createElement("div");
// product.id = "itemContainer";
//   var empty = document.createElement("p");
//   empty.innerText ="Please type rating between 1 and 5 to search for rating";
//   empty.id = "p";
//   product.append(empty);
//
// }
}
//}
//}
