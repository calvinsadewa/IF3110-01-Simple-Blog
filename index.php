<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Simple Blog</title>


</head>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Simple<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.html">+ Tambah Post</a></li>
    </ul>
</nav>

<div id="home">
    <div class="posts">
        <nav class="art-list">
          <ul class="art-list-body">
			
            <!--<li class="art-list-item">
                <div class="art-list-item-title-and-time">
                    <h2 class="art-list-title"><a href="post.html">Apa itu Simple Blog?</a></h2>
                    <div class="art-list-time">15 Juli 2014</div>
                    <div class="art-list-time"></div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis repudiandae quae natus quos alias eos repellendus a obcaecati cupiditate similique quibusdam, atque omnis illum, minus ex dolorem facilis tempora deserunt! &hellip;</p>
                <p>
                  <a href="#">Edit</a> | <a href="#">Hapus</a>
                </p>
            </li>

            <li class="art-list-item">
                <div class="art-list-item-title-and-time">
                    <h2 class="art-list-title"><a href="post.html">Siapa dibalik Simple Blog?</a></h2>
                    <div class="art-list-time">11 Juli 2014</div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis repudiandae quae natus quos alias eos repellendus a obcaecati cupiditate similique quibusdam, atque omnis illum, minus ex dolorem facilis tempora deserunt! &hellip;</p>
                <p>
                  <a href="#">Edit</a> | <a href="#">Hapus</a>
                </p>
            </li>-->
			<?php 
				// Create connection
				$con=mysqli_connect("localhost","root","","blog_content");

				// Check connection
				if (mysqli_connect_errno()) {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$result = mysqli_query($con,"SELECT * FROM `blog`");
				if (!$result) {
					printf("Error: %s\n", mysqli_error($con));
					exit();
				}
				while($row = mysqli_fetch_array($result)) {
					echo "<li class=\"art-list-item\">";
					echo "<div class=\"art-list-item-title-and-time\">";
                    echo "<h2 class=\"art-list-title\">" .
							"<a href=\"view_post.php?id={$row['ID']}\">".$row['JUDUL']."</a>".
							"</h2>";
                    echo "<div class=\"art-list-time\">" . $row['TANGGAL'] . "</div>";
					echo "</div>";
					echo "<p>".$row['ISI']."</p>";
					echo "<p> <a href=\"edit_post.php?id={$row['ID']}\">Edit</a> |";
					echo "<a href=\"delete-post.php?id={$row['ID']}\" 
							onclick=\"return confirm('Anda yakin mau mendelete post ini?')\">Hapus</a> </p>";
					echo "</li>";
				}
				
				mysqli_close($con);
			?>
          </ul>
        </nav>
    </div>
</div>

<footer class="footer">
    <div class="back-to-top"><a href="">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        Asisten IF3110 /
        <a class="rss-link" href="#rss">RSS</a> /
        <br>
        <a class="twitter-link" href="http://twitter.com/YoGiiSinaga">Yogi</a> /
        <a class="twitter-link" href="http://twitter.com/sonnylazuardi">Sonny</a> /
        <a class="twitter-link" href="http://twitter.com/fathanpranaya">Fathan</a> /
        <br>
        <a class="twitter-link" href="#">Renusa</a> /
        <a class="twitter-link" href="#">Kelvin</a> /
        <a class="twitter-link" href="#">Yanuar</a> /
        
    </aside>
</footer>

</div>

</body>
</html>