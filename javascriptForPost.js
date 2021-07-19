var jsonObject = JSON.parse(jsonString);

CreatePostList();
function CreatePostList () {

    var postContainer = document.getElementById("BlogsContainer");

    for(var i = 0; i < jsonObject.post.length; i++) {

        var post = document.createElement("div");
        post.id = "postContainer";

        var postTitle = document.createElement("h2");
        postTitle.innerText = jsonObject.post[i].title;
        postTitle.id = "h2";
        post.append(postTitle);

        var postCaption = document.createElement("p");
        postCaption.innerText = jsonObject.post[i].caption;
        postCaption.id = "caption";
        post.append(postCaption);

        var postDate = document.createElement("p");
        postDate.innerText = "Date: " + jsonObject.post[i].date;
        postDate.id = "p";
        post.append(postDate);

        var postImage = document.createElement("img");
        postImage.id = "Blog_image";
        postImage.src= "uploads/" + jsonObject.post[i] .image;
      post.append(postImage);

        var postCategory = document.createElement("p");
        postCategory.innerText = jsonObject.post[i].text;
        postCategory.id = "p";
        post.append(postCategory);


        postContainer.append(post);

    }

}
