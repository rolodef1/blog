<div id="navigation" class="navbar-fixed">   
  <nav>        
    <div class="nav-wrapper white">            
      <a href="" class="brand-logo" id="logo">Bit a Bit</a>            
      <a data-activates="mobile-demo" class="button-collapse" id="menu-mobile">
        <i class="material-icons">menu</i>
      </a>            
      <ul class="right hide-on-med-and-down">                
        <li>
          <a href=""><i class="material-icons left">description</i>Sobre Bit a Bit</a>
        </li>                
        <li>
          <a href=""><i class="material-icons left">library_books</i>Blog</a>
        </li> 
        <li>
          <a href=""><i class="material-icons left">work</i>Servicios</a>
        </li>            
      </ul>            
      <ul class="side-nav" id="mobile-demo">                
        <li>
          <a href=""><i class="material-icons left">description</i>Sobre Bit a Bit</a>
        </li>                
        <li>
          <a href=""><i class="material-icons left">library_books</i>Blog</a>
        </li> 
        <li>
          <a href=""><i class="material-icons left">work</i>Servicios</a>
        </li>             
      </ul>        
    </div>    
  </nav>
</div>
@section('js')
<script type="text/javascript">
  $(document).ready(function () {
    $(".button-collapse").sideNav();
  });
</script>
@endsection