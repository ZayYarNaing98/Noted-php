<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/todo">ToDo</a>
            </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex align-items-center">
            <?php if($_SESSION['user']['email'] ?? false): ?>
            <span class="navbar-text text-primary me-2">
            <?= $_SESSION['user']['email'] ?>
            </span>
            <span class="navbar-text me-2">
                <a href="/logout">Logout</a>
            </span>
            <?php else: ?>
            <span class="navbar-text me-2">
                <a href="/login">Login</a>
            </span>
            <span class="navbar-text me-2">
            |
            </span>
            <span class="navbar-text me-2">
                <a href="/register" class="btn btn-primary btn-sm text-white">Register</a>
            </span>
            <?php endif; ?>
        </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->