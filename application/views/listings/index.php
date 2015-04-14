<html>
<head>
    <meta name="description" content="A job listing application in PHP and CodeIgniter">
    <meta name="author" content="gernest < gernest@live.com >">
    <meta charset="utf-8">

    <title>Test</title>
    <link href="/public/css/blowlist.css" rel="stylesheet">
    <script src="/public/js/zepto.min.js"></script>
    <script src="/public/js/blowlist.js"></script>
</head>
<body>
<div class="container">
    <nav class="menu">
        <div class="menu-item">
            <div>
                <h4 class="text-center">blowlisting</h4>
            </div>
        </div>
    </nav>

</div>
<div class="container">
    <div class="columns">
        <div class="column one-third">
            <div class="menu">
                <div class="menu-heading loading">
                    <span class="msg">Sending data...</span>
                    <span class="btn new-post">new post</span>
                </div>
                <?php echo form_open('listings/create', 'class="desc form"')?>
                <h4 class="menu-heading"> post new job</h4>
                <div class="input-group input-block">
                    <label for="title" class="menu-item form-control">Title</label>
                    <input type="input" name="title"  id="f-title" class="form-control input-block "/><br />
                </div>
                <label for="text" class="menu-item form-control">Description</label>
                <textarea name="description"  id="f-desc" class=" menu-item form-control input-block"></textarea><br />

                <input type="submit" name="submit" class="btn btn-block" value="Create news item" />
                </form>
            </div>
        </div>
        <div class="column two-thirds">
            <div class="main-content">
                <div class="menu listing text-center">
                    <h4 class="menu-heading">job listing</h4>
                    <div class="menu-item"></div>
                </div>
                <?php foreach($listings as $list):?>
                <div class="menu listing">
                <div class="menu">
                        <h4 class="menu-heading"> <?php echo $list['title']?></h4>
                        <p class="menu-item"> <?php echo $list['description']?></p>
                        <span class="btn single" r-path="/index.php/listings/view/<?php echo $list['id'];?>">View</span>
                    </div>
                 </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<footer>
    <em>&copy;2015</em>
</footer>
</body>
</html>
