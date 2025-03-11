<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?= base_url() ?>assets/logo.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('user') ?></div>
                <div class="email">Administrator</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);" id="btn-logout"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php if($active == "Dashboard"){ echo "active"; } ?>">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php if($active == "Tentang"){ echo "active"; } ?>">
                    <a href="<?= base_url('tentang') ?>">
                        <i class="material-icons">notes</i>
                        <span>Tentang</span>
                    </a>
                </li>
                <li class="<?php if($active == "Algoritma"){ echo "active"; } ?>">
                    <a href="<?= base_url('algoritma') ?>">
                        <i class="material-icons">group_work</i>
                        <span>Algoritma</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                <?= APP_COPYRIGHT ?>
            </div>
            <div class="version">
                <b>Version: </b> 1.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>