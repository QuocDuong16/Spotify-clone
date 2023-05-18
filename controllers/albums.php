<?php
require_once "./config/controller.php";
class Albums extends Controller
{
    public function album_login($id)
    {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);

        $DB = $this->model('AlbumModel');
        $current_album = $DB->getByID($id);
        $list_song = [];
        $list_album = [];
        //song
        foreach ($songDB->getALL() as $song) {
            if ($song->getSongAlbum()->getAlbumId() == $current_album->getAlbumId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB->getALL() as $album) {
            if($album->getAlbumArtist()->getArtistId() == $current_album->getAlbumArtist()->getArtistId() && $album->getAlbumId() != $current_album->getAlbumId()) {
                $list_album[] = $album;
            }
        }

        $this->view('albums/album-login', [
            'id' => $id,
            'album'=>$current_album,
            'albums'=>$list_album,
            'song_num'=>count($list_song),
            'songs' =>$list_song,
            'user'=>$user,
            'song'=>$current_song
        ]);
    }
    public function album($id)
    {
        $DB = $this->model('AlbumModel');
        $current_album = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        $list_album = [];
        //song
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongAlbum()->getAlbumId() == $current_album->getAlbumId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB->getALL() as $album) {
            if($album->getAlbumArtist()->getArtistId() == $current_album->getAlbumArtist()->getArtistId() && $album->getAlbumId() != $current_album->getAlbumId()) {
                $list_album[] = $album;
            }
        }

        $this->view('albums/album', [
            'id' => $id,
            'album'=>$current_album,
            'albums'=>$list_album,
            'song_num'=>count($list_song),
            'songs' =>$list_song
        ]);
    }
}