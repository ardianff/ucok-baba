<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SISTEM INFORMASI GEOGRAFIS - DKK SEMARANG</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="http://119.2.50.170:9095/gismap/asset/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://119.2.50.170:9095/gismap/asset/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://119.2.50.170:9095/gismap/asset/css/skins/skin-green.min.css">


    <!-- jQuery 2.2.3 -->
    <script src="http://119.2.50.170:9095/gismap/asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://119.2.50.170:9095/gismap/asset/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://119.2.50.170:9095/gismap/asset/js/app.min.js"></script>
    <script src="http://119.2.50.170:9095/gismap/asset/js/bootstrap-notify.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(document).ready(function() {
            function notify(message, type) {
                $.notify({
                    icon: "pe-7s-gift",
                    message: message

                }, {
                    type: type,
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });
            }
        })
    </script>
</head>

<body class="fixed skin-green layout-top-nav">
    <div class="wrapper">
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="http://119.2.50.170:9095/gismap/" class="navbar-brand">
                            <span><img src="http://119.2.50.170:9095/gismap/asset/img/logo_semarang.png"
                                    width="20px"></span>
                            DINAS KESEHATAN KOTA SEMARANG
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <nav class="navbar navbar-static-top" style="background-color: white;">
                <div class="container">
                    <div class="navbar-header">
                        <span class="navbar-brand" style="color:#00a65a;">SISTEM INFORMASI GEOGRAFI</span>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-wrapper" id="main">
            <div id="map" class="content-wrapper"></div>
            <div id="tools">
                <div id="draggable" class="panel panel-default draggable">
                    <div class="panel-body" style="padding: 5px;">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#sarkes" aria-controls="data" role="tab"
                                    data-toggle="tab">Sarkes</a></li>
                            <li role="presentation"><a href="#layer" aria-controls="layer" role="tab"
                                    data-toggle="tab">Layer</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sarkes">
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="checkbox" name="sarkes" value="puskesmas" class="sarkes" checked>
                                    Puskesmas
                                </div>
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="checkbox" name="sarkes" value="klinik pratama" class="sarkes"> Klinik
                                    Pratama
                                </div>
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="checkbox" name="sarkes" value="klinik utama" class="sarkes"> Klinik
                                    Utama
                                </div>
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="checkbox" name="sarkes" value="rumah sakit" class="sarkes"> Rumah
                                    Sakit
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="layer">
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="radio" name="layer" value="kecamatan" class="layer"> Kecamatan
                                </div>
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="radio" name="layer" value="puskesmas" class="layer"> Puskesmas
                                </div>
                                <div class="form-group" style="margin-bottom: 3px;">
                                    <input type="radio" name="layer" value="kelurahan" class="layer"> Kelurahan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="draggable2" class="panel panel-default draggable"></div>
            </div>
            <!-- Main content -->
            <div style="background-color: white;">
                <div class="row" style="background-color: white;">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <button class="appToggle btn btn-default" data-toggle="collapse" data-target="#menu">
                            Application
                            <span class="fa fa-angle-double-up"></span>
                        </button>
                    </div>
                </div>
                <section class="content collapse" id="menu" style="position: relative;">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <a href="http://119.2.50.170:9095/gismap/tb" style="color: white;">
                                        <h3>P2P</h3>
                                        <h4>Tuberculosis</h4>
                                    </a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <a href="http://119.2.50.170:9095/gismap/tb" class="small-box-footer">
                                    Tuberculosis <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <a href="http://119.2.50.170:9095/gismap/leptospirosis" style="color: white;">
                                        <h3>P2P</h3>
                                        <h4>Leptospirosis</h4>
                                    </a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <a href="http://119.2.50.170:9095/gismap/leptospirosis" class="small-box-footer">
                                    Leptospirosis <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <a href="http://119.2.50.170:9095/gismap/kesling" style="color: white;">
                                        <h3>KESLING</h3>
                                        <h4>STBM</h4>
                                    </a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <a href="http://119.2.50.170:9095/gismap/kesling" class="small-box-footer">
                                    STBM <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

        <link type="text/css" rel="stylesheet"
            href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
        <link type="text/css" rel="stylesheet"
            href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css" />
        <link type="text/css" rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <style type="text/css">
            #draggable {
                position: absolute;
                top: 200px;
                width: 250px;
                min-height: 150px;
                z-index: 997;
                background-color: white;
            }

            #draggable2 {
                position: absolute;
                top: 200px;
                right: 50px;
                width: 450px;
                height: 550px;
                overflow: scroll;
                z-index: 999;
                background-color: white;
            }
        </style>

        <!-- <script type="text/javascript"
            src='http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCothxXEmsIWAAEOHaODokb3swRRN9LmnI'>
        </script> -->
        <!-- localhost -->
        <script type="text/javascript" src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
        <script type="text/javascript"
            src='http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyDQk7MVFCK0C-Jr3NKGqw4FDiPWQQ8SChM'></script>
        <script type="text/javascript" src="http://119.2.50.170:9095/gismap/asset/plugins/jQueryUI/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                getData('sarkes', 'puskesmas');
                $(".sarkes").click(function() {
                    var value = $('.sarkes:checked').map(function() {
                        return this.value;
                    }).get().join(',');
                    getData('sarkes', value);
                })

                function getData(jenis, value) {
                    $.get('http://119.2.50.170:9095/gismap/home/getData', {
                            jenis: jenis,
                            value: value
                        },
                        function(data) {
                            if (data.status) {
                                initMap(data.data)
                                table(data.data)
                            } else {
                                alert('Data yang anda cari tidak tersedia');
                            }
                        })
                }
            })
            var map;

            function table(data) {
                var obj = '<div class="panel-body">';
                obj +=
                    "<table class='table datatable'><thead><tr><th>No</th><th>Nama Klinik</th><th>Alamat</th></tr><thead><tbody>";
                for (let i = 0; i < data.length; i++) {
                    obj += "<tr><td>" + (i + 1) + "</td><td>" + data[i][3] + "</td><td>" + data[i][4] + "</td></tr>";
                }
                obj += "</tbody></table></div>";
                $("#draggable2").html(obj);
                $('.datatable').DataTable();
            }

            function initMap(data) {
                const styledMapType = [{
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                }]
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11.5,
                    center: new google.maps.LatLng(-6.990530587005495, 110.42287038761901),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    // collisionBehavior: google.maps.CollisionBehavior.OPTIONAL_AND_HIDES_LOWER_PRIORITY,
                });
                map.set('styles', styledMapType);

                for (var i = 0; i < data.length; i++) {
                    var icon = {
                        url: data[i][5],
                        scaledSize: new google.maps.Size(20, 25), // scaled size
                        origin: new google.maps.Point(0, 0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }
                    var infowindow = new google.maps.InfoWindow();
                    var marker, i;
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(data[i][0], data[i][1]),
                        icon: icon,
                        map: map
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            //info(data[i][2]);
                            infowindow.setContent("Jenis : " + data[i][2] + "<br>nama : " + data[i][3] +
                                "<br>alamat : " + data[i][4] + "");
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
                $('.layer').click(function() {
                    console.log('layar klik');
                    var lay = $(this).val();
                    geojson = map.data.loadGeoJson('http://119.2.50.170:9095/gismap/asset/geojson/' + lay + '.geojson');
                    // Set the stroke width, and fill color for each polygon
                    map.data.setStyle(function(feature) {
                        return ({
                            fillColor: getRandomColor(),
                            // fillColor: '',
                            strokeWeight: 1
                        });
                    })
                })
                google.maps.event.addDomListener(document.getElementsByClassName('layer'), 'click', function() {
                    console.log('layar klik');
                    var lay = $(this).val();
                    geojson = map.data.loadGeoJson('http://119.2.50.170:9095/gismap/asset/geojson/' + lay + '.geojson');
                    // Set the stroke width, and fill color for each polygon
                    map.data.setStyle(function(feature) {
                        return ({
                            fillColor: getRandomColor(),
                            strokeWeight: 1
                        });
                    })
                })
            }

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        </script>
        <script type="text/javascript">
            $(".appToggle").click(function() {
                $('body,html').animate({
                    scrollTop: $('body').height()
                }, 800);
            })
            $(function() {
                $(".draggable").draggable();
                $("#draggable2").draggable();
            });
        </script>
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0.0
                </div>
                <strong>Copyright &copy; 2017-2023 <a href="http://dinkes.semarangkota.go.id">Dinas Kesehatan Kota
                        Semarang </a></strong>
            </div><!-- /.container -->
        </footer>
