<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //ESTABLECER RELACION  1 ARTISTA - M DISCOS
    public function discos(){
        //hasmany:
        //1. Modelo a relacionar
        //2. FK del artista(papa) en los discos(hijo)
        return $this->hasMany('App\Disco' ,'ArtistId');
    }

    //Establecer relacion 1 artista - m canciones
    public function canciones(){
        //hasmanyThrough: Establecer  relacion 1 m
        //                      con clave intermedia
        //Parmetro 1: Modelo Destino - tercer modelo
        //Parametro 2 : Modelo Intermedio - segundo modelo
        //Parametro 3 : FK del modelo 1 , en el modelo 2
        //Parametro 4 : FK del modelo 2 , en el modelo 3
        //Parametro 5: PK del modelo 1 :
        //Parametro 6 : PK del modelo 2
        return $this->hasManyThrough('App\Cancion' ,
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }

}
