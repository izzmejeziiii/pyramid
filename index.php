<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Pyramid Generator</title>
</head>
<body>
    <div class="center">
		<div class="top">
			<h2 class="text">Pyramid Generator</h2>
		</div>
		<div class="mid">
			<div class="clearfix">
				<div class="box1">
					<form action="" method="get">
						<label for="number"><strong>Number of Layer: </strong></label><br>
						<input type="text" name="number" class="txt"><br>
						<input type="submit" name="submit" value="Submit" class="sub">
						<input type="submit" name="clear" value="Clear" class="clr">
					</form>
                    <?php 
                        $pyramid_str = '';
                        if (isset($_GET['submit'])) {
                            $totalBricks = 0;
                            $oddCount = 0;
                            $evenCount = 0;
                            $num = $_GET['number'];
                            $number = $num;
                            for ($i = 1; $i <= $num; $i++) {
                                $totalBricks = $totalBricks + $i;
                                if($i % 2 == 0) {
                                    $evenCount = $evenCount + $i;
                                }
                                else {
                                    $oddCount = $oddCount + $i;
                                }
                            }
                            echo "<p><strong>Total Bricks:</strong> {$totalBricks} <br><strong>Total Bricks[Even Number]:</strong> {$evenCount} <br><strong>Total Bricks[Odd Count]:</strong> {$oddCount}</p>";
                        }
                    ?>
				</div>
				<div class="box2">
                    <center>
                        <?php 
                            if (isset($_GET['number'])) {
                                $num_row = $_GET['number'];
                                $color = "blue";
                                $n = 0;
                                for ($row = 1; $row <= $num_row; $row++){
                                    for ($repeat = 1; $repeat <= $row; $repeat++){
                                        $n++;
                                        if ($repeat == 1) {
                                            $bgcolor = "yellow";
                                        }
                                        elseif ($repeat != 1 && $repeat < $row && $color == "red"){
                                            $bgcolor = "red";
                                        }
                                        elseif ($repeat !=1 && $repeat < $row && $color == "blue"){
                                            $bgcolor = "blue";
                                        }
                                        elseif ($repeat != 1 && $repeat == $row){
                                            $bgcolor = "yellow";
                                            if ($color == "blue") {
                                                $color = "red";
                                            }
                                            else {
                                                $color = "blue";
                                            }
                                        }
                                        else {
                                            $bgcolor = "";
                                        }
                                        echo "<input style = 'background-color:".$bgcolor.";border:1px solid black;width:40px;text-align:center;' value='".$row."' readonly>";
                                    }
                                    echo "<br/>";
                                }
                            }
                        ?>
                    </center>
				</div>
			</div>
		</div>
		<div class="bot">
			<h5 class="foot">copyright@2022</h5>
		</div>
    </div>
</body>
</html>