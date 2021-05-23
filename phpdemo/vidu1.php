<!DOCTYPE html>
<html>

<head>
    <title>
        <?php
        echo "Tiêu đề trang "
        ?>

    </title>
</head>

<body>
    <h1>
        <?php
        $x = "Xin chào mọi người";
        echo "<p>Đoạn văn bản</p><br />";
        echo $x . "<br />";
        $y = 2332.6666;
        var_dump($y);
        $cars = array("Volvo", "BMW", array("xin chào", "hello"), "Toyota");
        echo $cars[2][0];

        class Car
        {
            public $color;
            public $model;
            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }
            public function hanhdong()
            {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }
        echo "<br />CAR OBJECT <br />";
        $myCar = new Car("black", "Volvo");
        echo $myCar->hanhdong();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar->hanhdong();
        echo "<br />";
        $x = "Hello world!";
        $x = null;
        var_dump($x);

        ?>
    </h1>
</body>

</html>