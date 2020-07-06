<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="post-list">
    </div>
    <div class="add-post">
        <form>
            <input type="text" id="title" placeholder="Title" value=""><br>
            <input type="text" id="body" placeholder="Body" value=""><br>
            <button id="addPost">Add post</button>
        </form>
    </div>
</body>
<script src="index.js"></script>
</html>

<style>
    body {
        margin: 0;
        padding: 0;
    }
    .post-list {
        display: flex;
        flex-wrap: wrap;
        margin: 0 auto;
        width: 90%;
    }
    .card {
        width: 200px;
        margin: 20px;
        padding: 20px;
        border: solid 1px #eee;
    }
    .add-post {
        width: 30%;
        margin: 60px auto;
        display: flex;
        flex-direction: column;
        height: 100px;
        justify-content: space-around;

    }
</style>