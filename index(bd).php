<?php 
/* $link=mysqli_connect('localhost','root','')  ;
$query=mysqli_query($link,"CREATE DATABASE NewDB");
 */

$link=mysqli_connect('localhost','root','',"NewDB")  
    or die ("Error".mysqli_error($link));

/* $query = "CREATE TABLE workers
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(256) NOT NULL,
    age INT NOT NULL,
    salary INT NOT NULL
)";
$result=mysqli_query($link,$query) or die ("Error".mysqli_error($link));
if($result){
echo 'All right for table';
} */
/* function SetData($LINK,$NAME,$AGE,$SALARY){
$query="INSERT INTO workers SET name=".$NAME.",age=".$AGE.", salary=".$SALARY ;
mysqli_query($LINK,$query);
echo $Name.'is created';
}
 */

/* function SetData($LINK,$NAME,$AGE,$SALARY){
    $query="INSERT INTO workers (name,age,salary) VALUES('$NAME','$AGE','$SALARY')";
    mysqli_query($LINK,$query);
    echo 'Other'.' is created';
}
    
SetData($link,'Дима',23,400); 
SetData($link,'Петя',25,500);
SetData($link,'Вася',23,500);
SetData($link,'Коля',30,1000);
SetData($link,'Иван',27,500);
SetData($link,'Кирилл',28,1000);*/