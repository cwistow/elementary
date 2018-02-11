<div class="container">
	<header class="banner">
    <div class="row">
      <div class="col-xs-4 col-md-4 col-lg-3 col-xl-4">
        <a href="{{ home_url() }}"><img class="logo img-fluid" src="{{ get_template_directory_uri() . '/assets/images/logo.png' }}"></a>
      </div>
      <div class="col-xs-12 col-md-8 col-lg-6">
        @if (has_nav_menu('primary_navigation'))
        <nav class="navbar navbar-dark navbar-expand-md" role="navigation">
          <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'depth' => 0, 'container' => 'div', 'container_id' => 'navbarSupportedContent', 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'navbar-nav ml-auto', 'walker' => new App\Nav_Walker() ]) !!}
        </nav>
        @endif
      </div>
      <div class="col-lg-3 col-xl-2 text-md-right d-none d-lg-block">
        <a href="#" class="btn btn-secondary">Button</a>
      </div>
    </div>
  </header>