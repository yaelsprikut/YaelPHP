<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/comp1230/assignments/assignment1/bootstrap_dashboard.php">ComicBay</a>
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-right" action="logout.php">
              <button type="submit" class="btn" value="login">Sign Out</a></button>
            </form>
            <ul class="nav">
              <li class="active"><a href="/comp1230/assignments/assignment1/bootstrap_dashboard.php">Home (Dashboard)</a></li>
              <li><a href="/comp1230/assignments/assignment1/bootstrap_admin.php">Items</a></li>
              <li><form class="navbar-form pull-middle" action="./search.php" method="GET">
              <input name="search" type="text" value="">             
              <button type="submit" value="search" class="btn btn-success">Search</a></button>
            </form></li>
			  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>