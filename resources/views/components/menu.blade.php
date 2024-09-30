<div class="con">
    <div class="topmenu">
        <div class="shoolname">Central Philippine Nazarene College</div>
        <div class="contact"><i class="fa-solid fa-phone"></i> +63 032 505-5131</div>
        <div class="email"><i class="fa-solid fa-at"></i> registrar@cpnc.edu.ph</div>
        <div class="address"><i class="fa-solid fa-envelope"></i> St. Mary's Drive, Apas Cebu City Philippines 6000</div>
        <div class="social"><a href="https://www.facebook.com/cpncMain"><i class="fa-brands fa-facebook"></i></a></div>
    </div>
    <header>

        <div class="logo">
            <img src="../images/cpnc-logo.png" alt="cpnc logo">
            <h1>CPNC</h1>
        </div>
        <nav id="menu-list" class="menu-active">
            <button class="slide-left" onclick="hide() "><i id="arrow-left"class="fa-solid fa-arrow-left"></i></button>
            <ul>
                <li>
                    <a onclick="hide()" href="/"> home</a>

                </li>
                <li>
                    <a href="about" id="about"> about </a>
                    {{-- <ul class="dropdown-menu " id="dropdown">
                        <li>
                            <a onclick="hide()" href="visionmission">vision and mission</a>
                        </li>
                        <li>
                            <a href="history">history</a>

                        </li>
                        <li>
                            <a href="welcome">message</a>
                        </li>
                        <li>
                            <a href="staff">staff</a>

                        </li>
                        <li>
                            <a href="achievementaccreditaion">achievements</a>
                        </li>
                    </ul> --}}




                    <div class="accreditationachievements"></div>
                </li>
                <li><a onclick="hide()" href="admissions">admission</a></li>
                <li><a onclick="hide()" href="academics">academics</a></li>
                <li><a onclick="hide()" href="announcement">announcement</a></li>
                <li><a onclick="hide()" href="central">central</a></li>
                <!-- <li><a onclick="hide()" href="www.cpnc.globalnaz.com/" target="_blank">GNECsis</a></li> -->
            </ul>
            <buton class="primary-btn" style="cursor: pointer;" onclick="hide(); redirect() ">GNECsis</buton>
        </nav>
        <button class="menu-btn" id="menu"><i id="bar" class="fa-solid fa-bars"
                style="font-size: 1rem;"></i></button>
    </header>
</div>

{{-- <nav class="navbar">
    <div class="title-bar">
        <div class="logo">logo</div>
        <div class="main-menu-btn">botton</div>
    </div>
    <div class="main-menu">
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="academics">Academics</a></li>
            <li><a href="admissions">Admissions</a></li>
            <li><a href="announcement">Announcement</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="otherlinks">Other Links</a></li>
            <li><a href="studentlife">Studnet Life</a></li>
        </ul>
    </div>
</nav> --}}
