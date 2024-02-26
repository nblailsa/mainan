<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card-footer text-center">
        <button id="likeButton">Like</button>
        <span id="likeCount">0</span>
        <a href="">5 komentar</a>
    </div>

    <script>
        const likeButton=document.getElementById("likeButton");
        const likeButton=document.getElementById("likeCount");
        let count=0;
        likeButton.addEventListener("click",()=>{
            count++;
            likeCount.innerText=count;
        });
    </script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>