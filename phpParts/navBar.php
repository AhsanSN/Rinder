<nav id="nav">
<ul>
    <?php 
    if ($logged == 1){
        ?>
        <li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
		<?
		if ($session_category == "professor"){
		    ?>
		    <li><a href="myPosts.php"><span class="icon fa-rss"></span></a></li>
		    <li><a href="writePost.php"><span class="icon fa-file-text-o"></span></a></li>
		    <li><a href="myUserProfile.php"><span class="icon fa-user"></span></a></li><?
		}
		else{
		    ?>
		    <li><a href="newsFeed.php"><span class="icon fa-rss"></span></a></li>
		    <li><a href="myProjects.php"><span class="icon fa-file-text-o"></span></a></li>
		    <li><a href="myUserProfile.php"><span class="icon fa-user"></span></a></li>
		    <?
		}
		?>
		<li><a href="settings.php"><span class="icon fa-gear"></span></a></li>
		<?
	
    }
    else{
        ?>
        
        <li><a href="index.html" class="active"><span class="icon fa-home"></span></a></li>

        <?
    }
    ?>
						
</ul>
</nav>