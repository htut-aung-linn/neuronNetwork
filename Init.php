<?php 
include('loaddata.php');
    include('Network.php');
    $myNet = new Network([9,9], [true,false]);
//$myNet->setWeight('?/,55.378151905869,8.1155148575569,4.8935810111701,10.445546383022,43.332800743038,15.857357691829,-6.5644234809639,-5.1936056907697,-40.245767199995,12.576092638763,-10.208687751161/,-30.20295580638,36.857928466371,1.6667767584804,-3.0401329233084,-4.8556456433663,-3.1917448663632,8.2941418283594,-6.823356128375,-4.9099837152768,-34.764893380318,0.70408184524362/,-17.10639886849,-2.270335740779,3.8262444089568,-39.118483651325,-4.2553711945796,-11.022126562274,36.022611872011,-1.3963725082708,-18.779988343761,4.5100985981937,0.54138212380459/,-21.354914073495,-9.1453825967683,-30.89616151306,5.0631164373152,-0.27443957934111,1.5485360713028,-4.1442325320038,4.4748159674751,7.3183552465431,-0.39379632058807,1.0745861089797/,-41.942434870538,-14.602620399254,31.150924909837,-12.713563258235,-6.0226999115298,-39.247623041951,-16.394263502679,15.142999801588,11.832290569375,-1.6847694982113,-44.669829771219/,-12.626333484876,-4.1925475141417,-9.0441683983805,3.566255249504,-0.36792088611855,-6.8391175589554,-0.47406272325242,4.7071099218358,3.396550013368,8.9014352946965,6.5603681634821/,-20.060784637455,-0.66170992675523,6.7947959447197,-3.5666286669833,7.4436244944376,3.7751646618295,-19.030900374327,31.597219520004,1.5241970816568,-5.1061442423977,7.1243832362117/,-16.87559579851,4.490865662624,1.0378956988293,-3.6123456088708,-2.6458419085594,-3.9856853730704,-1.2108533532755,-1.9625949748718,-0.55474779391972,-4.0007931825803,5.0848913029434/,-16.444726838426,0.45833086790079,4.9688244515783,10.024480305813,18.575522100945,27.039131179427,-3.0134733473265,1.7734317597794,-5.7779424247788,5.5132308335459,-16.905398914995?/,-38.630209436061,-7.0616528199312,5.5362355855609,0.54322916588412,3.5409928002748,4.8172638950937,-2.6994209164894,-0.69561974955595,1.9008182326657/,3.1971084602338,-14.811908813571,4.5553599419612,-3.9179138652453,1.9618549039223,4.3437148875739,-4.9873630549611,0.49493844725496,-15.728385933656/,1.3494313907154,1.1829680661697,2.0805657719338,-15.565135016781,-1.8411922160427,-15.185968953886,-11.068153113403,-5.6227301477212,-0.44840039930921/,3.0129201212214,3.3476648602564,-16.169859139259,-7.6672737293416,-8.8006261090386,1.164190669375,-11.10812747582,-1.608338914898,13.062373685531/,21.287867159635,-12.040514279935,-13.114541211335,-4.1287992288051,-7.2895360650164,-3.7071695285154,-2.3666811884871,-6.9903829612593,5.1185382828736/,-3.0145746822121,2.9461466690106,0.33057436045789,4.8975750957711,14.200132428951,-15.423291428988,9.5136712265756,1.1623010972407,-17.366121129333/,0.55758330086646,-1.6950459534416,-22.366045069491,-7.6099541201357,-7.5351100419824,3.8296918831891,-22.687677993232,-6.5984986129328,2.6838018426766/,-5.9361544010887,-4.7522508366988,4.4146845521004,4.5771209801182,0.779274472966,0.24114037813549,-22.87575418743,-3.353163770667,-4.9757682976621/,-10.355107814801,2.1920344437535,-4.7137407771151,-15.228474201233,-5.1074304892502,-2.3147263204465,-2.3245815078071,-4.5542856549045,-18.255870199629/,5.117046766352,-13.166223822597,6.6516076585791,-4.6943936154141,0.45494041170477,1.8648920548582,-2.6851936323649,-2.8946485345643,-14.016229518877/,-4.7112283834438,3.0929598554234,-0.43370718201188,7.165630113543,-23.380730005948,-19.306424514631,13.437660107148,-4.6899661094049,-17.82124538322?/////////');
//$myNet->setWeight('?/,65.436936457708,11.817063493163,4.7979104784722,8.790003547236,49.118660464532,18.393533775514,-6.1616771651868,-1.0466713382748,-44.320049997895,12.885104695386,-13.086045622429/,-23.574427239637,40.778468943145,3.9399955255481,-3.4703079210781,-5.1166330051684,-2.7937971461501,11.9988815593,-4.2663573973253,-1.0919659096625,-37.441793165363,-2.8994005555125/,-25.74320010339,1.396928414081,4.3879062121796,-37.691196332707,-0.80753558613404,-12.882038598256,41.482288912739,-5.0284866800646,-22.35150348721,7.4562873412035,-2.9380346693053/,-18.329352826348,-5.1228255794227,-33.101391434483,8.8203088959495,-2.2572950200035,1.713455857647,-3.7276241318944,2.061464719362,5.3446266599431,2.4344167159005,2.0419469316376/,-46.453240373918,-12.439937898802,32.813251712401,-17.454757158593,5.732410543008,-43.143917561322,-16.330757075208,22.837098500598,15.602236009588,-0.3230068492509,-48.101969573895/,-16.245164121642,-4.2255520870942,-9.8620088375099,4.747196047425,0.55942471530111,-9.7496066785988,2.4626511314914,3.4587973218128,5.2253922916974,12.139188560875,2.7116779195198/,-18.771651012332,0.61071849666079,7.4843836141487,-1.6181481478443,8.9751059146912,1.3412881029083,-19.795082520772,33.771181517066,0.23157747546219,-3.1582485773638,6.2994189882098/,-19.364077108393,5.8208587683946,3.3169223847839,-2.962929513697,-4.5988760695009,-5.4293241659118,0.83212921600074,0.88740362275649,-0.91780806810194,-3.6625593474591,5.5045176985556/,-7.6992836037791,0.63248560287478,3.8323138564157,7.994403218219,17.390720836687,25.873979892463,-1.9565677965571,6.8504093943334,-6.9057931952102,4.3817013914185,-18.223342772778?/,-42.974539690746,-8.2174160907501,5.9700233709428,-3.5952499767634,4.6589379356656,7.2607327648071,-5.2409157670824,-0.69869171738499,3.5962195872733/,5.935435586656,-17.023319193947,3.545573311142,-1.6394442271852,-0.74392726211521,4.6142038940717,-3.2337967841649,0.45996282284755,-14.258360898959/,-0.79425539231194,0.63048122223447,2.3396738169972,-22.175077177834,-1.056459679397,-16.78403191881,-5.7247954978942,-5.4823109230414,0.22788870554502/,4.0452314894953,3.7223297870999,-22.608957247555,-8.993642613856,-6.2888151715898,-0.76068141443756,-15.935274924542,-1.7097222760558,11.08596148161/,19.389817658652,-15.148950022867,-13.824954445047,2.6200615794113,-10.081316094069,-5.7835954929202,2.0898293902377,-6.9912779656784,5.6870858213733/,-2.8020783377887,7.5493411846522,-2.7392528642292,1.5531365639055,14.935622064996,-16.37986513628,11.829684601825,0.85801875670335,-17.198419219807/,-3.0905162504251,-0.46669525617875,-25.48670883646,-8.3755725074555,-6.214602698372,0.63938838293639,-24.094352089146,-6.5337959155991,-0.17797422475515/,-3.1989013101321,-3.2595657733927,4.8594174094762,3.3874716876508,1.0283416933418,-1.7318799114108,-25.19859743548,-3.1438965477781,-5.0598846564968/,-12.958666796772,1.5279745405986,-5.8863432157743,-18.458564051011,-4.9588113325846,-0.23318488731498,-2.2750414785323,-4.6206469215166,-21.370456445102/,9.0834848540937,-14.008653348209,5.4501666350563,-3.3521039161199,-0.90165375751905,2.7144509462367,-1.9626139820716,-2.894817878512,-13.303007304246/,-3.9256716292883,-1.6417892322519,0.080525291727214,6.9971781857374,-27.023455938167,-23.130403382622,16.13824453558,-4.5946595493376,-20.93138187496?/,0////////');
// $myNet->setWeight('?/,6.2674005852104,-14.960864376812,32.681803692583,-8.4054847331159,6.0393440938736,8.4143172146828,-2.2208368829151,-73.673370843973,8.2879183802091,-28.030812149935,9.4297159185107,13.459959402505,-20.132999317606,10.212575672127,1.8153781816752,-13.163939694212,23.501707332276,12.703826159054,-30.734706712046,-16.37796567661/,4.110603428405,3.4108819701108,-9.8720892966868,-5.5886012153583,-3.053529910659,29.437249924197,-2.8078897016093,-13.6706796934,1.6577461828751,-14.584204878311,-5.5631558809635,3.3002370108697,-0.55257330641748,10.855695271641,-1.2247708827642,1.5046787390678,9.3713976985008,-36.907491647434,-2.435816858038,0.88065457018228/,0.44390300674257,-4.9027694480832,-0.46570585719604,9.9004015859601,-8.0297110894332,0.37696145886018,1.2439974474117,-17.321821313563,-20.450500776414,-6.1805749041195,-7.1814324735866,8.5394904789515,-42.932064216027,-17.336949397439,0.95293926224043,22.447683245997,11.747481163387,-3.4511124123614,-7.0839947435339,0.74732736770099/,-2.9678927927389,0.33260402568243,-6.8472827292843,2.1767461801364,25.558921719026,1.6170493099139,10.790815052849,-10.89915062982,3.3946299741783,-21.109912835847,4.1896673742972,-24.202295315536,3.9070735448652,-14.781293877124,9.3537735556646,-0.99588806433862,-2.5335572344021,-3.2337385094582,1.4948558001104,-3.0101383979838/,15.38086464216,20.62772062888,-9.3393414165979,6.0295645946774,-1.0588546560856,2.2647083106124,18.660432752843,-1.4002007509187,10.544104781616,-68.815760861213,-37.405785520043,8.5238424283003,18.166191108874,3.6563518336455,-10.495727422886,-0.10847569786609,-2.5201260224835,-8.2157296125323,11.597823095911,-34.527715304757/,-2.0665564887061,-0.80817250317945,1.4345116504039,3.0101511679885,-9.2759189338981,1.9301905721608,5.4837859647674,-14.323607112785,0.67544731645088,-7.5911107378629,1.0194675810379,-1.6448659368633,3.7037850199688,-3.3464503494719,-9.823042403263,-0.49376553307858,1.6555795607278,-4.9935887751693,-0.88585038925364,-2.0096737174425/,30.637088700229,-7.170190027307,-9.9752999850125,-11.293312543404,-0.26364280729014,-4.5602445983749,-14.354718168329,-24.069263218217,7.9521295353472,-22.162604125602,8.6338125145048,8.2118610360584,-3.5309342347703,-9.5401422264312,6.5161428343214,0.92911733975078,3.5139915523205,1.6881561020397,-2.7283575529134,-11.633203264041/,-0.47621895856718,0.23661792129001,-7.3904135320672,-11.261952064393,1.5089560828472,-6.8822372133405,1.3319800355296,-17.722286814554,2.4530152143696,-12.679756504674,6.3859752165243,1.4699439756106,-0.71381537560473,4.3830906967831,4.5816591869016,2.0156420904665,2.6970223536271,2.3308988912601,-2.8843650672724,-3.5147672007674/,-1.7230172232362,24.357727249933,18.884198604785,11.323542332996,-9.343996102697,-5.2300048013812,1.8444749881909,-30.167979406699,3.2821084125473,-2.9397213605238,4.237942093589,0.049320690615696,2.2075604289035,-2.649305425386,4.9376304215443,-3.0640763726292,11.231217640787,1.1510902246496,-0.69975470910913,-4.7025795882496?/,5.511718360434,-43.007402684389,25.723837110679,-48.733664043857,2.937793291335,22.015953702887,-24.593990498151,-13.144080170808,-14.046938979866/,3.2110450318354,-0.12366890550629,2.2514360553918,3.1151634999367,-6.0353100352675,2.8995269834106,-30.778622582117,12.435280339669,0.9742852948859/,7.8056766878801,-5.0143907815239,-0.93807382581479,-2.9967276624417,3.1851336239202,-1.3421708217828,10.142270547146,11.548677826895,16.677722378151/,-5.7365917083267,12.954703118381,-8.2423036878361,10.945497143582,4.1324936013248,-17.010199408706,5.7098437499869,-10.610034218509,-2.162859528479/,-3.167502883143,0.17870745099361,2.3086226025613,4.0545810613705,1.5408532636398,5.4720085505381,-11.9472760081,-22.724470292762,2.9306905471767/,2.1861831036552,-5.2467768588796,1.634575976413,18.779733802697,-8.1167006584076,11.37346555806,4.91652521256,-3.633569171529,-1.4451771862482/,-2.943817561756,20.864121390931,-10.449461313281,-7.1362542909989,-1.2026706261486,5.7453708696709,-7.0686842184939,4.4815471416905,-11.279995471684/,-0.19481135004092,3.4246724308433,2.2711370303201,-1.9595653026628,0.097449819283438,-16.027502709964,-36.667602789664,-12.153751713499,-4.3758751944084/,-52.072310226141,-1.9906399052577,-3.1752369970149,-4.380648086046,1.3963576401341,0.28699703068877,4.7575872734981,7.6760084366235,-7.7989902977665/,0.29129606700033,4.6774062305678,-12.931537843546,6.3869958502665,-9.525970932482,-12.82504710413,18.553070330652,-10.168376521254,-11.519070827386/,2.3394378663436,-0.38811593405696,-1.7372911747122,-0.90414401848415,-56.638358032321,-5.7260978004658,3.4140141090125,11.604034605015,-20.469608200762/,-4.6401696413668,-3.9889019936627,-5.2258225533009,5.2678557112039,19.650021460287,-25.531034750335,-6.2964563616269,0.15834091335586,-23.690462103036/,-1.8111791283789,3.5938584997646,-1.2537496762824,17.232707039616,-2.4729716944771,-9.6336886665047,-7.1557244716039,-5.1273634771187,-2.4839464683306/,0.53940538902592,-1.3010537039252,-22.628476169936,6.3095962327189,0.86905035729254,11.315741992621,-1.856945035265,-1.9770066679742,9.9119204236018/,-2.2763147664274,-6.7555155693514,9.1770979434064,2.299862683323,-0.56647851009575,-3.7629834820842,-1.1785504779329,-3.3032366399337,4.8109718917397/,-4.8506357911295,2.0230854897444,-3.3180245508325,-4.5014492145166,-0.34398048037435,-26.331955871437,-11.763336413674,-1.4942172651273,6.0856909444116/,8.1582655492818,5.9138341363039,-28.279676202631,10.801133336686,-4.6102217971181,-11.591654587894,3.6460744098488,-12.999514088382,-3.1879178275194/,-8.0121659877629,-2.9618361632835,0.30038793032423,-3.7451943622055,-4.0687209211636,-11.513977842525,11.058314871177,-5.1721041261609,11.728223731305/,-7.187306119199,17.465661185386,-8.0179433876628,-5.4908620056447,-4.4112787190448,8.4535399057378,4.561308280837,-0.75412675478303,-3.6991190603435/,18.251302744227,-6.3809083646503,-11.156374879637,-10.500019842876,-11.438199517721,-17.250437263206,13.345668498639,2.2023862947689,-20.763788754371/,9.8216916572545,1.7284679152312,-0.90137502117803,5.5543787849269,28.734263401684,-24.221081900081,12.736372191428,-12.894770685442,-16.028611227862?/////////');   
//$myNet->setWeight('?/,9.1458584881553,-23.062723867244,42.211678346503,-9.3138969050807,8.1425496594121,10.439779562874,-2.0597232741121,-90.309931833766,7.2408842096017,-26.808318853575,9.0342560377611,17.751343495799,-22.898701509163,13.780201459837,4.5542466073233,-11.524297818352,22.386995226955,14.069539334641,-38.743587911331,-17.363997410555/,5.6266470469714,6.0516546973885,-11.921806604962,-6.8557097253706,-3.6971010888425,37.596784747851,-2.5695825418959,-21.883446314252,0.9015082002065,-12.078543169427,-8.9350676034546,1.0907648624432,-0.89624071415855,15.143284943021,2.339875393917,1.1322584456278,8.7069992194952,-43.682594159813,-3.0577330564024,-0.02311494776958/,2.3185256832123,-7.5334847403031,0.72385951693627,9.9542918620377,-10.556959323578,0.4771733962861,1.910508473825,-23.590597042022,-19.672755109104,-6.5734587698312,-9.5582849913465,8.644510778754,-51.751346543024,-22.102372384573,3.361906101593,18.743769658624,11.349881910293,-3.3856288497854,-8.6763214760975,1.4362793263854/,-3.2210105483309,1.5008987246731,-8.6261382278734,1.842969681887,34.26338152326,1.0363146002757,11.768086666679,-10.995727326104,3.196306247824,-25.832787325117,3.8815207404336,-33.908702946349,3.1575053568168,-18.979475372389,13.833517818409,-0.68522583199316,-2.8965642945498,-4.9407596100071,1.9268401463548,-3.7236624376129/,19.537889296209,33.304067621421,-12.402201011337,5.9409025093626,-0.64165292579133,2.9817180874595,20.868276073962,-5.893986824275,8.9644200177408,-77.624196537664,-41.724508113214,10.461066236304,19.164614248854,5.3653563375666,-13.903428442747,-1.2681021120025,-2.755757001286,-10.174244575645,14.107434549771,-38.188287553236/,-1.8489939916154,-1.8465338783979,1.7523464875766,2.6239754058842,-11.778624567195,2.8035246690622,6.0880039005806,-10.734606454472,0.92101183291418,-12.368978898532,0.20098162316446,-2.5396920868401,3.363093672995,-4.6586578780803,-12.576157431312,0.14004938670465,0.64415268355877,-7.0035098009984,-1.8726097624775,-2.7367573559679/,39.200541274926,-7.4145830472637,-13.697127656205,-13.44118371748,-0.5584984883529,-6.639358101599,-14.873479799586,-24.745738506619,6.7250657677879,-25.295894250692,8.7906137535913,11.025086917301,-6.7684567668471,-12.161733356745,9.1273777372191,0.6486383397219,2.2813790445621,1.6771111751326,-3.2064096350623,-12.754484924606/,0.38614410317664,0.81373620970993,-9.5668142694369,-12.423299073365,1.7808364371592,-9.4121499091629,2.3106128298354,-23.035017676379,1.9422782541216,-12.670520533689,4.2626315404461,1.3260348634001,-0.058870230021609,6.3948202830839,7.0783455363316,1.3598841940698,2.6396695541175,3.7260525968177,-4.4049463590633,-4.9562618492533/,-1.8190530288182,37.161954556557,24.238044622992,12.007549083615,-11.837923238441,-7.8986407262375,2.1901944651259,-34.543755892682,2.6945470170349,3.319913753239,3.242047948772,-0.37225336970604,0.45368803361447,-3.4587748540607,7.2592970156442,-3.8304799230778,10.169858539967,0.94718499831152,-1.8179608573098,-5.1585029771155?/,6.8286881475968,-56.533000288387,30.942578448762,-58.399688145469,1.3954796863677,30.054612596048,-32.33697129016,-13.811021656571,-21.580373952205/,1.9738150966324,-0.89652966455118,4.2790992384395,2.4026308637404,-8.3669642236344,3.5272942938703,-37.756523143378,14.519528919981,2.2219610231779/,10.981673323353,-6.2906001868784,-2.1009552422641,-1.8848155039915,4.2980992974322,-1.5669957332514,13.918419755137,13.327240889252,18.33893116859/,-7.2199730474811,14.942674226531,-10.766894897536,11.290792127904,6.0218075014054,-23.211626116102,11.382389227461,-10.951820699223,2.4500963828321/,-3.6900689957743,-0.97924237914671,3.0453414989395,3.8815406629442,2.1688238281855,7.0050599885584,-14.606209419208,-33.179298226161,4.2739758502619/,0.21873822140333,-7.2233459082288,2.4928344481934,23.16598705408,-8.6997762334774,14.679422795983,5.4455498750778,-4.8147994933646,-1.5115864284528/,-2.4784933275239,26.5516035063,-13.741499675211,-8.642190353472,-0.3616607238195,7.7264904303054,-6.5170631534795,5.410748525681,-14.337335220448/,-1.2129905633623,6.0544824384533,2.8379295597144,-4.4857025980782,-0.3644652252118,-20.774667750071,-49.191735850266,-13.193430384066,-6.0330173037744/,-71.021102560297,-3.8195336234615,-1.6647255354744,-6.8988465326704,2.3296471359691,2.316936627301,6.0419107227967,7.7095606702075,-7.8091239377941/,-0.8763622200793,5.3112919355383,-16.902757654232,10.704616279311,-13.32720119556,-16.653977273699,25.252828251028,-8.7961400105419,-17.502261934097/,0.051577187814433,-1.0521060095302,-2.9627429857869,1.0561766838262,-74.456000106447,-5.8713005841564,1.3771225273995,14.793846661227,-27.337076966012/,-3.7243054385473,-5.2306573617796,-5.8235701029124,6.4461606995512,27.056729549368,-33.018223902033,-7.360889246941,-0.89391934107504,-28.079543366497/,-3.4084493609513,5.1965933301675,-0.12180762227446,21.020091346228,-2.5195986534174,-13.352701509138,-9.5360276912336,-5.2104564031433,-1.6874098113861/,1.7678233767192,-0.095950059488799,-27.141673325171,6.2939404037293,1.3427206877916,13.333307149024,-2.3269177385713,-5.32958093094,16.085093186463/,-2.3951402874463,-8.9072349538951,11.127975527554,2.95102526154,-1.4302137259017,-5.2220184141621,-0.10408776748175,-5.0838155873608,8.1343760861962/,-4.5968317051542,2.4399788205239,-3.5846670845121,-7.2193924939736,-1.7711265644538,-34.35506351594,-14.405605702367,-1.4195187786304,8.6922177787406/,13.628500111077,7.3581090483323,-37.331453823806,15.41684701393,-6.1658320278557,-17.724455543122,7.6822645877028,-16.134194897403,-2.6933141365573/,-14.54504374247,-2.3254423312295,1.768047917157,-5.0998161334834,-4.9744562923598,-15.231436502088,11.450411486486,-8.4697077481139,14.184328660108/,-8.6780358887117,23.847417811238,-10.932552328623,-4.8598442664433,-5.6761321890679,10.811312361648,5.5051737723414,-0.91176004510557,-5.5776026278843/,24.997185372466,-6.5058980555669,-13.418126465214,-14.486147379791,-13.7908372367,-24.467114452138,16.571062555548,2.4515166281969,-27.780899260087/,15.201522884689,3.9078616002157,0.49939523820665,4.1797409458565,38.904373753521,-28.699901298052,15.104151888553,-15.27614620068,-18.769979487213?/,0////////');
for($j=0;$j<1;$j++){
    for($i=0;$i<count($X);$i++){
        $myNet ->train($X[$i],$y[$i],0.1);
    }
    }
    $filename = 'data.txt';
    // The content to write to the file
    $content = $myNet->getWeight();
    var_dump($content);
    // Using the file_put_contents function to write content to the file
    file_put_contents($filename, $content);
    
    echo "Content written to the file successfully.\n"
?>
