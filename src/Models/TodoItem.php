<?php

namespace Todo;

class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
            $query = "INSERT INTO " . static::TABLENAME . " (title, created) VALUES ('$title', now());";
            self::$db->query($query);
            $result = self::$db->execute();
            return $result;
        }
        
        public static function updateTodo($todoId, $title, $isComplete = null)
        {
            $query = "UPDATE " . static::TABLENAME . " title SET title = '$title', completed = '$isComplete' WHERE id ='$todoId';";
            self::$db->query($query);
            $result = self::$db->execute();
            return $result;
    }

    public static function deleteTodo($todoId)
    {
        $query = "DELETE FROM " . static::TABLENAME . " WHERE id ='$todoId';";
            self::$db->query($query);
            $result = self::$db->execute();
            return $result;
    }
    
    // (Optional bonus methods below)
    // public static function toggleTodos($completed)
    // {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed
    // }

    public static function clearCompletedTodos()
    {
        $query = "DELETE FROM " . static::TABLENAME . " WHERE completed ='true';";
        self::$db->query($query);
        $result = self::$db->execute();
        return $result;
    }

}
