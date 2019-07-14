  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">博客首页</a>

          <!-- <a class="blog-nav-item" href="//localhost/CI_blog/index.php/news/create">创建</a> -->
          <a class="blog-nav-item" href="<?php echo base_url() . 'index.php/news/create' ?>">创建</a>

          <a class="blog-nav-item" href="#">点击</a>
          <!-- <a class="blog-nav-item" href="//localhost/CI_blog/index.php/login">登陆</a> -->
          <a class="blog-nav-item" href="<?php echo base_url() . 'index.php/login' ?>">登陆</a>
		  <form class="navbar-form navbar-right" method="get">
            <div class="form-group">
              <input type="text" name="key" placeholder="sreach" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">查找</button>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <a class="author" id = 'username' href="<?php echo base_url() . 'index.php/login/logout' ?>" style="color: #FF0000" > 注销 </a>
            <a class="author" id = 'username' href="" style="color: #FF0000" > <?php echo $uid; ?> </a> 
          </form>

		
        </nav>
      </div>
    </div>

    <div class="container">
	<!--
      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>
	-->
      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
			  <br>
		  
		  	  <?php foreach ($blogs as $blogs_item): ?>

				<h2 class="blog-post-title"><?php echo $blogs_item['title']; ?></h2>
				
				<p class="blog-post-meta">
          <?php echo $blogs_item['dates']; ?>
          &nbsp;
					点击量: <?php echo $blogs_item['hits']; ?></a>
				</p>
				
				<div class="main">
					<?php echo iconv_substr($blogs_item['contents'],0,100); ?>...
				</div>
				<p><a href="<?php echo site_url('news/view/'.$blogs_item['id']); ?>">显示更多</a></p>
				<p><a href="<?php echo site_url('news/del/'.$blogs_item['id']); ?>">删除</a></p>
			
			  <?php endforeach; ?>
        
			  <br><br><?php echo $this->pagination->create_links();?>
            
          </div><!-- /.blog-post -->
		
		<!--
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
		-->
		
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>关于作者</h4>
            <p>浪迹一分钟 把妹更轻松</p>
            <p>套路是我学的 但撩你是真心的</p>
          </div>
		  <div class="sidebar-module sidebar-module-inset">
            <?php echo $this->calendar->generate(); ?>
          </div>
          <div class="sidebar-module">
            <h4>档案</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>友情链接</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

	

