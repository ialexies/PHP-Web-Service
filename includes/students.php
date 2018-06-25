
<?php


class student{
    public function addstudent
    ($name, $course, $location){
        include('dbconnect.php');
        //using sanitize parameter :name, :location, :course
        $query=$db->PREPARE("INSERT students(name, location, course) VALUES(:name, :location, :course)");
        $query->bindParam(':name',$name);
        $query->bindParam(':location',$location);
        $query->bindParam(':course',$course);

        if ($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    //end of add

    public function updateStudent($id, $name, $location, $course){
        include('dbconnect.php');
        //using sanitize parameter :name, :location, :course
        $query=$db->PREPARE("UPDATE students SET 
        name=:name, course=:course, location=:location WHERE id=:id
        ");
        $query->bindParam(':name',$name);
        $query->bindParam(':location',$location);
        $query->bindParam(':course',$course);
        $query->bindParam(':id',$id);

        if ($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    //end of update

    public function deleteStudent($id){
        include 'dbconnect.php';
        //using sanitize parameter :name, :location, :course
        $query=$db->PREPARE("DELETE FROM students WHERE id=:id");
        $query->bindParam(':id',$id);

        if ($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }




    public function getStudents(){
        include('dbconnect.php');
        $query=$db->PREPARE("SELECT * from students");

        if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            return false;
        }
    }    
    
    
    public function getStudent($id){
        include 'dbconnect.php';
        $query=$db->PREPARE("SELECT * FROM students WHERE id=:id");
        $query->bindParam(':id',$id);

        if ($query->execute()){
            return $query->fetchAll
            (PDO::FETCH_ASSOC);
        }
        else{
            return false;
        }
    }






}