<div class="page-wrapper">

    <div class="card card-outline-danger m-3">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Academic Regulation</h4>
        </div>
        <div class="card-block">
            <!-- Nav tabs -->
            <div class="vtabs">
                <ul class="nav nav-tabs tabs-vertical" role="tablist">
                    <?php foreach ($master as $key => $value) { ?>
                        <li class="nav-item"> <a class="nav-link <?= ($key == 0) ? 'active' : '' ?>" data-toggle="tab" href="#panel<?= $value['id'] ?>" role="tab">
                                <span class="hidden-xs-down"><?= $value['judul_arp'] ?></span> </a>
                        </li>
                    <?php } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <?php foreach ($master as $key => $value) { ?>
                        <div class="tab-pane <?= ($key == 0) ? 'active' : '' ?>" id="panel<?= $value['id'] ?>" role="tabpanel">
                            <h3><?= $value['judul_arp'] ?></h3>

                            <div style="text-align: justify;width:100% !important">
                                <?php echo html_entity_decode($value['deskripsi_arp']); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>

<!-- <style>
    * {
        box-sizing: border-box
    }

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 30%;
        height: 100%;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        /* border: 1px solid #ccc; */
        width: 70%;
        border-left: none;
        height: 100%;
    }
</style>

<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script> -->