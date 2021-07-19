//var jsonObject = JSON.parse(jsonString);

CreatePostList();
function CreatePostList () {

    var postContainer = document.getElementById("ContactContainer");

    //for(var i = 0; i < jsonObject.post.length; i++) {

        var post = document.createElement("div");
        post.id = "ContactContainer";

        var postTitle = document.createElement("h2");
        postTitle.innerText = "About me"
        postTitle.id = "h2";
        post.append(postTitle);

        var postCaption = document.createElement("p");
        postCaption.innerText = "Hey, I am adetunji Adesemowo currently a part time postgraduate student of Interactive Digital Media at Griffith College Dublin. This website is about my hero Nelson Mandela. I am available sharing knowlege on how to build a responsive website and as an electrical engineer, more than ready to help with your electrical services needs."
        postCaption.id = "p";
        post.append(postCaption);

        var postDate = document.createElement("p");
        postDate.innerText = "You can reach me by email - mcsswords@gmail.com"
        postDate.id = "p";
        post.append(postDate);


        postContainer.append(post);

    //}

}
