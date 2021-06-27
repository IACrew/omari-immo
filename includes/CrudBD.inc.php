<?php
    
	
	class CrudBD{
       
    public function list($statu,$type){  
        
        include 'Connection.php';
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res =array();
        $sql = "SELECT * FROM immeuble Where Statu='".$statu."'and Type='".$type."' ";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    
                       $res[]=$row;
                    
                }
                // Free result set
                mysqli_free_result($result);
            }
     }
     return $res;
    }
    public function lastimg($id){
        include 'Connection.php';
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res ="";
        $sql = "SELECT i.path FROM immeubleimage b inner join image i on b.idimage=i.id where idimmeuble=".$id;
        if($result = mysqli_query($conn, $sql)){   
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $res=$row['path'];
                }
                
                // Free result set
                mysqli_free_result($result);
        }
            return $res;
     }
     
     public function getpost($number){
        include 'Connection.php';
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res =array();
        $sql = "SELECT * from immeuble LIMIT ".$number;
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    
                       $res[]=$row;
                    
                }
                }else{
                    return null;
                    // Free result set
                    mysqli_free_result($result);
            }
        }
        return $res;
     }
    
     public function listimg($id){  
        
        include 'Connection.php';
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res =array();
        $sql = "SELECT i.path FROM immeubleimage b inner join image i on b.idimage=i.id where b.idimmeuble=".$id;
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                if(mysqli_num_rows($result) < 3){
                while($row = mysqli_fetch_assoc($result)){
                    
                       $res[]=$row;
                       $res[]=$row;
                       $res[]=$row;
                } 
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                    
                        $res[]=$row;
                        
                 } 
                }
                // Free result set
                mysqli_free_result($result);
            }
        }
        return $res;
     }

     public function post($id){  
        
        include 'Connection.php';
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res=array() ;
        $sql = "SELECT * FROM immeuble Where idm= ".$id;
        if($result = mysqli_query($conn, $sql)){   
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    
                    $res[]=$row;
                 
             }
            }
                
                // Free result set
                mysqli_free_result($result);
        }
            return $res;
    }


    }
