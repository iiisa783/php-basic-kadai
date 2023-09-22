<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
     <p>
        <?php
        class Food{
            public $name;
            public $price;

            public function show_price(){
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price){
                 $this->name = $name;
                 $this->price = $price;
            }
        
        }

        class Animal{
            public $name;
            public $height;
            public $weight;

            public function show_height(){
                echo $this->height . '<br>';
                
            }

            public function __construct(string $name, int $height, int $weight){
                $this ->name = $name;
                $this ->height = $height;
                $this ->weight = $weight; 
            }
        }


        $food = new Food('りんご', 100);
        $animal = new Animal('犬', 20, 30);

        print_r($food);
        print_r($animal);
        print_r('<br>');

        $food -> show_price();
        $animal -> show_height();
        ?>
     </body>
     
</html>

