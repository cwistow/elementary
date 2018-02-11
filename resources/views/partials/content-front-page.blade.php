<div class="entry">
  <div class="row">
    @if($i%2!=0)
      @if(has_post_thumbnail())
        <div class="col-xs-12 col-xl-6">
          <img src="{!! the_post_thumbnail_url() !!}" class="img-fluid">
        </div>
      @endif
      <div class="col-xs-12 col-xl-6">
        <div class="title">@php(the_title())</div>
        <div class="text">@php(the_content())</div>
      </div>
    @else
      @if(has_post_thumbnail())
        <div class="col-xs-12 col-xl-6 order-xl-2">
          <img src="{!! the_post_thumbnail_url() !!}" class="img-fluid">
        </div>
      @endif
      <div class="col-xs-12 col-xl-6 order-xl-1">
        <div class="title">@php(the_title())</div>
        <div class="text">@php(the_content())</div>
      </div>
    @endif
  </div>
</div>