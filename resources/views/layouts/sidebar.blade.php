  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/kasir')}}">
          <i class="bi bi-grid"></i>
          <span>Kasir</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Administrator</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#master" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="master" class="nav-content collapse " data-bs-parent="#master">
          @php $masters = ['Data barang','Data kategori','Data supplier','Data satuan','Data pelanggan','Data karyawan']; @endphp
          @foreach($masters as $master)
          <li>
            <a href="{{url('/master/' . str_replace('Data ','',$master))}}">
              <i class="bi bi-circle"></i><span>{{$master}}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#laporan" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="laporan" class="nav-content collapse " data-bs-parent="#laporan">
         
          <li>
            <a href="{{url('/master/' . str_replace('Data ','',$master))}}">
              <i class="bi bi-circle"></i><span>{{$master}}</span>
            </a>
          </li>
         
        </ul>
      </li>

      

    </ul>

  </aside><!-- End Sidebar-->