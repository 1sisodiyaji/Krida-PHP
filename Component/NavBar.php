
<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #031321">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../assets/BrandName.png" width="45" alt=""></a>

        <div class="d-flex justify-content-evenly  align-items-center  ">
            <div> <i class="fi fi-bs-search  text-start me-3 p-2" style="color: #FFE164 ;"></i></div>
            <div  class=" me-2 p-lg-1 p-0 mb-0 "><i class="fi fi-sr-credit-card fa-2x" style="color: #FFE164 ;"></i></div>
            <div  style="border-radius: 50% ; border : 1px solid #FFE164 " class = "me-0 " ><img src="../assets/default_pic.png" width="45"  onclick="rightbar();" alt=""> </div>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>

<!--Right side NavBar-->
<div class="container-fluid " id="rightSideBar" style="display: none ; background-color: #031321;">
    <div class="row flex-nowrap ">
        <div class="col-sm-4 col-md-4 col-lg-3 min-vh-100 d-flex justify-content-start"  style="background-color: #031321" >
            <div class="p-1">
                <a class =" d-flex text-decoration-none mt-1 align-items-center text-white">
                    <span class="fs-4 d-none d-sm-inline"> Krida</span>
                </a>
                <ul class="nav nav-pills flex-column mt-1">
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-capitalize" style="background-color: #031321" >
                                <i class="fi fi-sr-credit-card fa-2x" style="color: #FFE164 ;"></i>
                                <span class="fs-4  d-sm-inline ms-2" style="color: #FFE164 ;">Home</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-capitalize" style="background-color: #031321" >
                            <i class="fi fi-sr-credit-card fa-2x" style="color: #FFE164 ;"></i>
                            <span class="fs-4  d-sm-inline ms-2" style="color: #FFE164 ;">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-capitalize" style="background-color: #031321" >
                            <i class="fi fi-sr-credit-card fa-2x" style="color: #FFE164 ;"></i>
                            <span class="fs-4  d-sm-inline ms-2" style="color: #FFE164 ;">payments</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            
        </div>
    </div>
</div>


<script>
    function rightbar() {
        console.log("clicked");
        const rightSidebar = document.getElementById('rightSideBar');
        if (rightSidebar.style.display === 'none' || rightSidebar.style.display === '') {
            rightSidebar.style.display = 'block';
        } else {
            rightSidebar.style.display = 'none';
        }
    }
</script>