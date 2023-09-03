<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題15</title>
</head>

<body>
  <p>
    <?php

    // クラスFoodの定義
    class Food
    {
      // プロパティの定義
      private $name;
      private $price;

      // メソッド定義
      public function show_price()
      {
        echo $this->price . "<br>";
      }
      // コントランス化
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // クラスAnimalの定義
    class Animal
    {
      // プロパティの定義
      private $name;
      private $height;
      private $weight;

      // メソッド定義
      public function show_height()
      {
        echo $this->height . " <br>";
      }
      // コンストランス化
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化
    $food = new Food("potato", 250);

    $animal = new Animal("dog", 60, 5000);

    // インスタンス出力
    print_r($food);

    // 改行する
    echo "<br>";

    print_r($animal);

    // 改行する
    echo "<br>";

    // メソッドに対してアクセスの実行
    $food->show_price();

    $animal->show_height();
    ?>
  </p>

</body>

</html>