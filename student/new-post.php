<?php
require("./header.php")
?>
        <main>
            <h3>Write a new post</h3>
            <form action="./inc/post.php" method="post" enctype="multipart/form-data" class="posting">
            <div class="post-area">
        
                <div class="new-post">
                    <h4 class="MT">Heading</h4>
                    <input type="text" name="postheading" id="newpost">
                </div>
                <div class="new-post">
                  <h4 class="MT">body</h4>
                  <textarea name="postbody" id="bodypost" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="postings">post</button>
            </form>
        </main>

</body>
</html>