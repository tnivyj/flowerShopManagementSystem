<!DOCTYPE html>
<html>
    <head>
        <title>不 存 在 的</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/indexcss.css" />
        <style>
            .button {
                border:2px solid;
                border-radius: 8px;
                color: white;
                padding: 10px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 10px;
                cursor: pointer;
            }
/*            .add{background-color: #00896C;}*/
            .add{background-color: white;color:#00896C;border:2px solid #00896C;}
            .search{background-color: #0089A7;}
            .search:hover{background-color: white;color:#0089A7;border:2px solid #0089A7;}
            .update{background-color: #F7C242;}
            .update:hover{background-color: white;color:#F7C242;border:2px solid #F7C242;}
            .delete{background-color:#EB7A77;}
            .delete:hover{background-color: white;color:#EB7A77;border:2px solid #EB7A77;}
            
            div.haha{text-align: center;}
            div#showdata{
                text-align:center；
                margin:30px；
            }
            #addtable {
                border-collapse: collapse;
                width: 100%;
            }
            #addtable th,#addtable td {
                border-bottom: 1px solid #ddd;
                padding: 15px;
                text-align: left;
            }
            #addtable tr:hover {background-color:#B5CAA0;color:white}
            form{
                padding-left:40%;
                padding-right: 40%;
            }
            #hua{
                background-color: #1EA084;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div align="center"><a href="index.html"><img id="title" src=images/title.png alt="不存在的"></a></div>
                <ul class="oe_menu">
                    <li><a href="Flower.html" id="hua">花</a></li>
                    <li><a href="Customer.html">顾客</a></li>
                    <li><a href="Order.html">顾客订单</a></li>
                    <li><a href="Supplier.html">供应商</a></li>
                    <li><a href="Supply.html">供应订单</a></li>
                    <li><a href="Employee.html">员工</a></li>
                </ul>
            </div>
            <br>
            <div id="page">
                <div class="haha">
                    <a href="FlowerAdd.php"><input type="button" class="button add" value="新增"></a>
                    <a href="FlowerSearch.php"><input type="button" class="button search" value="查询"></a>
                    <a href="FlowerUpdate.php"><input type="button" class="button update" value="修改"></a>
                </div>
                <div id="showdata" class="demo">
                    <?php
                        $link = mysqli_connect('localhost','root','','FinalExam');
                        mysqli_query($link,'set names utf8');
                        if(isset($_POST) && $_POST != NULL){
                            $result = mysqli_query($link,"INSERT INTO Flower(Fid,Fname,Flanguage,IN_Price,OUT_Price)"
                                                   ."VALUES('{$_POST['Fid']}', '{$_POST['Fname']}', '{$_POST['Flanguage']}', '{$_POST['IN_Price']}', '{$_POST['OUT_Price']}')");
                    }
                    ?>
                    <div>
                        <br><br>
                        <form name='add' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
                            <table>
                                <tr>
                                    <td>花编号：</td>
                                    <td><input name='Fid' type='text'></td>
                                </tr>
                                <tr>
                                    <td>花名字：</td>
                                    <td><input name='Fname' type='text'></td>
                                </tr>
                                <tr>
                                    <td>花语：</td>
                                    <td><input name='Flanguage' type='text'></td>
                                </tr>
                                <tr>
                                    <td>进货单价：</td>
                                    <td><input name='IN_Price' type='text'></td>
                                </tr>
                                <tr>
                                    <td>销售单价：</td>
                                    <td><input name='OUT_Price' type='text'></td>
                                </tr>
                            </table><br>
                            <input type='submit' value='新增'>
                        </form>
                    </div>
                    <?php
                        $link = mysqli_connect('localhost','root','','FinalExam');
                        mysqli_query($link,'set names utf8');
                        echo '<br><br><table id=addtable>';
                        $result = mysqli_query($link,"SELECT * FROM Flower");
                        echo '<tr><th>花编号</th><th>花名字</th><th>花语</th><th>进货单价</th><th>销售单价</th></tr>';
                        while($obj = $result->fetch_object()){
                            print_r('<tr><td>'.$obj->Fid.'</td><td>'.$obj->Fname.'</td><td>'.$obj->Flanguage.'</td><td>'.$obj->IN_Price.'</td><td>'.$obj->OUT_Price.'</td></tr>');
                        }
                        mysqli_close($link);
                        echo '</table>';
                    ?>
                </div>
             </div>
        </div>
                
    </body>
</html>