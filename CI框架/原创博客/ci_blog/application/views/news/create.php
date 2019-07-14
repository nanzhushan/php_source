<!-- ckeditor编辑器源码文件 -->
	<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="http://localhost/CI_blog/index.php/news">博客首页</a>
          <a class="blog-nav-item active" href="#">创建</a>
          <a class="blog-nav-item" href="#">点击</a>
          <a class="blog-nav-item" href="//localhost/CI_blog/index.php/login">登录</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h2 class="blog-title"><?php echo $title; ?></h2>
        <p class="lead blog-description">请添加一个新的文章</p>
      </div>
	
      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
		  

			<?php echo validation_errors(); ?>

			<?php echo form_open('news/create'); ?>

				<label for="title">标题</label><br/>
				<input type="input" name="title" /><br/>

				<label for="text">内容</label><br/>
				<textarea rows="10" cols="80" name="text"></textarea><br/>
				<script type="text/javascript">CKEDITOR.replace('text');</script>

				<input type="submit" name="submit" value="创建" />

			</form>
	
          </div><!-- /.blog-post -->

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
	
	
