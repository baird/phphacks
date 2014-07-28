<?
        $connect=mysql_connect("localhost","user","pass") or die("Cannot connect");
        mysql_select_db("dbname") or die("Cannot open DB");
        $showtablequery="SHOW TABLES FROM dbname";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        } 
        ?>