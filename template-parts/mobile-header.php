<!-- Header -->
  <div class="mheader" id="mheader">
    <div class="mobile-logo">
      <a href="<?php echo get_option( 'siteurl' );?>"><?php  mobile_logo();?></a>
    </div>
    <div class="mobile-search-icon search-icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6 .1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
    </div>
    <a class="mmenu-trigger" href="#my-menu">
      <span class="hamburger-wrapper">
        <span class="hamburger">

        </span>
        <span class="menu-text">Menu</span>
      </span>
    </a>
  </div>

<style>
  .mheader{
    --mobile-header-bg: <?php ekwa_get_value('mobile-header-bg', '#fff');?>;
    --hamburger-menu-bg: <?php ekwa_get_value('mobile-icon-bg', '#092c3e');?>;
    --hamburger-icon: <?php ekwa_get_value('mobile-icon-color', '#fff');?>;
  }
@media screen and (min-width: 1024px){
    .mheader{
      display: none;
    }
}
.mheader{
  position: relative;
  padding-top: 20px;
  padding-bottom: 20px;
  background: var(--mobile-header-bg);
}
.mmenu-trigger{
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 100px;
  background: var(--hamburger-menu-bg);
  height: 100%;
}
.hamburger-wrapper{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  display: block;
  margin: auto;
  left: 0;
  right: 0;
}
.hamburger-wrapper .menu-text{
  display: block;
  text-align: center;
  text-transform: uppercase;
  font-size: 12px;
  margin-top: 5px;
  display: block;
  color: var(--hamburger-icon);
}
.hamburger{
  height: 24px;
  width: 30px;
  border-top: 2px solid var(--hamburger-icon);
  border-bottom: 2px solid var(--hamburger-icon);
  position: relative;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  display: block;
}
.hamburger:after{
  position: absolute;
  height: 2px;
  width: 100%;
  background: var(--hamburger-icon);
  top: 50%;
  transform: translateY(-50%);
  content: "";
  display: block;

}
.mobile-logo{
  margin-left: 20px;
}
.mobile-logo img{
  width: 100%;
}
@media screen and (max-width: 480px){
    .mobile-logo{
      width: 200px;
    }
}
@media screen and (min-width: 480px){
    .mobile-logo{
      width: 230px;
    }
}
.mobile-search-icon{
  position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 120px;
}
.mobile-search-icon svg{
  width: 20px;
  cursor: pointer;
}

</style>

  <!--/Header-->