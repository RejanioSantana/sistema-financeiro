 <!-- Logo -->
 <a href="{{route('panel.home')}}" class="logo"><b>Finanças</b>LTE</a>
 <!-- Header Navbar: style can be found in header.less -->
 <nav class="navbar navbar-static-top" role="navigation">
   <!-- Sidebar toggle button-->
   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
     <span class="sr-only">Toggle navigation</span>
   </a>
   <!-- Navbar Right Menu -->
   <div class="navbar-custom-menu">
     <ul class="nav navbar-nav">
       <!-- User Account: style can be found in dropdown.less -->
       <li class="dropdown user user-menu">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <span class="hidden-xs">{{auth()->user()->firstName}}</span>
         </a>
         <ul class="dropdown-menu">
           <!-- User image -->
           <li class="user-header">
             <p>
             {{auth()->user()->firstName}} {{auth()->user()->lastName}}
             </p>
           </li>
           <!-- Menu Footer-->
           <li class="user-footer">
             <div class="pull-right">
               <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sair</a>
             </div>
           </li>
         </ul>
       </li>
     </ul>
   </div>
 </nav>