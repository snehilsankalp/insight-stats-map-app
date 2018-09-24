<?php
/**
 * Created by PhpStorm.
 * User: snehi
 * Date: 22-09-2018
 * Time: 12:33
 */
 include ("conn.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fan=$_REQUEST['team_chosen'];

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="css/sp.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        desklink{
            color:#ffffff !important;
        }
        .desklink:hover{
            color:#9E9FA1;
        }
        .desklink:active{
            color:#170975;
        }
        .logo{
            padding-top:0;
            text-align: center;
            margin-bottom: 2%;
        }
    </style>
</head>
<body>

<div class="col-sm-2 sidepanel secretm">
    <ol style="list-style: none;    -webkit-padding-start: 0px;">
        <li class="logo"><img src="images/CAF_logo.png" style="height:100px;"></li>
        <a href="dashboard.html" class="desklink"> <li class="li-menu effect"><i class="fa fa-th-large" aria-hidden="true"></i> <b style="margin-left: 10px;">  Dashboard</b></li></a>
        <a href="teams.php" class="desklink"><li class="li-menu effect"><i class="fa fa-group" aria-hidden="true"></i> <b style="margin-left: 10px;"> Teams</b></li></a>
        <li class="li-menu active"><a href="#" class="desklink active" style="margin-left: 4px"><i class="fa fa-child" aria-hidden="true"></i> <b style="margin-left: 10px;"> Fan Map</b></a></li>
        <a href="index.html" class="desklink"><li class="li-menu effect" style="margin-left: 4px"><i class="fa fa-power-off" aria-hidden="true"></i> <b style="margin-left: 12px;">  Log Out</b></li></a>
    </ol>

</div>
<div class="col-sm-10 pad-zero">
    <h3>Teams & Followers</h3><br>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){?>
        <h4><i class="fa fa-check-circle" style="font-size:24px;margin-right:1%;"></i><span>You have selected <span style="text-transform: capitalize;"><?php echo $fan;?></span> as your favourite team. </span>
            <span><button type="button" class="btn select_team" data-toggle="modal" data-target="#myModal">Change Team</button></span></h4>

    <?php } else{?>
   <h4><i class="fa fa-warning" style="font-size:24px;margin-right:1%;"></i><span>You haven't selected your favourite team. Please select your favourite team </span>
    <span><button type="button" class="btn select_team" data-toggle="modal" data-target="#myModal">Select Team</button></span></h4>
    <?php }?>
    <div id='map' style=' height: 465px;'></div>
    <p>* The map shows the fan map of the team you have chosen
    </p>


</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"  style="border-radius: 2%">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="memberModalLabel">African Cup Team List</h4>

            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form method="post">
                    <label for="exampleFormControlSelect1">Select Your Team</label>
                    <select class="form-control category_selector category-val" id="exampleFormControlSelect1" name="team_chosen">
                        <option value="">Select</option>
                        <option value="ghana" >Ghana</option>

                        <option value="cameroon" >Cameroon</option>

                        <option value="egypt" >Egypt</option>


                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn select_team"  value="Submit"></input>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic25laGlsc2Fua2FscCIsImEiOiJjam1hNjBkcDgxNGhyM2tsa2dhazRtdjA0In0.qyAqw9Wm6RWJLRMaiX9-rg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v9',
        center: [24.09,0.66],
        minZoom: 2.2,
        zoom: 2.2
    });
    </script>
<script>
    <?php if ($fan == "egypt"){?>
    map.on('load', function () {

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Polygon',
                        'coordinates':[
                            [
                                [
                                    25.21763523200576,
                                    31.688391666343946
                                ],
                                [
                                    24.758655877854437,
                                    31.149831820298317
                                ],
                                [
                                    24.988145554936153,
                                    30.75621737747477
                                ],
                                [
                                    24.758655877854437,
                                    29.8646959756461
                                ],
                                [
                                    24.930773135665703,
                                    29.315911375912194
                                ],
                                [
                                    25.045517974206604,
                                    21.979043326605307
                                ],
                                [
                                    24.873400716429984,
                                    20.26656363837087
                                ],
                                [
                                    23.84353749910852,
                                    19.832733434713816
                                ],
                                [
                                    23.900909918378943,
                                    17.605061300232833
                                ],
                                [
                                    22.06499250177393,
                                    17.221860847614096
                                ],
                                [
                                    22.92557879074667,
                                    15.681532456366853
                                ],
                                [
                                    24.532006530282047,
                                    15.957529376421363
                                ],
                                [
                                    26.941648139588125,
                                    16.067822174806523
                                ],
                                [
                                    29.52340700665968,
                                    15.850566797300829
                                ],
                                [
                                    30.38399329566826,
                                    15.962313950577425
                                ],
                                [
                                    30.842972649819558,
                                    16.403106277431803
                                ],
                                [
                                    31.301952003970797,
                                    17.117259016437657
                                ],
                                [
                                    31.703558938884527,
                                    17.719413110932052
                                ],
                                [
                                    32.506772808636384,
                                    18.054344568488375
                                ],
                                [
                                    33.25261425914002,
                                    18.217910912590398
                                ],
                                [
                                    33.826338451822096,
                                    18.211989951047386
                                ],
                                [
                                    34.80166957938269,
                                    18.157482986934568
                                ],
                                [
                                    35.604883449156404,
                                    18.37540833545917
                                ],
                                [
                                    36.17860764184849,
                                    19.29848963036072
                                ],
                                [
                                    36.522842157458825,
                                    20.700174774700386
                                ],
                                [
                                    37.09656635015091,
                                    21.342819008376495
                                ],
                                [
                                    36.522842157458825,
                                    22.35457728179246
                                ],
                                [
                                    36.00649038403719,
                                    22.672576731949476
                                ],
                                [
                                    35.662255868426854,
                                    23.253659453349982
                                ],
                                [
                                    35.43276619134511,
                                    23.88469060648019
                                ],
                                [
                                    35.03115925646438,
                                    24.669165692340627
                                ],
                                [
                                    34.74429716012443,
                                    25.345082783281384
                                ],
                                [
                                    34.170572967432406,
                                    26.120315537145032
                                ],
                                [
                                    33.71159361328125,
                                    27.451888399278985
                                ],
                                [
                                    33.252614259129984,
                                    28.21291085883867
                                ],
                                [
                                    32.50677280862669,
                                    29.26927560413597
                                ],
                                [
                                    32.44940038935627,
                                    29.86807727935016
                                ],
                                [
                                    33.08049700131872,
                                    29.068888778543382
                                ],
                                [
                                    33.59684877474038,
                                    28.36447223887474
                                ],
                                [
                                    34.113200548161956,
                                    27.909142684189433
                                ],
                                [
                                    34.514807483042716,
                                    28.666945817624352
                                ],
                                [
                                    34.68692474085404,
                                    29.219215584774403
                                ],
                                [
                                    34.74429716012443,
                                    30.215731243123372
                                ],
                                [
                                    34.4000626445019,
                                    30.759568060833672
                                ],
                                [
                                    34.170572967432406,
                                    31.202254597981934
                                ],
                                [
                                    33.53947635546993,
                                    31.054920702650804
                                ],
                                [
                                    32.67889006643796,
                                    31.054920702650804
                                ],
                                [
                                    31.93304861594686,
                                    31.398343290461966
                                ],
                                [
                                    31.015089907632245,
                                    31.44730165155346
                                ],
                                [
                                    30.269248457141146,
                                    31.34935938202456
                                ],
                                [
                                    29.69552426444909,
                                    31.054920702650804
                                ],
                                [
                                    29.064427652498836,
                                    30.90735831495452
                                ],
                                [
                                    27.515372332233966,
                                    31.054920702650804
                                ],
                                [
                                    27.171137816616834,
                                    31.496234442897546
                                ],
                                [
                                    25.85690781910199,
                                    31.642879175679624
                                ],
                                [
                                    25.21763523200576,
                                    31.688391666343946
                                ]
                            ]
                        ]
                    }
                }
            },
            'layout': {},
            'paint': {
                'fill-color': '#2A2D33',
                'fill-opacity': 0.8
            }
        });
    });
    <?php }elseif ($fan == "ghana"){?>
    map.on('load', function () {

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Polygon',
                        'coordinates': [
                            [
                                [
                                    1.8279419158089354,
                                    6.240369169540472
                                ],
                                [
                                    1.5642700408209294,
                                    6.807956198219088
                                ],
                                [
                                    1.5642700408299959,
                                    7.636285309570141
                                ],
                                [
                                    1.6082153532952077,
                                    8.33475632503476
                                ],
                                [
                                    1.520324728271106,
                                    8.986416175962873
                                ],
                                [
                                    1.3889742232531717,
                                    9.506905595750084
                                ],
                                [
                                    1.2571382857591686,
                                    10.026604398847397
                                ],
                                [
                                    0.7737398482561275,
                                    10.286144340795047
                                ],
                                [
                                    0.9055757857411493,
                                    10.890899612288209
                                ],
                                [
                                    1.3889742232435083,
                                    11.284382840533894
                                ],
                                [
                                    0.1145601607584581,
                                    11.110542469958233
                                ],
                                [
                                    -0.3248929642528253,
                                    11.369156835804546
                                ],
                                [
                                    -0.808291401755838,
                                    11.584489887942865
                                ],
                                [
                                    -1.4674710892446399,
                                    11.110542469958233
                                ],
                                [
                                    -1.9069242142558949,
                                    11.067417631844563
                                ],
                                [
                                    -2.4782132767423946,
                                    11.110542469958233
                                ],
                                [
                                    -2.873721089243162,
                                    10.981148929339682
                                ],
                                [
                                    -3.4889554642401492,
                                    10.808536078125243
                                ],
                                [
                                    -3.752627339246942,
                                    10.246866107991025
                                ],
                                [
                                    -3.5329007767700773,
                                    9.814131037545224
                                ],
                                [
                                    -2.961611714245322,
                                    9.50955909951439
                                ],
                                [
                                    -2.6539945267468,
                                    9.032476585618952
                                ],
                                [
                                    -2.6100492142550706,
                                    8.467839097410206
                                ],
                                [
                                    -2.829775776751319,
                                    7.989418772133263
                                ],
                                [
                                    -3.005557026756378,
                                    7.336129197502018
                                ],
                                [
                                    -3.181338276741286,
                                    6.813727075661106
                                ],
                                [
                                    -3.137392964267491,
                                    6.289953513379757
                                ],
                                [
                                    -3.0495023392652456,
                                    5.809248547715612
                                ],
                                [
                                    -2.8297757767689973,
                                    5.459385079373135
                                ],
                                [
                                    -2.6539945267645066,
                                    4.977991872615618
                                ],
                                [
                                    -1.9948148392570033,
                                    4.846640209256691
                                ],
                                [
                                    -1.3356351517682867,
                                    5.1093173126338485
                                ],
                                [
                                    -0.6325101517690825,
                                    5.415637515754355
                                ],
                                [
                                    0.1145601607406661,
                                    5.765527228651749
                                ],
                                [
                                    0.8176851607398987,
                                    5.852966472721604
                                ],
                                [
                                    1.3889742232263416,
                                    6.115201337749909
                                ],
                                [
                                    1.8279419158089354,
                                    6.240369169540472
                                ]
                            ]
                        ]
                    }
                }
            },
            'layout': {},
            'paint': {
                'fill-color': '#2A2D33',
                'fill-opacity': 0.8
            }
        });
    });
    <?php }elseif ($fan == "cameroon"){?>
    map.on('load', function () {

        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Polygon',
                        'coordinates':  [
                            [
                                [
                                    14.685331437546466,
                                    11.918352043902573
                                ],
                                [
                                    14.398255605263643,
                                    11.195127831471098
                                ],
                                [
                                    13.865114773873756,
                                    11.114655744460151
                                ],
                                [
                                    13.49601727522196,
                                    10.47009233385485
                                ],
                                [
                                    13.126919776570077,
                                    9.783774220768663
                                ],
                                [
                                    12.880854777480522,
                                    9.055538163332443
                                ],
                                [
                                    12.511757278828696,
                                    8.81245864337933
                                ],
                                [
                                    12.183670613343764,
                                    7.919830919782967
                                ],
                                [
                                    11.32244311647787,
                                    6.332816211026412
                                ],
                                [
                                    10.584248119174248,
                                    7.065965591712185
                                ],
                                [
                                    10.051107287801926,
                                    7.22873416163165
                                ],
                                [
                                    9.476955623236307,
                                    6.495832579407505
                                ],
                                [
                                    8.943814791846478,
                                    5.680248895860188
                                ],
                                [
                                    8.738760625932656,
                                    5.272013161221778
                                ],
                                [
                                    8.615728126370385,
                                    4.659162417185726
                                ],
                                [
                                    8.943814791846478,
                                    4.3729781737926885
                                ],
                                [
                                    9.394933956857841,
                                    4.127590087946004
                                ],
                                [
                                    9.72329803655856,
                                    3.9227651091624125
                                ],
                                [
                                    9.887341369279085,
                                    3.390711648104329
                                ],
                                [
                                    9.928352202472354,
                                    2.4486975832545426
                                ],
                                [
                                    9.395211371082581,
                                    1.2600276178718133
                                ],
                                [
                                    9.969363035648144,
                                    0.7679762001245507
                                ],
                                [
                                    10.912612198865588,
                                    0.8499896837911081
                                ],
                                [
                                    12.265969693928099,
                                    0.6449530765517721
                                ],
                                [
                                    13.455283856253573,
                                    1.3010282082402824
                                ],
                                [
                                    13.981312160152527,
                                    0.644953076558636
                                ],
                                [
                                    15.005383895159042,
                                    0.9320014258123308
                                ],
                                [
                                    15.538524726548985,
                                    1.6700010188537675
                                ],
                                [
                                    16.19469805748355,
                                    2.776442784627264
                                ],
                                [
                                    16.80986055524241,
                                    3.5135208778161626
                                ],
                                [
                                    17.671088052090823,
                                    3.5135208778161626
                                ],
                                [
                                    18.6963588816773,
                                    3.554453724300501
                                ],
                                [
                                    19.106467213504942,
                                    4.658885919575994
                                ],
                                [
                                    19.680618878070476,
                                    5.39423683195227
                                ],
                                [
                                    20.746900540816142,
                                    5.353406248039676
                                ],
                                [
                                    21.403073871750877,
                                    5.557531488743166
                                ],
                                [
                                    21.854193036771676,
                                    6.5363028624439465
                                ],
                                [
                                    22.551377200899594,
                                    8.122604120440755
                                ],
                                [
                                    23.330583031379092,
                                    9.176742731626177
                                ],
                                [
                                    24.191810528227563,
                                    9.78350084108206
                                ],
                                [
                                    23.2075505318343,
                                    10.147029061032725
                                ],
                                [
                                    23.2075505318343,
                                    10.953372731687097
                                ],
                                [
                                    22.71542053362012,
                                    11.596878026710968
                                ],
                                [
                                    22.592388034075356,
                                    12.198821803696717
                                ],
                                [
                                    22.141268869024714,
                                    12.799401538449445
                                ],
                                [
                                    20.870356819809103,
                                    13.198999211600139
                                ],
                                [
                                    19.968118489784928,
                                    11.877950849037163
                                ],
                                [
                                    20.501259321157278,
                                    11.074139113957159
                                ],
                                [
                                    19.27093432565701,
                                    11.074139113957159
                                ],
                                [
                                    18.491728495151875,
                                    12.11864006645611
                                ],
                                [
                                    17.38443599922354,
                                    11.276194511440309
                                ],
                                [
                                    17.09736016694069,
                                    11.918967581081077
                                ],
                                [
                                    16.195121836916343,
                                    11.798560971471886
                                ],
                                [
                                    15.579959339157455,
                                    11.517407459703307
                                ],
                                [
                                    14.685331437546466,
                                    11.918352043902573
                                ]
                            ]
                        ]
                    }
                }
            },
            'layout': {},
            'paint': {
                'fill-color': '#2A2D33',
                'fill-opacity': 0.8
            }
        });
    });
    <?php }?>
</script>
</body>
</html>