<!-- https://getbootstrap.com/docs/5.3/components/navbar/#how-it-works أخذناه من هذا الموقع وقمنا بالتصرف فيه  -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: aqua;">
    <div class="container">  <!-- حذفنا من هنا container-fluid ﻷنها بهذه الطريقة يكون الشريط متجه نحو اليسار   -->
        <a class="navbar-brand" href="#">Cartware</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- هذا السطر له علاقة باتجاه الخيارات الموجودة في الشريط هذا الأمر يكون على الشمال navbar-nav me-auto mb-2 mb-lg-0  ولو نريد تغيره إلى اليمنين نحذف me إلى ms-->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?action=list">List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=create">Add User</a>
                </li>
<!--
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=delete">Delet</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=edit">Edit</a>
                </li>

            </ul>
-->

            </form>
        </div>
    </div>
</nav>