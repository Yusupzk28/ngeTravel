<div class="sidebar">
    <h2>
        <span style="padding: 0 10px;">Admin</span>
        <div class="icons" style="padding: 0 10px;">
            <i class="fas fa-user-circle" style="margin-right: 5px;"></i>
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </h2>
    <ul>
        <li> 
            <a href="/dashboard" class="links_name">DASHBOARD</a>
        </li>
        <li>
            <a href="/destinasi" class="{{ request()->Is('destinasi*') ? 'active' : '' }}">DESTINASI</a>
        </li>
        <li>
            <a href="/paket" class="{{ request()->Is('paket*') ? 'active' : '' }}">PAKET</a>
        </li>
    </ul>
</div>