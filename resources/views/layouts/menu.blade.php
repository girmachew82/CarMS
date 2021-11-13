<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

          <li class="nav-item menu-is-opening menu-open">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="fas fa-cars"></i>
              <p>
                Cars
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="{{ route('car.index') }}" class="nav-link">
                <i class="fas fa-car"></i>                  
                <p>Cars</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('model.index') }}" class="nav-link">
                  <i class="fas fa-ambulance nav-icon"></i>
                  <p>Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('engine.index') }}" class="nav-link">
                  <i class="fas fa-cogs"></i>
                  <p>Engine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cpd" class="nav-link">
                  <i class="fas fa-calendar-alt"></i>
                  <p>Production date</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product" class="nav-link">
                  <i class="fab fa-product-hunt"></i>
                  <p>Product</p>
                </a>
              </li>
            </ul>
          </li>
          