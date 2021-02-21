<?php
  class Product {
    private $id;
    private $name; //1. $nameというデータをProductクラスが持っていることを宣言。実体がないのでまだ使用できない。
    //↑publicはインスタンスから値にアクセス可能（値の取得・書き換えできる）
    // privateにするとインスタンスから取得できない・書き換えも不可
    private $price;
    private $image;

    //functionとconstructの間は半角空ける！
    public function __construct($id,$name,$price,$image) {  //3.インスタンスの引数をconstructの引数内で使用する
      $this->id = $id;
      $this->name = $name; //プロパティのnameを取得。thisはインスタンスの値を取得するという意味。(Productのnameを取得)
      // 4.インスタンス生成時にnameを更新したいため、渡ってきた引数$nameを代入する。
      // 2. インスタンスの生成は特定の処理を行ってからする。その処理を記述するのがconstruct内
      // 3. インスタンスが持っている引数をconstruct後ろの()に渡す。
      $this->price = $price;
      $this->image = $image;
    }

    public function getId() {
      return $this->id;
      //privateで値の取得ができないため、getIdメソッドを定義
      // ここで値を取得している。privateでもクラス内では値の取得は可能。
      // 以下同様
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getImage() {
      return $this->image;
    }
  }
?>