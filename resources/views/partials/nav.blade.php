<section class="sidebar">
<!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" /> -->
            </div>
            <div class="pull-left info">
              <p>{{auth()->user()->firstName}} {{auth()->user()->lastName}}</p>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu de Navegação</li>
            <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle"></i> <span>Incluir</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('admin.lancamento',['id'=>'rf'])}}"><i class="fa fa-circle-o"></i>Receitas Fixas</a></li>
                <li><a href="{{route('admin.lancamento',['id'=>'rv'])}}"><i class="fa fa-circle-o"></i> Receitas Variáveis</a></li>
                <li><a href="{{route('admin.lancamento',['id'=>'df'])}}"><i class="fa fa-circle-o"></i>Despesas Fixas</a></li>
                <li><a href="{{route('admin.lancamento',['id'=>'dv'])}}"><i class="fa fa-circle-o"></i> Despesas Variáveis</a></li>
              </ul>
            </li>
            <li><a href="{{route('delete')}}"><i class="fa fa-circle"></i>Excluir Receita/Despesa</a></li>
            <li><a href="{{route('report')}}"><i class="fa fa-circle"></i>Relatório</a></li>

            
          </ul>
        </section>