<?php
require_once 'connection.php';

class Song extends Connection
{
      public $id;

      public function allSongs()
      {
            $sql = "SELECT songs.* ,categories.name as category, artists.name as artist, artists.id as artist_id , albums.name as album , albums.id as album_id FROM `songs` inner join albums on songs.album_id= albums.id inner join artists on artists.id=albums.artist_id inner join categories on categories.id=songs.category_id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
      }
      public function getSong()
      {
            $sql = "SELECT * FROM songs where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            $result = $stmt->fetch();
            return $result;
      }
      public function insert($sql)
      {
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            // header("location: ../songs.php");
            // die;
      }

      public function update($name, $category, $album, $description, $lyrics, $id)
      {
            $sql = "UPDATE `songs` SET `name`=?,`description`=?,`lyrics`=?,`album_id`=?,`category_id`=?,`updated_at`='' WHERE `id`=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $description, $lyrics, $album, $category, $id]);
            header("location: ../songs.php");
            die;
      }
      public function delete()
      {
            $sql = "DELETE FROM `songs` WHERE `id`=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$this->id]);
            header("location: ../songs.php");
            die;
      }
}
