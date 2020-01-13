<?php
// クラスの記述
class Rider implements JsonSerializable
{
    // プロパティの宣言
    protected $name = '';
    protected $imgName = '';
    protected $hp;
    protected $attack;
    protected $score;

    // メソッドの宣言
    // コンストラクタ
    public function __construct($id,$name,$imgName,$hp,$attack,$score) {
        $this->setId($id);
        $this->setName($name);
        $this->setImgName($imgName);
        $this->setHp($hp);
        $this->setAttack($attack);
        $this->setScore($score);
    }
    // セッター
    public function setId($id) {
        $this->id = filter_var($id,FILTER_VALIDATE_INT);
    }
    public function setName($name) {
        $this->name = (string)filter_var($name);
    }
    public function setImgName($imgName) {
        $this->imgName = (string)filter_var($imgName);
    }
    public function setHp($hp) {
        $this->hp = filter_var($hp,FILTER_VALIDATE_INT);
    }
    public function setAttack($attack) {
        $this->attack = filter_var($attack,FILTER_VALIDATE_INT);
    }
    public function setScore($score) {
        $this->score = filter_var($score,FILTER_VALIDATE_INT);
    }
    // ゲッター
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getImgName() {
        return $this->imgName;
    }
    public function getHp() {
        return $this->hp;
    }
    public function getAttack() {
        return $this->attack;
    }
    public function getScore() {
        return $this->score;
    }
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'imgName' => $this->imgName,
            'hp' => $this->hp,
            'attack' => $this->attack,
            'score' => $this->score
        ];
    }

    public function riderAttack() {
        $questionNum1 = mt_rand (1,9);
        $questionNum2 = mt_rand (1,9);
        $question = $questionNum1." + ".$questionNum2." = ? ";
        $answer = $questionNum1 + $questionNum2;
        $buttonPos = mt_rand (0,2);
        switch ($buttonPos) {
            case 0:
                $button1 = $answer;
                $button2 = $answer + 1;
                $button3 = $answer + 2;
                break;
            case 1:
                $button1 = $answer - 1;
                $button2 = $answer;
                $button3 = $answer + 1;
                break;
            case 2:
                $button1 = $answer - 2;
                $button2 = $answer - 1;
                $button3 = $answer;
                break;
        }
        return [$question,$answer,$button1, $button2, $button3];
    }
}

class subRider extends Rider {
    public function riderAttack() {
        $questionNum1 = mt_rand (1,9);
        $questionNum2 = mt_rand (3,12) + $questionNum1;
        $question = $questionNum2." - ".$questionNum1." = ? ";
        $answer = $questionNum2 - $questionNum1;
        $buttonPos = mt_rand (0,2);
        switch ($buttonPos) {
            case 0:
                $button1 = $answer;
                $button2 = $answer + 1;
                $button3 = $answer + 2;
                break;
            case 1:
                $button1 = $answer - 1;
                $button2 = $answer;
                $button3 = $answer + 1;
                break;
            case 2:
                $button1 = $answer - 2;
                $button2 = $answer - 1;
                $button3 = $answer;
                break;
        }
        return [$question,$answer,$button1, $button2, $button3];
    }

}
// ここまでクラスの記述

// 登場する敵のライダー
$enemy1 = new Rider(1,'アクセル','001_アクセル',40,2,20);
$enemy2 = new Rider(2,'アマゾンニューオメガ','002_アマゾンニューオメガ',60,3,30);
$enemy3 = new Rider(3,'イビキ','003_イビキ',40,2,10);
$enemy4 = new Rider(4,'ウィザード','004_ウィザード',80,4,50);
$enemy5 = new Rider(5,'ウォズ_クイズ','005_ウォズ_クイズ',40,5,20);
$enemy6 = new Rider(6,'ウォズ_シノビ','006_ウォズ_シノビ',60,3,30);
$enemy7 = new Rider(7,'ウォズ','007_ウォズ',40,2,10);
$enemy8 = new Rider(8,'ウォズギンガ_タイヨウ','008_ウォズギンガ_タイヨウ',80,4,50);
$enemy9 = new Rider(9,'ウォズギンガ','009_ウォズギンガ',60,3,30);
$enemy10 = new Rider(10,'エグゼイド_マキシマム','010_エグゼイド_マキシマム',40,2,10);
$enemy11 = new Rider(11,'エターナル','011_エターナル',40,5,20);
$enemy12 = new Rider(12,'カリス','012_カリス',60,3,30);
$enemy13 = new Rider(13,'クウガ','013_クウガ',40,2,10);
$enemy14 = new Rider(14,'グランドジオウ','014_グランドジオウ',80,4,50);
$enemy15 = new Rider(15,'グリス','015_グリス',40,5,20);
$enemy16 = new Rider(16,'クローズチャージ','016_クローズチャージ',60,3,30);
$enemy17 = new Rider(17,'クロノス','017_クロノス',40,2,10);
$enemy18 = new Rider(18,'ゲイツ_ウィザード','018_ゲイツ_ウィザード',80,4,50);
$enemy19 = new Rider(19,'ジオウ_エグゼイド','019_ジオウ_エグゼイド',60,3,30);
$enemy20 = new Rider(20,'ジオウ_オーズ','020_ジオウ_オーズ',40,2,10);
$enemy21 = new Rider(21,'ジオウ_ゴースト','021_ジオウ_ゴースト',40,5,20);
$enemy22 = new Rider(22,'ジオウ_ダブル','022_ジオウ_ダブル',60,3,30);
$enemy23 = new Rider(23,'ジオウ_ディケイド','023_ジオウ_ディケイド',40,2,10);
$enemy24 = new Rider(24,'ジオウ_フォーゼ','024_ジオウ_フォーゼ',80,4,50);
$enemy25 = new Rider(25,'ジオウトリニティ','025_ジオウトリニティ',40,5,20);
$enemy26 = new Rider(26,'ストロンガー','026_ストロンガー',60,3,30);
$enemy27 = new Rider(27,'スペクター','027_スペクター',40,2,10);
$enemy28 = new Rider(28,'ゼロノス','028_ゼロノス',80,4,50);
$enemy29 = new Rider(29,'ゼロワン','029_ゼロワン',60,3,30);
$enemy30 = new Rider(30,'ダークゴースト','030_ダークゴースト',40,2,10);
$enemy31 = new Rider(31,'ディケイド','031_ディケイド',40,5,20);
$enemy32 = new Rider(32,'デンオウ','032_デンオウ',60,3,30);
$enemy33 = new Rider(33,'ドライブ','033_ドライブ',40,2,10);
$enemy34 = new Rider(34,'バース','034_バース',80,4,50);
$enemy35 = new Rider(35,'バルキリー','035_バルキリー',40,5,20);
$enemy36 = new Rider(36,'ヒビキ','036_ヒビキ',60,3,30);
$enemy37 = new Rider(37,'ビルド_ラビット','037_ビルド_ラビット',40,2,10);
$enemy38 = new Rider(38,'ファイズ','038_ファイズ',80,4,50);
$enemy39 = new Rider(39,'フィフティーン','039_フィフティーン',60,3,30);
$enemy40 = new Rider(40,'ホロビ','040_ホロビ',40,2,10);
$enemy41 = new Rider(41,'マッドローグ','041_マッドローグ',40,5,20);
$enemy42 = new Rider(42,'マッハ','042_マッハ',60,3,30);
$enemy43 = new Rider(43,'レーザーターボ','043_レーザーターボ',40,2,10);
$enemy44 = new Rider(44,'ローグ','044_ローグ',80,4,50);

// 敵の数 初回読み込み時の配列生成に使う
$numEnemies = 44;
// 画面遷移したときのメッセージ
$messeage = "";
// 画像にアニメーションを加えるクラスの設定
$imgClass = "";
// タイマーにアニメーションを加えるクラスの設定
$timeClass = "";

session_start();
$playerAttack = 20;

if($_POST){
    $enemy = unserialize($_SESSION['enemy']);
    $seconds = $_POST['seconds'];
    $playerAnswer = filter_var($_POST['playerAnswer'],FILTER_VALIDATE_INT);
    $answer = filter_var($_SESSION['answer'],FILTER_VALIDATE_INT);
    if($playerAnswer === $answer){ // 正解の場合
        $messeage = "<p class='green'>せいかい</p>";
        $imgClass = "buruburuImg";
        $timeClass = "";
        // player攻撃前のHP：$getHp
        $getHp = $enemy->getHp();
        // player攻撃後のHP：$remainingHp
        $remainingHp = $getHp - $playerAttack;
        // ゲージに返したい値：$remainingHpRatio
        $remainingHpRatio = $remainingHp / $_SESSION['maxHp'] * 100;
        $enemy->setHp($remainingHp);
        $_SESSION['numCorrect'] += 1;
    } else {
        $messeage = "<p class='red'>ちがうよ</p>";
        $imgClass = "";
        $timeClass = "buruburuTime";
        // 不正解の場合->ライダーの攻撃でsecondsを減らす　0以下の場合には0を返す
        if($seconds > $enemy->getAttack()) {
            $seconds -= $enemy->getAttack();
            $_SESSION['numWrong'] += 1;
        } else {
            $seconds = 0;
            $_SESSION['numWrong'] += 1;
            header("Location: result2.php");
        }
        // ライダーのHP：$getHp　はそのまま
        $getHp = $enemy->getHp();
        // ゲージに返したい値：$remainingHpRatio 不正解の場合は攻撃しないので、$getHpを割る
        $remainingHpRatio = $getHp / $_SESSION['maxHp'] * 100;
    }
} else {
// *********初回読み込み時**********
//n体の敵のうち1体を抽選する
    $lottery = range(1,$numEnemies);
    shuffle($lottery);
    $keyLottery = 0;
    $enemy = ${"enemy".$lottery[$keyLottery]};
//何体目なのかをセッション変数につめる。初回読み込み時は1体目。
    $_SESSION['whatEnemy'] = 1;

//正解した数。結果画面で表示する
    $_SESSION['numCorrect'] = 0;
//間違えた数。結果画面で表示する
    $_SESSION['numWrong'] = 0;
//スコア。結果画面で表示する
    $_SESSION['score'] = 0;

// インスタンス化直後のHPはゲージの表示に使用する
    $_SESSION['maxHp'] = $enemy->getHp();
    $_SESSION['lottery'] = $lottery;
}

// ライダーのHPが0以下の場合は、新しいライダーを出現させる
$enemyImg = ""; //新しい敵が出現するとき以外は空にする。ajaxで追加
if($enemy->getHp() <= 0){
    if($_SESSION['whatEnemy'] < $numEnemies){ // 次の敵がいるかどうか
        $_SESSION['score'] += $enemy->getScore();
        // 出現させる前に何体目なのかを1増加する
        $_SESSION['whatEnemy'] += 1;
        $lottery = $_SESSION['lottery'];

        // $lotteryのキーは、何体目かの変数より1少ない
        $keyLottery = $_SESSION['whatEnemy'] - 1;
        $enemy = ${"enemy".$lottery[$keyLottery]};
        // インスタンス化直後のHPはゲージの表示に使用する
        $_SESSION['maxHp'] = $enemy->getHp();
        $remainingHpRatio = 100;
        $enemyImg = "img/".$enemy->getImgName().".png";
        $enemyName = $enemy->getName();
    } else { // 次の敵がいなければゲームクリア
        $_SESSION['score'] += $enemy->getScore();
        // 次の敵はいないが、結果画面で表示する数のために仮に1足しておく
        $_SESSION['whatEnemy'] += 1;
        header("Location: result2.php");
    }
}


// riderAttackは、初回画面読み込み時でも次回以降でも都度実行する
list($question,$answer, $button1, $button2, $button3) = $enemy->riderAttack();
$_SESSION['answer'] = $answer;
$_SESSION['enemy'] = serialize($enemy);
$_SESSION['js-enemy'] = json_encode($enemy);

if(!empty($_POST)){
    echo json_encode(array(
        'pl'=> $_POST['playerAnswer'],
        'sec'=> $seconds,
        'whatEnemy'=> $_SESSION['whatEnemy'],
        'enemy'=> $_SESSION['js-enemy'],
        'quest'=>$question,
        'b1'=>$button1,
        'b2'=>$button2,
        'b3'=>$button3,
        'ms'=>$messeage,
        'rh'=>$remainingHpRatio,
        'eimg'=>$enemyImg,
        'ename'=>$enemyName,
        'imgCl'=>$imgClass,
        'timCl'=>$timeClass
    ));
}
