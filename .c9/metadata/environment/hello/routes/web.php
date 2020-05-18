{"filter":false,"title":"web.php","tooltip":"/hello/routes/web.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":1,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","Route::get('/', function () {","    return view('welcome');","});",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":25,"column":58},"action":"insert","lines":["//①リスト一覧画面","Route::get('/','ListingsController@index');","","//②リスト新規画面","Route::get('/new', 'ListingsController@new')->name('new');","","//③リスト新規作成処理 ","Route::post('/listings','ListingsController@store');","//===ここまで追加===","/* ======= 解説 =======","■ルートの定義とは、このURLでアクセスされた時は、このコントローラのアクションを呼び出してください」と定義します。","    ①の場合、「/」でアクセスされたら、ListingsControllerのindexアクションを呼び出してねという支持になります","","Route::get('リクエストされたURL','呼び出すコントローラー名@処理するコントローラ名');","","②リスト新規画面の「->name('new')」の記述は、ルートの名前を定義しています。これを名前付きルートといいます。","名前を定義しておくことで、コントローラやビューで定義した名前でパスの指定をすることができます。","","*/","","","","Auth::routes();","","Route::get('/home', 'HomeController@index')->name('home');"]}],[{"start":{"row":25,"column":58},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["}"]}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"remove","lines":["}"],"id":4}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["?"],"id":5},{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":[">"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":0},"end":{"row":18,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1589334306457,"hash":"8735c014fc0cc89053e98d7c518e274783ceeef6"}